<?php 
	include "..\connection.php";
	echo "togli";
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	sess("db")->start();
	$ret = sess("db")->query("DELETE FROM utente WHERE ut_nome='$nome' AND ut_cognome='$cognome'");
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="3;URL=utenti.php">
</html>