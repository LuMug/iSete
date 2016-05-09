<?php 
	include "../connection.php";
	$credito = $_POST['credito'];
	$pass = $_POST['password'];
	$grp = $_POST['grp'];
	$email = $_POST['email'];	
	$nomcog = explode(".", explode("@", $email)[0]);
	$nome = ucfirst($nomcog[0]);
	$cognome = ucfirst($nomcog[1]);
	sess("db")->start();
	if(!empty($email) && isset($credito) && !empty($pass)){
		if($credito >= 0){
			$ret = sess("db")->query("INSERT INTO utente (ut_nome, ut_cognome, ut_credito, ut_password, ut_email, ut_gruppo)" . 
			"VALUES ('$nome', '$cognome', $credito, '" . md5($pass) . "', '$email', '$grp')");
			if($ret){
				echo "Utente aggiunto!";
			}
			else{
				echo "Utente NON aggiunto";
			}
		}else{
			echo "credito troppo basso!";  
		}
	}
	else{
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>