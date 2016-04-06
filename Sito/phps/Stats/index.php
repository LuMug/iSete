<?php
include "..\connection.php";
sess("db")->start();
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

//query per grafici
$queryUsoCapsule = "select ca_tipo, sum(pre_quantita) as 'numero' from prende group by ca_tipo";

//eseguo le query
$tmpUsoCapsule = sess("db")->query($queryUsoCapsule);

//array per memorizzazione
$quantitaCapsule = array();
$tipo = array();

//ciclo per riempire array
while($row = sess("db")->fetch($tmpUsoCapsule)){
	array_push($quantitaCapsule, $row['numero']);
	array_push($tipo, $row['ca_tipo']);
}

// Create the graph. These two calls are always required
$graph = new Graph(350,220,'auto');
$graph->SetScale("textlin");

//$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135));
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($tipo);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($quantitaCapsule);

// ...and add it to the graPH
$graph->Add($b1plot);


$b1plot->SetWidth(45);
$graph->title->Set("Quantità capsule vedute");

// Display the graph
$graph->Stroke();
$fileName = "usoCapsule.png";
$graph->img->Stream($fileName);
sess("db")->stop();
?>