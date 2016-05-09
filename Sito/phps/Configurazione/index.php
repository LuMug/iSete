<?php
	//include "..\connection.php";
	sess("db")->start();
	$cnt = 0;
	$query = "SELECT co_nome, co_valore, co_descrizione FROM configurazione";
	$query2 = "SELECT co_nome FROM configurazione";
	$array= array();
	$tmp = sess("db")->query($query);
	$co_nome = sess("db")->query($query2);
	$co_nome2 = sess("db")->query($query2);
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
	<div class="container" id="conf">
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="row"><div class="col-xs-12">&nbsp;</div></div>
		<div class="container">
		<div class="jumbotron">
			<h2>Configurazioni</h2>
		</div>
		</div>
		
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#aggiungiconf">Aggiungi configurazione</button>
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#rimuoviconf">Rimuovi configurazione</button>
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modificaconf">Modifica configurazione</button>

			<!-- Modal -->
			<div class="modal fade" id="aggiungiconf" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Aggiungi configurazione</h4>
				</div>
				<div class="modal-body">
					<form id="addC">
						Nome: <br><input type="text" name="nome" class="form-control" placeholder="Inserisci il nome"><br>
						Valore: <br><input type="text" name="valore" class="form-control" placeholder="Inserisci il valore"><br>
						Descrizione: <br><input type="text" name="descrizione" class="form-control" placeholder="Inserisci la descrizione"><br>
						<input type="button" onclick="addConf()" value="Inserisci">
					</form>
				</div>
				</div>
			</div>
			</div>
		
			
		<!-- Modal -->
			<div class="modal fade" id="rimuoviconf" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Rimuovi configurazione</h4>
				</div>
				<div class="modal-body">
				 <form id="remC">
					Nome: <br>
					<select name="nome" class="form-control">
						<?php while($el = sess("db")->fetch($co_nome)) {?>
						<option value="<?php echo $el['co_nome'];?>"><?php echo $el["co_nome"];?></option>
						<?php }
						?>
					</select><br>
					<input type="button" onclick="remConf();" value="Rimuovi">
				</form>
				</div>
				</div>
			</div>
			</div>
			
			<!-- Modal -->
			<div class="modal fade" id="modificaconf" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modifica configurazione</h4>
				</div>
				<div class="modal-body">
				 	<form id="updC">
						Nome: <br>			
						<select name="nome" class="form-control">
							<?php while($el = sess("db")->fetch($co_nome2)) {?>
							<option value="<?php echo $el['co_nome'];?>"><?php echo $el["co_nome"];?></option>
							<?php }
							?>
						</select><br>
						Valore: <br><input type="text" name="valore" class="form-control" placeholder="Inserisci il valore"><br>
						Descrizione: <br><input type="text" name="descrizione" class="form-control" placeholder="Inserisci la descrizione"><br>
						<input type="button" onclick="updConf()" value="Aggiorna">
					</form>
				</div>
				</div>
			</div>
			</div>
		<br>
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