<?php // content="text/plain; charset=utf-8"

include "connection.php";
sess("db")->start();


require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

//query per grafici
$queryUsoCapsule = "select ca_tipo, sum(pre_quantita) as 'numero' from prende group by ca_tipo asc limit 3";
$queryUsoUtenti = "select u.ut_nome as 'nome', u.ut_cognome, sum(pre_quantita) as 'somma' from prende p, utente u where u.ut_id = p.ut_id group by p.ut_id order by somma desc limit 3;"

//eseguo le query
$tmpUsoCapsule = sess("db")->query($queryUsoCapsule);
$tmpUsoUtenti = sess("db")->query($queryUsoUtenti);

//array per memorizzazione
$quantitaCapsule = array();
$tipo = array();
$nomeUtenti = array();
$quantitaUtenti = array();

//ciclo per riempire array
while($row = sess("db")->fetch($tmpUsoCapsule)){
	array_push($quantitaCapsule, $row['numero']);
	array_push($tipo, $row['ca_tipo']);
}

while($row = sess("db")->fetch($tmpUsoUtenti)){
	array_push($nomeUtenti, $row['nome']);
	array_push($quantitaUtenti, $row['somma']);
}

// creazione grafici
$graphUsoCapsule = new Graph(350,220,'auto');
$graphUsoCapsule->SetScale("textlin");

$graphUsoUtenti = new Graph(350,220,'auto');
$graphUsoUtenti->SetScale("textlin");

// set major and minor tick positions manually
$graphUsoCapsule->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135));
$graphUsoCapsule->SetBox(false);

$graphUsoUtenti->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135));
$graphUsoUtenti->SetBox(false);


$graphUsoCapsule->ygrid->SetFill(false);
$graphUsoCapsule->xaxis->SetTickLabels(array($tipo[0],$tipo[1],$tipo[2]));
$graphUsoCapsule->yaxis->HideLine(false);
$graphUsoCapsule->yaxis->HideTicks(false,false);

$graphUsoUtenti->ygrid->SetFill(false);
$graphUsoUtenti->xaxis->SetTickLabels(array($nomeUtenti[0],$nomeUtenti[1],$nomeUtenti[2]));
$graphUsoUtenti->yaxis->HideLine(false);
$graphUsoUtenti->yaxis->HideTicks(false,false);


$b1plot = new BarPlot($quantitaCapsule);
$b2plot = new BarPlot($quantitaUtenti);

$graphUsoCapsule->Add($b1plot);
$graphUsoUtenti->Add($b2plot);


$b1plot->SetColor("white");
$b1plot->SetWidth(45);
$b2plot->SetColor("white");
$b2plot->SetWidth(45);


$graphUsoCapsule->title->Set("Top 3 capsule usate");
$graphUsoCapsule->title->Set("Top 3 clienti");

// Display the graph
//$graphUsoCapsule->Stroke();
//$graphUsoUtenti->Stroke();
?>