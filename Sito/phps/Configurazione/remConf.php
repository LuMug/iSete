<?php 
	include "..\connection.php";
	$nome = $_POST['nome'];
	$valore = $_POST['valore'];
	sess("db")->start();
	if(!empty($nome)){
		$ret = sess("db")->query("DELETE FROM configurazione WHERE co_nome='$nome'");
		if($ret){
			echo "Configurazione rimossa correttamente";
		}
		else{
			echo "Configurazione non trovata";
		}
	}
	else{
		echo "Non hai inserito tutti i campi obbligatori!"; 
	}
	sess("db")->stop();
?>