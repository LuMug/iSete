<?php
  //include "..\connection.php";
  sess("db")->start();
  $cnt = 0;
  $query = "SELECT ca_tipo, ca_prezzoAcquisto, ca_prezzoVendita, ca_quantitaRimanente FROM capsula";
  $tmp = sess("db")->query($query);
  $tmp1 = sess("db")->query($query);
  $tmp2 = sess("db")->query($query);
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
    <div class="container" id="capsule">
	   <div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
      <div class="container">
        <div class="jumbotron">
          <h2>Gestione capsule</h2>
        </div>
      </div>

      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#aggiungiCap">Aggiungi capsula</button>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#rimuoviCap">Rimuovi capsula</button>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modificaCap">Modifica capsula</button>

    <!-- Modal -->
      <div class="modal fade" id="aggiungiCap" role="dialog">
        <div class="modal-dialog">
    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Aggiungi capsula</h4><i></i>
            </div>
            <div class="modal-body">
              <form>
                Nome: <br><input type="text" name="nome" class="form-control" placeholder="Inserisci il nome"><br>
                Prezzo acquisto: <br><input type="text" name="prezzoAcquisto" class="form-control" placeholder="Inserisci il prezzo d'acquisto"><br>
                Prezzo vendita: <br><input type="text" name="prezzoVendita" class="form-control" placeholder="Inserisci il prezzo di vendita"><br>
                Quantità di partenza: <br><input type="text" name="quantitaRimanente" class="form-control" placeholder="Inserisci la quantità"><br>
                <input type="button" onclick="addCap();" value="Inserisci">
              </form>
            </div>
          </div>
        </div>
      </div>


    <!-- Modal -->
      <div class="modal fade" id="rimuoviCap" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Rimuovi capsula</h4>
            </div>
            <div class="modal-body">
              <form>
                Nome: <br><select name="nome" class="form-control">
	                <?php while($row = sess("db")->fetch($tmp)){
	                	echo "<option value='" .
	                	$row['ca_tipo'] . "'>" . $row['ca_tipo'] .
	                	"</option>";
	                } ?>
                </select><br>
                <input type="button" onclick="remCap();" value="Rimuovi">
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="modificaCap" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modifica capsula</h4>
            </div>
            <div class="modal-body">
              <form>
                Nome: <br>
                <select class="form-control">
	                <?php while($row = sess("db")->fetch($tmp1)){
	                	echo "<option value='" .
	                	$row['ca_tipo'] . "'>" . $row['ca_tipo'] .
	                	"</option>";
	                } ?>
                </select>
                <br>
                Prezzo acquisto: <br><input type="text" name="prezzoAcquisto" class="form-control" placeholder="Inserisci il prezzo d'acquisto"><br>
                Prezzo vendita: <br><input type="text" name="prezzoVendita" class="form-control" placeholder="Inserisci il prezzo di vendita"><br>
                Quantit&agrave; rimanente: <br><input type="text" name="quantitaRimanente" class="form-control" placeholder="Inserisci la quantità rimanente"><br>
                <input type="button" onclick="updCap();" value="Inserisci">
              </form>
            </div>
          </div>
        </div>
      </div>
      </br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Prezzo acquisto</th>
            <th>Prezzo vendita</th>
            <th>Quantit&agrave; rimanente</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = sess("db")->fetch($tmp2)){ ?>
            <tr>
              <td><?php echo $row["ca_tipo"];?></td>
              <td><?php echo $row["ca_prezzoAcquisto"];?></td>
              <td><?php echo $row["ca_prezzoVendita"];?></td>
              <td><?php echo $row["ca_quantitaRimanente"];?></td>
            </tr>
          <?php }
          sess("db")->stop();?>
        </tbody>
      </table>
      </div>
  </body>
</html>
