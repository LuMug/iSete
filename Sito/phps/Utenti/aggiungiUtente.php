<?php 
	include "..\connection.php";
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$credito = $_POST['credito'];
	$password = $_POST['password'];
	sess("db")->start();
	if(!empty($nome) && !empty($cognome) && !empty($credito) && !empty($password)){
		$ret = sess("db")->query("INSERT INTO utente (ut_nome, ut_cognome, ut_credito, ut_password) VALUES ('".$nome."', '".$cognome."', '".$credito."', '".md5($password)."');");
		echo "Aggiunto";  
	}else{ 
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="3;URL=utenti.php">
</html>