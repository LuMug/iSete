<?php 
	include "..\check.php";
	sess("db")->start();
	$array= array();
	$usr = sess("usr");
	$query = "SELECT u.ut_id, p.ca_tipo, p.pre_data, p.pre_quantita FROM prende p JOIN utente u ON p.ut_id=u.ut_id where u.ut_email='$usr'";
	$tmp = sess("db")->query($query);

?>	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Storico</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script language="Javascript" type="text/javascript"/>
  <script type="text/javascript">
  </script>
</head>

<body>
<a href="..\profile.php" id="back" class="btn btn-info btn-lg">
		<span class="glyphicon glyphicon-arrow-left"></span>
	</a>
<div class="container">
  <div class="container">
        <div class="jumbotron">
          <h2>Storico acquisti</h2>
        </div>
	</div>			
	</br>
	<div class="table-responsive">          
	<table class="table">
    <thead>
      <tr>
        <th>Capsula</th>
        <th>data</th>
        <th>quantita</th>
      </tr>
    </thead>
    <tbody>
		  <?php while($row = sess("db")->fetch($tmp)){ ?>
            <tr>
				<td><?php echo $row["ca_tipo"];?></td>
				<td><?php echo $row["pre_data"];?></td>
				<td><?php echo $row["pre_quantita"];?></td>
            </tr>
		  <?php }
		  sess("db")->stop();?>
        </tbody>
  </table>
  </div>
</div>
<table> 
</body>
</html>



