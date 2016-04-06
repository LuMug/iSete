<?php 
	include "..\connection.php";
	$nome = $_POST['nome'];
	$valore = $_POST['valore'];
	$descrizione = $_POST['descrizione'];
	sess("db")->start();
	if(!empty($nome) && !empty($valore) && isset($descrizione)){
		$ret = sess("db")->query("UPDATE configurazione SET co_nome = '$nome', co_valore = '$valore', co_descrizione = '$descrizione' WHERE co_nome = '$nome';");
		if($ret){
			echo "Aggiornamento configurazione effettuato";
		}
		else{
			echo "Errore imprevisto";
		}
	}else{ 
		echo "Non hai inserito tutti i campi obbligatori!";  
	}
	sess("db")->stop();
?>