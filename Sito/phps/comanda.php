<?php
	if(!empty($_GET['ncapsule'])){
		//echo $_GET['ncapsule'];
		$res = array();
		$stat = "";
		/*exec("cd ..", $res, $stat);
		print_r($res);
		echo $stat;*/
		//exec("sudo java", $res, $stat);
		//exec("java", $res, $stat);
		exec("sudo -u root -S java -classpath .:classes:/opt/pi4j/lib/'*' ServoMotore " . $_GET['ncapsule'] . " 2>&1 < /var/sudopass.secret", $res, $stat);
		print_r($res);
		echo "$stat ";
		echo $_GET['ncapsule'];
	}
?>