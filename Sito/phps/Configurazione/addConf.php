<?php 
	include "..\connection.php";
	$nome = $_POST['nome'];
	$valore = $_POST['valore'];
	$descrizione = $_POST['descrizione'];
	sess("db")->start();
	if(!empty($nome) && !empty($valore) && !empty($descrizione)){
		$ret = sess("db")->query("INSERT INTO configurazione (co_nome, co_valore, co_descrizione) VALUES ('".$nome."', '".$valore."', '".$descrizione."');");
	}else{ 
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="3;URL=config_table.php">
</html>