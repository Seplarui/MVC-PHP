<?php
require_once("Marca_Modelo.php");

$prueba= new Marca_Modelo();
$matriz=$prueba->getMarca_vehiculo();

print_r($matriz);

?>

