<?php
	include "check.php";
	if(isset($_POST["capsula"]) && isset($_POST["qta"])){
		$cap = $_POST["capsula"];
		$qta = $_POST["qta"];
		if($cap != ""){
			sess("db")->start();
				$query = sess("db")->query("");
			sess("db")->stop();
		}
	}
	$err = "";
	$warn = "";
	$succ = "";
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
		<div class="row">
			<div class="col-xs-1 col-sm-2 col-md-3"></div>
			<form method="post" action="#" class="form-horizontal col-xs-10 col-sm-8 col-md-6 panel panel-default">
				<h1>Richiesta</h1>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="capsula">Capsula</label>
					<div class="col-xs-7 col-sm-5">
						<select id="capsula" class="form-control">
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
						<input type="number" id="qta" class="form-control" value="1" min="1">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<div class="col-xs-1 col-sm-2"></div>
					<div class="col-xs-5 col-sm-3">
						<a href="profile.php" class="btn btn-link col-xs-12">Profilo</a>
					</div>
					<div class="col-xs-0 col-sm-2"></div>
					<div class="col-xs-5 col-sm-3">
						<input class="btn btn-primary col-xs-12" type="submit" value="Richiedi">
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
</body>
</html>