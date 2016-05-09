<?php
	if(!empty($_GET['ncap']) && !empty($_GET['cap'])){
		//echo $_GET['ncapsule'];
		$res = array();
		$stat = "";
		/*exec("cd ..", $res, $stat);
		print_r($res);
		echo $stat;*/
		//exec("sudo java", $res, $stat);
		//exec("java", $res, $stat);
		$cmd = "sudo -u root -S java -classpath .:classes:/opt/pi4j/lib/'*':/opt/jdbc/'*' ServoMotoreModulare " . $_GET['ncap'] . " \"" . $_GET['cap'] . "\" 2>&1 < /var/sudopass.secret";
		//$cmd = "sudo -u root -S java -classpath .:classes:/opt/pi4j/lib/'*':/opt/jdbc/'*' ServoMotoreModulare 1 Black 2>&1 < /var/sudopass.secret";
		exec($cmd, $res, $stat);
		print_r($res);
		echo "<br>\ncmd: <code>$cmd</code> -> $stat per " . $_GET['ncap'] .  " " . $_GET['cap'];
	}
?>