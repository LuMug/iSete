<?php 
	include "..\connection.php";
	sess("db")->start();
	$array= array();
	$query = "SELECT ut_id, ut_nome, ut_cognome, ut_credito FROM utente";
	$tmp = sess("db")->query($query);

?>	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Utenti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script language="Javascript" type="text/javascript">
	  function controllo(modulo){
	  if (modulo.password.value != modulo.ripeti.value) {
		alert("La password inserita non coincide con la prima!")
		modulo.password.focus()
		modulo.password.select()
		return false
	  }
	  return true
	}
  </script>
  <script type="text/javascript">
  // $(document).ready(function (){
	  
  // });
  </script>
</head>

<body>

<div class="container">
  <div class="container">
        <div class="jumbotron">
          <h2>Gestione configurazioni</h2>
        </div>
	</div>
			<!-- Trigger the modal with a button -->
			  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#aggiungi">Aggiungi utenti</button>
			  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#rimuovi">Rimuovi utenti</button>

			  <!-- Modal -->
			  <div class="modal fade" id="aggiungi" role="dialog">
				<div class="modal-dialog">
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">Aggiungi utenti</h4>
					</div>
					<div class="modal-body">
					  <form action="aggiungiUtente.php" name="modulo" method="post" onsubmit="return controllo(this)">
						  Nome: <br><input type="text" name="nome" class="form-control" placeholder="Inserisci il nome"><br>
						  Cognome: <br><input type="text" name="cognome" class="form-control" placeholder="Inserisci cognome"><br>
						  Credito: <br><input type="number" name="credito" class="form-control" placeholder="Inserisci credito"><br>
						  Email: <br><input type="email" name="email" id="email" pattern="[a-zA-Z]{3,30}.[a-zA-Z]{3,30}@(edu.ti|samtrevano).ch" name="usr" class="form-control" placeholder="Inserisci emal"><br>
						  Password: <br><input type="password" name="password" class="form-control" placeholder="Inserisci password"><br>
						  Ripeti password: <br><input type="password" name="ripeti" class="form-control" placeholder="Ripeti password"><br>
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
					  <h4 class="modal-title">Rimuovi utenti</h4>
					</div>
					<div class="modal-body">
					 <form action="togliUtente.php" method="post">
					  Email: <br><input type="email" name="email" id="email" pattern="[a-zA-Z]{3,30}.[a-zA-Z]{3,30}@(edu.ti|samtrevano).ch" name="usr" class="form-control" placeholder="Inserisci emal"><br>
					  <input type="submit" value="Rimuovi">
					</form>
					</div>
				  </div>
				</div>
			  </div>
			
			
	</br>
	<div class="table-responsive">          
	<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Credito</th>
      </tr>
    </thead>
    <tbody>
		  <?php while($row = sess("db")->fetch($tmp)){ ?>
            <tr>
				<td><?php echo $row["ut_id"];?></td>
				<td><?php echo $row["ut_nome"];?></td>
				<td><?php echo $row["ut_cognome"];?></td>
				<td><?php echo $row["ut_credito"];?></td>
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



