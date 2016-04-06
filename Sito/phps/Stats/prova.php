<?php
	include "..\connection.php";
	sess("db")->start();
	$queryUsoCapsule = "select ca_tipo, sum(pre_quantita) as 'numero' from prende group by ca_tipo";
	$queryRimanenti = "select ca_tipo, ca_quantitaRimanente from capsula group by ca_tipo";

	$tmpUsoCapsule = sess("db")->query($queryUsoCapsule);
	$tmpRimanenti = sess("db")->query($queryUsoCapsule);


	//array per memorizzazione
	$quantitaCapsule = array();
	$tipoUso = array();

	//ciclo per riempire array
	while($row = sess("db")->fetch($tmpUsoCapsule)){
		array_push($quantitaCapsule, $row['numero']);
		array_push($tipoUso, $row['ca_tipo']);
	}

	$grandezzaTipo = count($tipoUso);
	//echo $grandezzaTipo;

?>
<html>
	<head>
    <title>Pagina di statistiche</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  </head>
  <body>



		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

			var contatore = '<?php echo $grandezzaTipo; ?>';
			var quantita_js = <?php echo json_encode($quantitaCapsule); ?>;
			var tipo_js = <?php echo json_encode($tipoUso); ?>;

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);



      function drawChart() {

				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Task');
				data.addColumn('number', 'Hours per Day');


				for (var i = 0; i < contatore; i++) {
					data.addRows([
						[tipo_js[i], parseInt(quantita_js[i])]
					]);
				}




	      var options = {
	        title: 'Capsule vendute'
	      };

	      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
      }
    </script>

		<div class="container">
			<div class="container">
				<div class="jumbotron">
				  <h2>Pagina di Statistiche</h2>
				</div>
		  </div>
    <!--Div that will hold the pie chart-->
			<div class="container">
	    		<div id="piechart"></div>
			</div>
		</div>


	 <?php sess("db")->stop();?>
  </body>
</html>
