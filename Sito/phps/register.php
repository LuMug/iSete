<?php
	include "connection.php";
	sess("db")->start();
	$err = "";
	$succ = "";
	if(isset($_POST["email"]) && isset($_POST["pwd"])){
		$email = $_POST["email"];
		$nomcog = explode("@", $email);
		$nomcog = explode(".", $nomcog[0]);
		$nome = $nomcog[0];
		$cognome = $nomcog[1];
		$pwd = $_POST["pwd"];
		if(sess("db")->query("insert into utente(ut_email, ut_password, ut_nome, ut_cognome)" .
		" values ('$email', '" .
		md5($pwd) ."', '$nome'," .
		" '$cognome')")) {
			$succ = "Registrazione effettuata con successo! <a href='../index.php' class='btn btn-link'>Login</a>";
		}
		else{
			$err = "Registrazione fallita";
		}
		/*mail($email, "Registrazione iSete", "Salve,\n" .
		"questa email garantisce la sua iscrizione ad iSete.\n" .
		"Siete pregati di fare accesso al sito con\n" .
		"la questa e-mail($email) e questa password: $pwd\n" .
		"Le auguriamo un buon rapporto con questo servizio.\n" .
		"Cordiali saluti\n" .
		"\tTeam iSete", "From: ettore9538@gmail.com"*/
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>iSete | Registrazione</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<h1>Registrazione</h1>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="email">Email</label>
					<div class="col-xs-7 col-sm-5">
						<input type="email" name="email" id="email" pattern="[a-zA-Z]{3,30}.[a-zA-Z]{3,30}@(edu.ti|samtrevano).ch" class="form-control" placeholder="E-mail qui...">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<label class="col-xs-4 control-label" for="pwd">Password</label>
					<div class="col-xs-7 col-sm-5">
						<input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password qui...">
					</div>
					<div class="col-xs-1 col-sm-4"></div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 col-md-4"></div>
					<div class="col-xs-6 col-md-4">
						<input class="btn btn-primary col-xs-12" type="submit" value="Registrati">
					</div>
 					<div class="col-xs-3 col-md-4"></div>
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
	</div>
</body>
</html>