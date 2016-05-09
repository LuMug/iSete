<?php
	include "check.php";
	$err = "";
	$warn = "";
	$succ = "";
	$usr = sess("usr");
	$pwd = sess("pwd");
	$show = false;
	sess("db")->start();
	$query = sess("db")->query("select ut_id as 'id'," .
	" ut_gruppo as 'grp', ut_nome as 'nome', ut_credito as 'cr'" .
	" from utente where ut_email = '$usr' and ut_password = '". md5($pwd) . "'");
	$el = sess("db")->fetch($query);
	if($el['grp'] == 'Responsabile'){
		$show = true;
	}
	if(isset($_POST["capsula"]) && isset($_POST["qta"])){
		$cap = $_POST["capsula"];
		$qta = $_POST["qta"];
		$sps = sess("db")->query("select ca_prezzoVendita as 'prven', ca_quantitaRimanente as 'qtarm' from capsula where ca_tipo = '$cap'");
		$icap = sess("db")->fetch($sps);
		$sps = $icap["prven"];
		$qtarm = $icap["qtarm"];
		if($el["cr"] > $sps && $qtarm >= $qta){
				exec("sudo -u root -S java -classpath .:classes:/opt/pi4j/lib/'*':/opt/jdbc/'*' ServoMotoreModulare $qta $cap 2>&1 < /var/sudopass.secret");
				$query = sess("db")->query("update utente set ut_credito = " . ($el['cr'] -  $sps * $qta) . " where ut_id = " . $el['id']);
				$query = sess("db")->query("insert into prende(ut_id, ca_tipo, pre_quantita) values (" . $el['id'] . ", '$cap', $qta)");
				$query = sess("db")->query("update capsula set ca_quantitaRimanente = " . ($qtarm - $qta) . " where ca_tipo = '$cap'");
				if($query){
					 die("ordine di $qta $cap eseguito");
				}
				else{
					die("ordine non riuscito");
				}
		}
		else{
			die("Errore:\nCredito necessario " . ($qta * $sps) . ", avente (". $el['cr'] . ")\nCapsule presenti $qtarm, richieste $qta");
		}
	}
	sess("db")->stop();
?>
<!DOCTYPE html>
<html>
<head>
	<title>iSete | Richiesta</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/jpeg" href="images/isete-logo.jpg">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">iSete</a>
			</div>
			<div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="#request">Richiesta</a></li>
						<?php if($show){ ?>
						<li><a href="#conf">Configurazione</a></li>
						<li><a href="#users">Gestione utenti</a></li>
						<li><a href="#capsule">Gestione capsule</a></li>
						<?php } ?>
						<li><a href="#history">Storico</a></li>
						<li><a href="#profile">Profilo</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="logout.php">
								<span class="glyphicon glyphicon-log-out"></span>
							</a>
						</li>
						<li><a href="javascript:void(0);">Benvenuto/a <?php echo $el['nome'] ?>!</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div class="container-fluid" id="request">
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row">
			<div class="col-xs-1 col-sm-2 col-md-3"></div>
			<form class="form-horizontal col-xs-10 col-sm-8 col-md-6 panel panel-default">
				<h1>Richiesta</h1>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="capsula">Capsula</label>
					<div class="col-xs-7 col-sm-5">
						<select id="capsula" name="capsula" class="form-control">
							<option value="">--- Tipo ---</option>
							<?php
								sess("db")->start();
								$q = sess("db")->query("select ca_tipo from capsula");
								while($el = sess("db")->fetch($q)){
									echo "<option value='" . $el['ca_tipo'] . "'>" . $el['ca_tipo'] . "</option>";
								}
								sess("db")->stop();

							?>
						</select>
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="qta">Quantit&agrave;</label>
					<div class="col-xs-7 col-sm-5">
						<input type="number" id="qta" pattern="[0-9]" name="qta" class="form-control" value="1" min="1">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<div class="col-xs-1 col-sm-2"></div>
					<div class="col-xs-10 col-sm-8">
						<button class="btn btn-primary col-xs-12" type="button" onclick="request();">
							<span class="glyphicon glyphicon-chevron-up"></span> Richiedi
						</button>
					</div>
 					<div class="col-xs-1 col-sm-2"></div>
				</div>
			</form>
			<div class="col-xs-1 col-sm-2 col-md-3"></div>
		</div>
		<div class="row">
			<div class="col-xs-1 col-sm-2 col-md-3"></div>
			<div class="col-xs-10 col-sm-8 col-md-6">
				<?php
					if($err != ""){
						echo "<div class='alert alert-danger fade in'>" .
						"<a href='javascript:void(0)' class='close' data-dismiss='alert' aria-label='close'>" .
						"&times;</a> $err</div>";
					}
					elseif($succ != ""){
						echo "<div class='alert alert-success fade in'>" .
						"<a href='javascript:void(0)' class='close' data-dismiss='alert' aria-label='close'>" .
						"&times;</a>$succ</div>";
					}
					elseif($warn != ""){
						echo "<div class='alert alert-warning fade in'>" .
						"<a href='javascript:void(0)' class='close' data-dismiss='alert' aria-label='close'>" .
						"&times;</a>$warn</div>";
					}
					else{
						echo "&nbsp;";
					}
				?>
			</div>
			<div class="col-xs-1 col-sm-2 col-md-3"></div>
		</div>
		<?php if($show){ ?>
		<div class="row">
			<div class="col-xs-2 col-sm-3 col-md-4"></div>
			<div class="col-xs-8 col-sm-6 col-md-4">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="alert.php" class="embed-responsive-item" id="alertFrame"></iframe>
				</div>
			</div>
			<div class="col-xs-2 col-sm-3 col-md-4"></div>
		</div>
		<?php } ?>
	</div>
	<?php
		if($show){
			include "configurazione/index.php";
			include "utenti/index.php";
			include "capsule/index.php";
		}
		include "storico/index.php";
		include "profile.php";
	?>
</body>
</html>