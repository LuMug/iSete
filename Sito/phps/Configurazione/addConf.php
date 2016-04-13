<?php 
	include "../connection.php";
	$nome = $_POST['nome'];
	$valore = $_POST['valore'];
	$descrizione = $_POST['descrizione'];
	sess("db")->start();
	if(!empty($nome) && !empty($valore)){
		$ret = sess("db")->query("INSERT INTO configurazione (co_nome, co_valore, co_descrizione) VALUES ('".$nome."', '".$valore."', '".$descrizione."');");
		if($ret){
			echo "Configurazione aggiunta correttamente";
		}else{
			echo "Configurazione già presente";
		}
	}else{ 
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>