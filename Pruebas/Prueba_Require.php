<?php


require_once('../Modelo/Marca_Modelo.php');

$marca_coche=new Marca_Modelo();
$matrizkk=$marca_coche->getMarca_vehiculo();

echo "<pre>";
print_r($matrizkk);
echo "</pre>";


echo "Prueba";






?>