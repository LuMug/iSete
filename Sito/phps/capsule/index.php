<?php

  include "..\connection.php";
  sess("db")->start();
  $cnt = 0;
  $query = "SELECT ca_tipo, ca_prezzoAcquisto, ca_prezzoVendita FROM capsula";
  $array= array();
  $tmp = sess("db")->query($query);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <a href="..\profile.php" id="back" class="btn btn-info btn-lg">
      <span class="glyphicon glyphicon-arrow-left"></span>
    </a>

    <div class="container">
      <div class="container">
        <div class="jumbotron">
          <h2>Gestione capsule</h2>
        </div>
      </div>

      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#aggiungi">Aggiungi configurazione</button>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#rimuovi">Rimuovi configurazione</button>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modifica">Modifica configurazione</button>

    <!-- Modal -->
      <div class="modal fade" id="aggiungi" role="dialog">
        <div class="modal-dialog">
    <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Aggiungi capsula</h4>
            </div>
            <div class="modal-body">
              <form action="addConf.php" name="modulo" method="post">
                Nome: <br><input type="text" name="nome" class="form-control" placeholder="Inserisci il nome"><br>
                Prezzo acquisto: <br><input type="text" name="prezzoAcquisto" class="form-control" placeholder="Inserisci il prezzo d'acquisto"><br>
                Prezzo vendita: <br><input type="text" name="prezzoVendita" class="form-control" placeholder="Inserisci il prezzo di vendita"><br>
                <input type="submit" value="Inserisci">
              </form>
            </div>
          </div>
        </div>
      </div>


    <!-- Modal -->
      <div class="modal fade" id="rimuovi" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Rimuovi capsula</h4>
            </div>
            <div class="modal-body">
              <form action="remConf.php" method="post">
                Nome: <br><input type="text" name="nome" class="form-control" placeholder="Inserisci il nome"><br>
                <input type="submit" value="Rimuovi">
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="modifica" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modifica capsula</h4>
            </div>
            <div class="modal-body">
              <form action="updConf.php" name="modulo" method="post">
                Nome: <br><input type="text" name="nome" class="form-control" placeholder="Inserisci il nome"><br>
                Prezzo acquisto: <br><input type="text" name="prezzoAcquisto" class="form-control" placeholder="Inserisci il prezzo d'acquisto"><br>
                Prezzo vendita: <br><input type="text" name="prezzoVendita" class="form-control" placeholder="Inserisci il prezzo di vendita"><br>
                <input type="submit" value="Inserisci">
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
          </tr>
        </thead>
        <tbody>
          <?php while($row = sess("db")->fetch($tmp)){ ?>
            <tr>
              <td><?php echo $row["ca_tipo"];?></td>
              <td><?php echo $row["ca_prezzoAcquisto"];?></td>
              <td><?php echo $row["ca_prezzoVendita"];?></td>
            </tr>
          <?php }
          sess("db")->stop();?>
        </tbody>
      </table>
      </div>
  </body>
</html>
