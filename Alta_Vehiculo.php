<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Alta Vehículo</title>
</head>
<body>

<h1>Datos del Vehículo</h1>
<p>Alta Marca de Vehículo</p>

<table border="1">

    <form action="Alta_Vehiculo.php" method="post">

<tr><td>Id:</td><td><input type="text" name="id"></td></tr>
<tr><td>Marca:</td><td><input type="text" name="marca"></td></tr>

<tr><td><input type="submit" name="enviar" value="Enviar"></td>
<td><input type="reset" name="borrar" value="Borrar"></td></tr>

<?php
error_reporting(0);
include_once('Modelo/Marca_Modelo.php');
$id_form=$_REQUEST['id'];
$vehiculo = new Marca_Modelo();
$vehiculo->setId_marca($id_form);
$marca_form=$_REQUEST['marca'];
$vehiculo->setMarca_vehiculo($marca_form);
print_r($id_form);
print_r($marca_form);
/*$prueba_fichero=fopen("Marcas_vehiculos.txt","a");
fwrite($prueba_fichero,$id_form);*/
?>

</form>
</table>
</body>
</html>