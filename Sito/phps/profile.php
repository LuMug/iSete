<?php
	include "check.php";
	sess("db")->start();
	$err = "";
	$succ = "";
	$usr = sess("usr");
	$pwd = sess("pwd");
	$show = false;
	$query = sess("db")->query("select ut_id as 'id' from utente where ut_email = '$usr' and ut_password = '". md5($pwd) . "'");
	$el = sess("db")->fetch($query);
	if($el['id'] == '1'){
		$show = true;
	}
	if(isset($_POST["nome"]) && isset($_POST["cognome"])){
		$email = $usr;
		$nome = $_POST["nome"];
		$cognome = $_POST["cognome"];
		$pwd1 = $_POST["chgpwd"];
		$pwd2 = $_POST["repwd"];
		if($pwd1 === $pwd2 && $pwd1 != ""){
			$pwd = $pwd1;
		}
		elseif($pwd1 != "" || $pwd2 != ""){
			$err = "Cambiamento password fallito. Ricontrollare i campi e riprovare";
		}
		$query = sess("db")->query("update utente set ut_nome='$nome', ut_cognome='$cognome', ut_password='" . md5($pwd) . "' where ut_email='$usr'");
		if($query){
			$succ = "Profilo salvato correttamente";
		}
		else{
			$err = "Errore imprevisto";
		}
	}
	$query = sess("db")->query("select * from utente where ut_email='$usr' and ut_password='" . md5($pwd) . "'");
	$res = sess("db")->fetch($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>iSete | Profilo</title>
	<meta charset="utf-8">
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
				<h1>Profilo</h1>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="email">Email</label>
					<div class="col-xs-7 col-sm-5">
						<input type="email" id="email" pattern="[a-zA-Z]{3,30}.[a-zA-Z]{3,30}@(edu.ti|samtrevano).ch" class="form-control" disabled="true" placeholder="<?php echo $res['ut_email']; ?>">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="nome">Nome</label>
					<div class="col-xs-7 col-sm-5">
						<input type="text" id="nome" name="nome" class="form-control" value="<?php echo $res['ut_nome']; ?>">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="cognome">Cognome</label>
					<div class="col-xs-7 col-sm-5">
						<input type="text" id="cognome" name="cognome" class="form-control" value="<?php echo $res['ut_cognome']; ?>">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="pwd">Password</label>
					<div class="col-xs-7 col-sm-5">
						<input type="text" id="pwd" class="form-control" disabled="true" placeholder="<?php echo $pwd; ?>">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="chgpwd">Nuova password</label>
					<div class="col-xs-7 col-sm-5">
						<input type="password" id="chgpwd" name="chgpwd" class="form-control" placeholder="Immeti nuova password...">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="repwd">Ripeti password</label>
					<div class="col-xs-7 col-sm-5">
						<input type="password" id="repwd" name="repwd" class="form-control" placeholder="Ripeti nuova password...">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group btn-group btn-group-justified">
					<div class="col-xs-4 col-sm-3">
						<a href="logout.php" class="btn btn-link col-xs-12">Logout</a>
					</div>
					<div class="col-xs-0 col-sm-1"></div>
					<div class="col-xs-4 col-sm-4">
						<a href="request.php" class="btn btn-link col-xs-12">Indietro</a>
					</div>
					<div class="col-xs-0 col-sm-1"></div>
					<div class="col-xs-4 col-sm-3">
						<input class="btn btn-primary col-xs-12" type="submit" value="Salva">
					</div>
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
					else{
						echo "&nbsp;";
					}
				?>
			</div>
			<div class="col-xs-1 col-sm-2 col-md-3"></div>
		</div>
		<?php if($show){ ?>
		<div class="row">
			<div class="col-xs-1 col-sm-2 col-md-3"></div>
			<div class="col-xs-10 col-sm-8 col-md-6 embed-responsive embed-responsive-16by9">
				<iframe src="alert.php" class="embed-responsive-item"></iframe>
			</div>
			<div class="col-xs-1 col-sm-2 col-md-3"></div>
		</div>
		<?php } ?>
	</div>
</body>
</html>
<?php sess("db")->stop(); ?>