<?php 
	include "..\connection.php";
	$nome = $_POST['nome'];
	$valore = $_POST['valore'];
	$descrizione = $_POST['descrizione'];
	sess("db")->start();
	if(!empty($nome) && !empty($valore) && !empty($descrizione)){
		$ret = sess("db")->query("UPDATE configurazione set co_nome = '".$nome."', co_valore = '".$valore."', co_descrizione = '".$descrizione."';");
	}else{ 
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>	
<html>
<meta http-equiv="refresh" content="1;URL=index.php">
</html>