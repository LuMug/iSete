<?php 
	include "..\connection.php";
	$nome = $_POST['nome'];
	$valore = $_POST['valore'];
	sess("db")->start();
	if(!empty($nome)){
		$ret = sess("db")->query("DELETE FROM configurazione WHERE co_nome='$nome'");
	}
	else{
		echo "Non hai inserito tutti i campi obbligatori!"; 
	}
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="1;URL=index.php">
</html>