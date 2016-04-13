<?php 
	include "../connection.php";
	$email = $_POST['email'];
	$credito = $_POST['credito'];
	sess("db")->start();
	if(!empty($email) && isset($credito)){
		$ret = sess("db")->query("UPDATE utente SET ut_credito = $credito WHERE ut_email = '$email'");
		if($ret){
			echo "Credito modificato per $email!";
		}
		else{
			echo "Credito NON modificato";
		}
	}else{ 
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>