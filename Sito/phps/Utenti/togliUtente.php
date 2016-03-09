<?php 
	include "..\connection.php";
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$email = $_POST['email'];
	sess("db")->start();
	$ret = sess("db")->query("ut_email='$email'");
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="2;URL=utenti.php">
</html>