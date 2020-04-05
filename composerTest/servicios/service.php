<?php   

require_once __DIR__ . 'composerTest\vendor\autoload.php';

class servicio {

use NNV\RestCountries;

$restCountries = new RestCountries;

function serviceRegion($region){

    return $restCountries->byRegion($region);

}

// $paises = $restCountries->all();

// $region = $restCountries->byRegion("asia");

// // echo json_encode($paises);
// echo json_encode($region);

}

?>