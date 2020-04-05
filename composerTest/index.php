<?php

require_once "clases/continente.php";
require_once "clases/region.php";
require_once "clases/pais.php";

// require_once __DIR__ . '\vendor\autoload.php';

// use NNV\RestCountries;

// $restCountries = new RestCountries;

// $continente = new Continente("Asia");


$continente->paisesPorContinente($continente->_datos);

$region = new Region("Western Asia");
$region->obtenerSubregion($region->_datos);

$pais = new Pais("Argentina");

Pais::TraerTodo($pais->_datos);

$pais->traerPaisPorCapital($pais->_datos);

?>