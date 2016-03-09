<?php
	include "connection.php";
	$u = sess("usr");
	$p = sess("pwd");
	if($u == false && $p == false){
		header("Location: ../index.php");
	}
?>