<?php
	include "check.php";
	$err = "";
	$warn = "";
	$succ = "";
	if(isset($_POST["capsula"]) && isset($_POST["qta"])){
		$cap = $_POST["capsula"];
		$qta = $_POST["qta"];
		if($cap != ""){
			sess("db")->start();
				$v = sess("db")->query("select ut_id, ut_credito from utente where ut_email='" . sess('usr') . "'");
				$v = sess("db")->fetch($v);
				$v_id = $v['ut_id'];
				//$v_cr = $v['ut_credito'];
				//$query = sess("db")->query("update utente set credito=" . (++$v_cr) . " where ut_id=$v_id");
				$query = sess("db")->query("insert into prende(ut_id, ca_tipo, pre_quantita) values ($v_id, '$cap', $qta)");
				if($query){
					$succ = "ordine di $qta $cap eseguito";
				}
				else{
					$warn = "ordine non riuscito";
				}
			sess("db")->stop();
		}
	}
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
</head>
<body>
	<div class="container-fluid">
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row">
			<div class="col-xs-1 col-sm-2 col-md-3"></div>
			<form method="post" action="#" class="form-horizontal col-xs-10 col-sm-8 col-md-6 panel panel-default">
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
					<div class="col-xs-0 col-sm-2"></div>
					<div class="col-xs-6 col-sm-3">
						<a href="profile.php" class="btn btn-link col-xs-12">
							<span class="glyphicon glyphicon-user"> Profilo</span>
						</a>
					</div>
					<div class="col-xs-0 col-sm-2"></div>
					<div class="col-xs-6 col-sm-3">
						<button class="btn btn-primary col-xs-12" type="submit">
							<span class="glyphicon glyphicon-chevron-up"></span> Richiedi
						</button>
					</div>
 					<div class="col-xs-0 col-sm-2"></div>
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
</body>
</html>