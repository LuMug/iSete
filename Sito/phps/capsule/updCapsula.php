<?php
	include "..\connection.php";
	$nome = $_POST['nome'];
	$prezzoAcquisto = $_POST['prezzoAcquisto'];
	$prezzoVendita = $_POST['prezzoVendita'];
	sess("db")->start();
	if(!empty($nome) && !empty($prezzoAcquisto) && !empty($prezzoVendita)){
		$ret = sess("db")->query("UPDATE capsula set ca_tipo = '".$nome."', ca_prezzoAcquisto = '".$prezzoAcquisto."', ca_prezzoVendita = '".$prezzoVendita"';");
	}else{
		echo "Non hai inserito tutti i campi obbligatori!";
	}
	sess("db")->stop();
?>
<html>
<meta http-equiv="refresh" content="1;URL=index.php">
</html>
