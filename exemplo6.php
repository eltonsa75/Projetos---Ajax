<?php

	$gmtDate = gmdate("D, d M Y H:i:s");
	header("Expires: {$gmtDate} GMT");
	header("Last-Modified: {$gmtDate} GMT");
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=ISO-8859-1");

	// array de informações sobre os times

	$times = array (
		"gremio" => "Time de PORTO ALEGRE (RS)<br>Estádio: Olímpico",
		"palmeiras" => "Time de São Paulo (SP)<br>Estádio: Olímpico",
		"cruzeiro" => "Time de Belo Horizonte (MG)<br>Estádio: Olímpico",
		"flamengo" => "Time de Rio de Janeiro (RJ)<br>Estádio: Olímpico",
		"criciuma" => "Time de Cricíuma (SC)<br>Estádio: Olímpico",
		);

	$time = $_GET["time"];
	if(isset($times[$time]))
		echo $times[$time];

	else
		echo "Time não encontrado!";


?>