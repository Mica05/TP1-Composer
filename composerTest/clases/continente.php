<?php

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

} 
?>