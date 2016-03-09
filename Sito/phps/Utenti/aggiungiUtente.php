<?php 
	include "..\connection.php";
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$credito = $_POST['credito'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	sess("db")->start();
	if(!empty($nome) && !empty($cognome) && !empty($credito) && !empty($password)){
		$ret = sess("db")->query("INSERT INTO utente (ut_nome, ut_cognome, ut_credito, ut_password, ut_email) 
		VALUES ('".$nome."', '".$cognome."', '".$credito."', '".md5($password)."', '".$email."');");
		echo "Utente aggiunto!";  
	}else{ 
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="0;URL=index.php">
</html>