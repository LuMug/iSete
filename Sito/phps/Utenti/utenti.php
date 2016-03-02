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
  <h2>Gestione utenti</h2>
  <h3>Aggiungi utenti</h3>
	<form action="aggiungiUtente.php" name="modulo" method="post" onsubmit="return controllo(this)">
	  Nome: <br><input type="text" name="nome"><br>
	  Cognome: <br><input type="text" name="cognome"><br>
	  Credito: <br><input type="number" name="credito"><br>
	  Password: <br><input type="password" name="password"><br>
	  Ripeti password: <br><input type="password" name="ripeti"><br>
	  <input type="submit" value="Inserisci">
	</form>
	<h3>Rimuovi utenti</h3>
	<form action="togliUtente.php" method="post">
	  Nome: <br><input type="text" name="nome"><br>
	  Cognome: <br><input type="text" name="cognome"><br>
	  <input type="submit" value="Rimuovi">
	</form>
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



