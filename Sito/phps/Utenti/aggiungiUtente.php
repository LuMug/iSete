<?php 
	include "..\check.php";
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$credito = $_POST['credito'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	sess("db")->start();
	$query1 = "SELECT co_valore FROM configurazione where co_nome='massimo credito'";
	$tmp1 = sess("db")->query($query1);
	$rr = sess("db")->fetch($tmp1);
	if(!empty($nome) && !empty($cognome) && !empty($credito) && !empty($password)){
		if($credito <= $rr['co_valore']){
			$ret = sess("db")->query("INSERT INTO utente (ut_nome, ut_cognome, ut_credito, ut_password, ut_email)" . 
			"VALUES ('".$nome."', '".$cognome."', '".$credito."', '".md5($password)."', '".$email."');");
			echo "Utente aggiunto!";  
		}else{
			echo "credito troppo alto!";  
		}
	}
	else{
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="0;URL=index.php">
</html>