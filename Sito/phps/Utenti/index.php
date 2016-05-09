<?php 
	//include "../check.php";
	sess("db")->start();
	$array= array();
	$query = "SELECT * FROM utente ORDER BY ut_gruppo, ut_cognome, ut_nome";
	$query2 = "SELECT * FROM utente WHERE ut_email <> '" . sess('usr') . "' ORDER BY ut_gruppo, ut_cognome, ut_nome"; 
	$tmp = sess("db")->query($query2);
	$tmp1 = sess("db")->query($query);
	$tmp2 = sess("db")->query($query);
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Utenti</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="utenti/custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="container" id="users">
	<div class="row"><div class="col-xs-12">&nbsp;</div></div>
	<div class="row"><div class="col-xs-12">&nbsp;</div></div>
	<div class="row"><div class="col-xs-12">&nbsp;</div></div>
	<div class="container">
				<div class="jumbotron">
					<h2>Gestione Utenti</h2>
				</div>
	</div>

			<!-- Trigger the modal with a button -->
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#aggiungiusr">Aggiungi utenti</button>
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#rimuoviusr">Rimuovi utenti</button>
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mcreditousr">Aggiorna credito</button>

				<!-- Modal -->
				<div class="modal fade" id="aggiungiusr" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Aggiungi utenti</h4>
					</div>
					<div class="modal-body">
						<form id="addU">
							Email: <br><input type="email" name="email" id="email" pattern="[a-zA-Z]{3,30}.[a-zA-Z]{3,30}@(edu.ti|samtrevano).ch" name="usr" class="form-control" placeholder="Inserisci email"><br>
							Credito: <br><input type="number" name="credito" class="form-control" placeholder="Inserisci credito"><br>
							Password: <br><input type="password" name="password" class="form-control" placeholder="Inserisci password"><br>
							Gruppo:
							<select name="grp" class="form-control">
								<?php
									$enum = array("Utente", "Responsabile");
									for($i = 0; $i < count($enum) && $el = $enum[$i]; $i++){
										echo "<option value='$el'>$el</option>";
									}
								?>
							</select>
							<input type="button" onclick="addUser()" value="Inserisci">
						</form>
					</div>
					</div>
				</div>
				</div>
				
				
				
				
				<!-- Modal -->
				<div class="modal fade" id="rimuoviusr" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Rimuovi utenti</h4>
					</div>
					<div class="modal-body">
					 <form id="remU">
						Utente: <br>
						<select name="email" class="form-control">
						<?php
						while($row = sess("db")->fetch($tmp)){ 
							echo "<option value='" . $row['ut_email'] . "'>" . ucwords($row["ut_nome"] . " " . $row["ut_cognome"]) . "</option>";
						}
						?>
						</select>
						<input type="button" onclick="remUser()" value="Rimuovi">
					</form>
					</div>
					</div>
				</div>
				</div>
				
				
				<!-- Modal -->
				<div class="modal fade" id="mcreditousr" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Aggiorna credito</h4>
					</div>
					<div class="modal-body">
					 <form id="updU">
						Utente: <br>
						<select name="email" class="form-control">
						<?php
						while($row = sess("db")->fetch($tmp1)){ 
							echo "<option value='" . $row['ut_email'] . "'>" . ucwords($row["ut_nome"] . " " . $row["ut_cognome"]) . "</option>";
						}
						?>
						</select>
						<br>
						Credito: <br><input type="number" name="credito" class="form-control" placeholder="Inserisci credito"><br>
						<input type="button" onclick="updUser()" value="Modifica">
					</form>
					</div>
					</div>
				</div>
				</div>			
	<br>					
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Email</th>
				<th>Nome</th>
				<th>Cognome</th>
				<th>Credito</th>
				<th>Gruppo</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row = sess("db")->fetch($tmp2)){ ?>
						<tr>
				<td><?php echo $row["ut_email"];?></td>
				<td><?php echo $row["ut_nome"];?></td>
				<td><?php echo $row["ut_cognome"];?></td>
				<td><?php echo $row["ut_credito"];?></td>
				<td><?php echo $row["ut_gruppo"]; ?></td>
						</tr>
			<?php }
			sess("db")->stop();?>
				</tbody>
	</table>
</div>
</body>
</html>



