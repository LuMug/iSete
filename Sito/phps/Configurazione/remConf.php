<?php 
	include "..\connection.php";
	$nome = $_POST['nome'];
	$valore = $_POST['valore'];
	sess("db")->start();
	if(!empty($nome) && !empty($valore){
		$ret = sess("db")->query("DELETE FROM configurazione WHERE co_nome='$nome' AND co_valore='$valore'");1
	}
	else{
		echo "Non hai inserito tutti i campi obbligatori!"; 
	}
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="3;URL=config_table.php">
</html>