<?php

require_once "clases/continente.php";

require_once __DIR__ . '\vendor\autoload.php';

use NNV\RestCountries;

$restCountries = new RestCountries;

$paises = $restCountries->all();

$region = $restCountries->byRegion("asia");

// echo json_encode($paises);
echo json_encode($region);

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('myLog.log', Logger::WARNING));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');

?>