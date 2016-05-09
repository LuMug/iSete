<?php
	include "../connection.php";
	$nome = $_POST['nome'];
	$prezzoAcquisto = $_POST['prezzoAcquisto'];
	$prezzoVendita = $_POST['prezzoVendita'];
	$quantitaRimanente = $_POST['quantitaRimanente'];
	sess("db")->start();
	if(!empty($nome) && !empty($prezzoAcquisto) && !empty($prezzoVendita) && isset($quantitaRimanente)){
		$ret = sess("db")->query("INSERT INTO configurazione (ca_tipo, ca_prezzoAcquisto, ca_prezzoVendita, ca_quantitaRimanente) VALUES ('" .
		$nome . "', '" . $prezzoAcquisto . "', '" . $prezzoVendita . "', $quantitaRimanente)");
		if($ret){
			echo "Capsula aggiunta";
		}
		else{
			echo "Errore nell'aggiungere la capsula";
		}
	} else{
		echo "Non hai inserito tutti i campi obbligatori!";
	}
	sess("db")->stop();
?>