<?php
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>iSete | Log-out</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="2; ../index.php">
	<link rel="icon" type="image/jpeg" href="images/isete-logo.jpg">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		session_unset();
		session_destroy();
		if(!sess("usr") && !sess("pwd")){
			?>
		<div class='alert alert-success fade in'>
			Log-out effetuato con successo.
		</div>
			<?php
		}
		else{
			?>
		<div class='alert alert-success fade in'>
			Log-out effetuato con successo.
		</div>
			<?php
		}
	?>
</body>
</html>