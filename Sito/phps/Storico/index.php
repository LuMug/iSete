<?php 
	//include "../check.php";
	sess("db")->start();
	$array= array();
	$usr = sess("usr");
	$query = "SELECT u.ut_id, p.ca_tipo, p.pre_data, p.pre_quantita FROM prende p JOIN utente u ON p.ut_id=u.ut_id where u.ut_email='$usr' ORDER BY p.pre_data DESC";
	$tmp = sess("db")->query($query);

?>	
<!DOCTYPE html>
<html>
<head>
  <title>Storico</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="storico/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container" id="history">
	<div class="row"><div class="col-xs-12">&nbsp;</div></div>
	<div class="row"><div class="col-xs-12">&nbsp;</div></div>
	<div class="row"><div class="col-xs-12">&nbsp;</div></div>
  <div class="container">
        <div class="jumbotron">
          <h2>Storico acquisti</h2>
        </div>
	</div>			
	<br>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Capsula</th>
        <th>data</th>
        <th>quantita</th>
      </tr>
    </thead>
    <tbody>
	  <?php
	  $cnt = 0;
	  while($row = sess("db")->fetch($tmp)){ ?>
         <tr>
			<td><?php echo $row["ca_tipo"];?></td>
			<td><?php echo $row["pre_data"];?></td>
			<td><?php echo $row["pre_quantita"];?></td>
         </tr>
	  <?php $cnt++; }
	  if($cnt == 0){
	  	?>
	  	<tr>
			<td colspan="3" class="text-center">Nessun elemento trovato.</td>
      </tr>
	  	<?php
	  }
	  sess("db")->stop();?>
     </tbody>
  </table>
</div>
</body>
</html>