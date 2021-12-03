<?php
require_once 'vendor/autoload.php';
use Location\Coordinate;
use Location\Distance\Vincenty;

$coordinate1 = new Coordinate($_GET['latitude1'],$_GET['longitude1']); // Coordenadas1
$coordinate2 = new Coordinate($_GET['latitude2'],$_GET['longitude2']); // Coordenadas2

$calculator = new Vincenty();

$calculator->getDistance($coordinate1, $coordinate2)/1000;

if(strlen($calculator->getDistance($coordinate1, $coordinate2)/1000) > 7){
    echo substr($calculator->getDistance($coordinate1, $coordinate2)/1000, 0, 7) . " KM de distância entre as Coordenadas";
}
// Senão exibi o texto completo
else{
    echo $calculator->getDistance($coordinate1, $coordinate2)/1000 . " KM de distância entre as coordenadas";
}
?>