<?php 
	include "..\check.php";
	$credito = $_POST['credito'];
	sess("db")->start();
	if(!empty($credito)){
		$ret = sess("db")->query("UPDATE configurazione SET co_valore='".$credito."' WHERE co_nome='massimo credito'");
		echo "Credito modificato!";  
	}else{ 
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="0;URL=index.php">
</html>
