<?php
	include "..\connection.php";
	$nome = $_POST['nome'];
	$prezzoAcquisto = $_POST['prezzoAcquisto'];
	$prezzoVendita = $_POST['prezzoVendita'];
	sess("db")->start();
	if(!empty($nome) && !empty($prezzoAcquisto) && !empty($prezzoVendita)){
		$ret = sess("db")->query("INSERT INTO configurazione (ca_tipo, ca_prezzoAcquisto, ca_prezzoVendita) VALUES ('".$nome."', '".$prezzoAcquisto."', '".$prezzoVendita."');");
	}else{
		echo "Non hai inserito tutti i campi obbligatori!";
	}
	sess("db")->stop();
?>
<html>
<meta http-equiv="refresh" content="1;URL=index.php">
</html>
