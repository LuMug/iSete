<?php
  include "connection.php";
  sess("db")->start();
  $cnt = 0;
  $query = "SELECT co_nome, co_valore, co_descrizione FROM configurazione";
  $array= array();
  $tmp = sess("db")->query($query);
 /* while($row = sess("db")->fetch($tmp)){
	  $array['id'] = $cnt;
	  $array['nome'] = $row["co_nome"];
	  $array['valore'] = $row["co_valore"];
	  $array['descrizione'] = $row["co_descrizione"];
	  $cnt++
  }*/
  //printf ("%s %s %s\n",$row["co_nome"],$row["co_valore"],$row["co_descrizione"]);
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
      <div class="container">
        <div class="jumbotron">
          <h1>Config Table</h1>
          <p>Prova comunicazione mysql</p>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Valore</th>
			  <th>Descrizione</th>
            </tr>
          </thead>
          <tbody>
		  <?php while($row = sess("db")->fetch($tmp)){ ?>
            <tr>
              <td><?php echo $row["co_nome"];?></td>
              <td><?php echo $row["co_valore"];?></td>
              <td><?php echo $row["co_descrizione"];?></td>
            </tr>
		  <?php }
		  sess("db")->stop();?>
          </tbody>
        </table>
      </div>
  </body>
</html>
