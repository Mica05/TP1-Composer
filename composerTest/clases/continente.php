<?php

// require_once __DIR__ . 'servicios\service.php';
// require_once __DIR__ . 'servicios\service.php';

use NNV\RestCountries;

require_once 'mapa.php';


class Continente extends Mapa
{
    
    public function paisesPorContinente($name){
       
        $restCountries = new RestCountries;
        $region=  $restCountries->byRegion($name);
        echo    "Los paises que contiene el continente " . $name ." son:" . "<br>";
        foreach ($region as $valor){
        $pais = $valor->name;
        echo  $pais."<br>";
    }
    echo "</br>";
        
    }
    /*
   

    public function obtenerPorCapital()
    {
        $capital = $restCountries->fields(["name"])->byCapitalCity("Kabul");
        foreach($capital as $valor)
        {
           $Nombre= $valor->name;
          echo json_encode($Nombre);
         }

    }

    public function TraerTodo()
    {
        $detalle = $restCountries->byName("Argentina", true);

        echo json_encode($detalle);   
    }*/





} 
?>