<?php
require_once 'mapa.php';

use NNV\RestCountries;

class Region extends Mapa
{

    public function obtenerSubregion($name)
    {
        $restCountries = new RestCountries;

        $subregion= $restCountries->fields(["name","subregion"])->all();
        echo $name." contiene los siguientes paises: <br>";

        foreach ($subregion as $valor){
            if($valor->subregion == $name )
            echo $valor->name."<br>";
    
        }
        echo "<br>";
    }
}

 
?>