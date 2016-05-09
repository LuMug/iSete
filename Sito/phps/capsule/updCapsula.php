<?php
	include "../connection.php";
	$nome = $_POST['nome'];
	$prezzoAcquisto = $_POST['prezzoAcquisto'];
	$prezzoVendita = $_POST['prezzoVendita'];
	$quantitaRimanente = $_POST['quantitaRimanente'];
	sess("db")->start();
	if(!empty($nome) && !empty($prezzoAcquisto) && !empty($prezzoVendita)){
		$ret = sess("db")->query("UPDATE capsula set ca_quantitaRimanente = ".$quantitaRimanente.", ca_prezzoAcquisto = '" .
		$prezzoAcquisto."', ca_prezzoVendita = '".$prezzoVendita"' where ca_tipo = '$nome'");
		if($res){
			echo "Modifica effettuata";
		}
		else{
			echo "Errore nella modifica della capsula";
		}
	}else{
		echo "Non hai inserito tutti i campi obbligatori!";
	}
	sess("db")->stop();
?>