<?php

  include "..\connection.php";
  sess("db")->start();
  $cnt = 0;
  $query = "SELECT co_nome, co_valore, co_descrizione FROM configurazione";
  $query2 = "SELECT co_nome FROM configurazione";
  $array= array();
  $tmp = sess("db")->query($query);
  $co_nome = sess("db")->query($query2);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pagina di configurazione</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
	<a href="../profile.php" id="back" class="btn btn-info btn-lg">
		<span class="glyphicon glyphicon-arrow-left"></span>
	</a>
      <div class="container">
		  <div class="container">
			<div class="jumbotron">
			  <h2>Gestione configurazioni</h2>
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
					  <h4 class="modal-title">Aggiungi configurazione</h4>
					</div>
					<div class="modal-body">
					  <form action="addConf.php" name="modulo" method="post">
						  Nome: <br><input type="text" name="nome" class="form-control" placeholder="Inserisci il nome"><br>
						  Valore: <br><input type="number" name="valore" class="form-control" placeholder="Inserisci il valore"><br>
						  Descrizione: <br><input type="text" name="descrizione" class="form-control" placeholder="Inserisci la descrizione"><br>
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
					  <h4 class="modal-title">Rimuovi configurazione</h4>
					</div>
					<div class="modal-body">
					 <form action="remConf.php" method="post">
						Nome: <br><input type="text" name="nome" class="form-control" placeholder="Inserisci il nome"><br>							  <input type="submit" value="Rimuovi">
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
					  <h4 class="modal-title">Modifica configurazione</h4>
					</div>
					<div class="modal-body">
					 	<form action="updConf.php" name="modulo" method="post">
							Nome: <br>			
							<select name="articolo" class="form-control">
								<?php while($el = sess("db")-> fetch($co_nome)) {?>
								<option value="valore"><?php echo $el["co_nome"];?></option>
								<?php }
								sess("db")->stop();?>
							</select><br>
							Valore: <br><input type="number" name="valore" class="form-control" placeholder="Inserisci il valore"><br>
							Descrizione: <br><input type="text" name="descrizione" class="form-control" placeholder="Inserisci la descrizione"><br>
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
