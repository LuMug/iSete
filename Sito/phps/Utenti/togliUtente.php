<?php 
	include "..\check.php";
	$email = $_POST['email'];
	sess("db")->start();
	$ret = sess("db")->query("DELETE FROM utente WHERE ut_email='$email'");
	echo "Utente tolto!";  
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="2;URL=index.php">
</html>