<?php
	include "..\connection.php";
	sess("db")->start();

	$queryUsoCapsule = "select ca_tipo, sum(pre_quantita) as 'numero' from prende group by ca_tipo";
	$queryRimanenti = "select ca_tipo, ca_quantitaRimanente from capsula group by ca_tipo";
	$queryt3utenti = "select u.ut_nome as 'nomet3',sum(pre_quantita) as 'numerot3' from utente u, prende p where u.ut_id = p.ut_id group by u.ut_nome order by numerot3 desc limit 3";

	$tmpUsoCapsule = sess("db")->query($queryUsoCapsule);
	$tmpRimanenti = sess("db")->query($queryRimanenti);
	$tmpt3utenti = sess("db")->query($queryt3utenti);


	//array per memorizzazione
	$quantitaCapsule = array();
	$tipoUso = array();
	$tipoRimanenti = array();
	$quantitaRimanenti = array();
	$nomet3utenti = array();
	$numerot3utenti = array();


	//ciclo per riempire array
	//uso
	while($rowUso = sess("db")->fetch($tmpUsoCapsule)){
		array_push($quantitaCapsule, $rowUso['numero']);
		array_push($tipoUso, $rowUso['ca_tipo']);
	}

	$grandezzaTipoUso = count($tipoUso);

	//rimanenti
	while($rowRimanenti = sess("db")->fetch($tmpRimanenti)){
		array_push($quantitaRimanenti, $rowRimanenti['ca_quantitaRimanente']);
		array_push($tipoRimanenti, $rowRimanenti['ca_tipo']);
	}
	$grandezzaTipoRimanenti = count($tipoRimanenti);

	//top 3 Capsule
	while($rowt3utenti = sess("db")->fetch($tmpt3utenti)){
		array_push($nomet3utenti, $rowt3utenti['nomet3']);
		array_push($numerot3utenti, $rowt3utenti['numerot3']);
	}
	$grandezzat3utenti = count($nomet3utenti);

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

			var contatoreUso = '<?php echo $grandezzaTipoUso; ?>';
			var quantita_uso_js = <?php echo json_encode($quantitaCapsule); ?>;
			var tipo_uso_js = <?php echo json_encode($tipoUso); ?>;


			var contatoreRimanenti = '<?php echo $grandezzaTipoRimanenti; ?>';
			var tipo_rimanenti_js = <?php echo json_encode($tipoRimanenti); ?>;
			var quantita_rimanenti_js = <?php echo json_encode($quantitaRimanenti); ?>;

			var contatoret3Utenti = '<?php echo $grandezzat3utenti; ?>';
			var nome_t3utenti_js = <?php echo json_encode($nomet3utenti); ?>;
			var	numero_t3utenti_js = <?php echo json_encode($numerot3utenti); ?>;




      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChartUso);

      function drawChartUso() {

				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Task');
				data.addColumn('number', 'Hours per Day');


				for (var i = 0; i < contatoreUso; i++) {
					data.addRows([
						[tipo_uso_js[i], parseInt(quantita_uso_js[i])]
					]);
				}

	      var options = {
	        title: 'Capsule vendute'
	      };

	      var chart = new google.visualization.PieChart(document.getElementById('usochart'));

      chart.draw(data, options);
      }

			google.charts.setOnLoadCallback(drawChartRimanenti);
			function drawChartRimanenti() {

				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Task');
				data.addColumn('number', 'Hours per Day');


				for (var i = 0; i < contatoreRimanenti; i++) {
					data.addRows([
						[tipo_rimanenti_js[i], parseInt(quantita_rimanenti_js[i])]
					]);
				}

	      var options = {
	        title: 'Capsule rimanenti'
	      };

	      var chart = new google.visualization.PieChart(document.getElementById('rimanentichart'));

      chart.draw(data, options);
		}

			google.charts.setOnLoadCallback(drawChartT3Utenti);
			function drawChartT3Utenti() {

				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Task');
				data.addColumn('number', 'Hours per Day');


				for (var i = 0; i < contatoret3Utenti; i++) {
					data.addRows([
						[nome_t3utenti_js[i], parseInt(numero_t3utenti_js[i])]
					]);
				}

	      var options = {
	        title: 'Top 3 clienti'
	      };

	      var chart = new google.visualization.PieChart(document.getElementById('top3utenti'));

      chart.draw(data, options);
      }

			$(window).resize(function(){
  			drawChartUso();
				drawChartRimanenti();
				drawChartT3Utenti();
			});
    </script>

		<a href="../profile.php" id="back" class="btn btn-info btn-lg">
			<span class="glyphicon glyphicon-arrow-left"></span>
		</a>
		<div class="container">
			<div class="container">
				<div class="jumbotron">
				  <h2>Pagina di Statistiche</h2>
				</div>
		  </div>
    <!--Div that will hold the pie chart-->
			<div class="container">
	    		<div id="usochart"></div>
					<div id="rimanentichart"></div>
					<div id="top3utenti"></div>
			</div>
		</div>


	 <?php sess("db")->stop();?>
  </body>
</html>
