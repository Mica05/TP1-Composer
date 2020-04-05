<?php

require_once "clases/continente.php";
require_once "clases/region.php";
require_once "clases/pais.php";

require_once __DIR__ . '\vendor\autoload.php';

use NNV\RestCountries;

$restCountries = new RestCountries;

$continente = new Continente("Asia");


$continente->paisesPorContinente($continente->_datos);

$region = new Region("Western Asia");
$region->obtenerSubregion($region->_datos);

$pais = new Pais("Argentina");

Pais::TraerTodo($pais->_datos);

$pais->traerPaisPorCapital($pais->_datos);

//$subregion = $restCountries->fields(["name","subregion"])->all();

// var_dump($continente->paisesPorContinente());


// $paises = $restCountries->all();

// $region = $restCountries->fields(["name"])->byRegion("Americas");

// $subregion = $restCountries->fields(["name","subregion"])->all();
// $capital = $restCountries->fields(["name"])->byCapitalCity("Kabul");

// $detalle = $restCountries->byName("Argentina", true);

// echo json_encode($detalle);

//busco por region

/*foreach ($region as $valor)
{
    $pais = $valor->name;
    echo $pais."<br>";
   // echo json_encode($region);
}*/

// busco por subregion
/*foreach ($subregion as $valor)
{
    
    if($valor->subregion == "Western Asia")
    echo $valor->name."<br>";
   // echo json_encode($region);
}*/
// busco por capital

// foreach($capital as $valor)
// {
//     $Nombre= $valor->name;
//   echo json_encode($Nombre);

// }


// echo json_encode($paises);
//echo json_encode($region);

// var_dump($region);
// foreach( )
// echo $region->$name;
?>