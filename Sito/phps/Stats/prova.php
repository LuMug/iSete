<?php
	include "..\connection.php";
	sess("db")->start();
	$queryUsoCapsule = "select ca_tipo, sum(pre_quantita) as 'numero' from prende group by ca_tipo";
	$tmpUsoCapsule = sess("db")->query($queryUsoCapsule);
	
	//array per memorizzazione
	$quantitaCapsule = array();
	$tipo = array();

	//ciclo per riempire array
	while($row = sess("db")->fetch($tmpUsoCapsule)){
		array_push($quantitaCapsule, $row['numero']);
		array_push($tipo, $row['ca_tipo']);
	}
	
	$grandezzaTipo = count($tipo);
	//echo $grandezzaTipo;
	
?>
<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
	
		var contatore = '<?php echo $grandezzaTipo; ?>';
		var quantita_js = <?php echo json_encode($quantitaCapsule); ?>;
		var tipo_js = <?php echo json_encode($tipo); ?>;

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

			var data = google.visualization.arrayToDataTable([
			  ['Capsule', 'Quantità'],
			  [tipo_js[0], quantita_js[0]]
			]);
        

        var options = {
          title: 'Capsule vendute'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="piechart" style="width: 900px; height: 500px;"></div>

	
	 <?php sess("db")->stop();?>
  </body>
</html>