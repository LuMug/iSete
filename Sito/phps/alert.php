<?php
	include "connection.php";
	$usr = sess("usr");
	$pwd = sess("pwd");
	$show = false;
	sess("db")->start();
	$query = sess("db")->query("select ut_id as 'id' from utente where ut_email = '$usr' and ut_password = '". md5($pwd) . "'");
	$el = sess("db")->fetch($query);
	if($el['id'] == '1'){
		$show = true;
	}
	$query = sess("db")->query("select ca_tipo as 'tipo', ca_quantitaRimanente as 'qta'" .
	" from capsula where ca_quantitaRimanente < (select co_valore from configurazione" .
	" where co_nome='minimo capsule')");
	sess("db")->stop();
?>
<!DOCTYPE html>
<html>
<head>
	<title>iSete | Check capsule</title>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="30">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/jpeg" href="images/isete-logo.jpg">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		while($show && $el = sess("db")->fetch($query)){
			if($el['qta'] > 0){
		?>
		<div class="alert alert-warning fade in">
			<?php echo "Manca/no solo " . $el['qta'] . " pezzo/i della capsula '" . $el['tipo'] . "'"; ?>
		</div>
		<?php
			}
			else{
			?>
		<div class="alert alert-danger fade in">
			<?php echo "Attenzione: capsula ". $el['tipo'] . " esaurita"; ?>
		</div>
			<?php
			}
		}
	?>
</body>
</html>