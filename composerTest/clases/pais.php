<?php
require_once 'mapa.php';
require_once 'IServicio.php';

use NNV\RestCountries;

class Pais extends Mapa implements IServicio
{
    public static function TraerTodo($name)
    {
        $restCountries = new RestCountries;
        $detalle = $restCountries->byName($name, true);
        echo "El detalle de ". $name ." es: </br>";
        // echo json_encode($detalle);

        foreach($detalle as $valor)
        {
          $region = $valor->region;
          $subregion = $valor->subregion;
          $languages = $valor->languages;
          foreach($languages as $aux)
            $idioma = $aux->name;
          $capital = $valor->capital;
          $population = $valor->population;
          $demonym = $valor->demonym;
          $area = $valor->area;
          $borders = $valor->borders;
          $currencies = $valor->currencies;
          $regionalBlocs = $valor->regionalBlocs;
          
          
        }
        echo "Region: " .$region . "<br> Subregion: " . $subregion . "<br> Languges: ". $idioma . "<br> Capital: " .$capital . "<br> Population: " . $population;
        echo "<br> Demonym:" .$demonym;
        echo "<br> Area: " . $area;
        echo "<br>". "Borders: <br>";

        foreach($borders as $aux)
          echo $aux . "<br>";

        echo "<br> Currencies: ";
        
        foreach($currencies as $aux)
          echo $aux->symbol ."<br>";
        
        echo "</br></br>";
    }


    public function traerPaisPorCapital($pais)
    {
        $restCountries = new RestCountries;
        // $capital= $restCountries->byCapitalCity($name);
        $info = $restCountries->fields(["capital"])->byName($pais);

        foreach($info as $valor)
        {     
         $nombre = $valor->capital;
         echo "La capital de ".$pais." es: ".$nombre;
         }
            }
}  
    

?>