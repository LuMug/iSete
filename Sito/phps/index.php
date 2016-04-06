<?php
	include "check.php";
	$err = "";
	$warn = "";
	$succ = "";
	$usr = sess("usr");
	$pwd = sess("pwd");
	$show = false;
	sess("db")->start();
	$query = sess("db")->query("select ut_id as 'id', ut_nome as 'nome' from utente where ut_email = '$usr' and ut_password = '". md5($pwd) . "'");
	$el = sess("db")->fetch($query);
	if($el['id'] == '1'){
		$show = true;
	}
	if(isset($_POST["capsula"]) && isset($_POST["qta"])){
		$cap = $_POST["capsula"];
		$qta = $_POST["qta"];
		if($cap != ""){
				$v = sess("db")->query("select ut_id, ut_credito from utente where ut_email='" . sess('usr') . "'");
				$v = sess("db")->fetch($v);
				$v_id = $v['ut_id'];
				$v_cr = $v['ut_credito'];
				exec("sudo -u root -S java -classpath .:classes:/opt/pi4j/lib/'*' ServoMotore $qta 2>&1 < /var/sudopass.secret");
				$query = sess("db")->query("update utente set credito=" . (--$v_cr) . " where ut_id=$v_id");
				$query = sess("db")->query("insert into prende(ut_id, ca_tipo, pre_quantita) values ($v_id, '$cap', $qta)");
				if($query){
					$succ = "ordine di $qta $cap eseguito";
				}
				else{
					$warn = "ordine non riuscito";
				}
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
						<li><a href="#profile">Profilo</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Altro <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php if($show){ ?>
								<li><a href="#conf">Configurazione</a></li>
								<li><a href="#users">Gestione utenti</a></li>
								<?php } ?>
								<li><a href="#history">Storico</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
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
			<form method="post" action="#request" class="form-horizontal col-xs-10 col-sm-8 col-md-6 panel panel-default">
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
						<button class="btn btn-primary col-xs-12" type="submit">
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
	</div>
	<?php
		if($show){
			include "configurazione/index.php";
			include "utenti/index.php";
		}
		include "storico/index.php";
		include "profile.php";
	?>
</body>
</html>