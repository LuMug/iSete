<?php 
	include "../connection.php";
	$email = $_POST['email'];
	sess("db")->start();
	$ret = sess("db")->query("DELETE FROM utente WHERE ut_email='$email'");
	if($ret){
		echo "Utente tolto!";
	}
	else{
		echo "Utente inesistente";
	}
	sess("db")->stop();
?>