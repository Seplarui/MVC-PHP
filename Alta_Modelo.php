<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Alta Modelo Vehículo</title>
</head>
<body>

<h1>Datos del Modelo</h1>
<p>Alta Modelo de Vehículo</p>

<table border="1">

    <form action="Alta_Modelo.php" method="post">

<tr><td>Id:</td><td><input type="text" name="id"></td></tr>
<tr><td>Modelo:</td><td><input type="text" name="modelo"></td></tr>
<tr><td>Motor:</td><td><input type="text" name="motor"></td></tr>

<tr><td><input type="submit" name="enviar" value="Enviar"></td>
<td><input type="reset" name="borrar" value="Borrar"></td></tr>

<?php

//error_reporting(0);

include_once ('/Modelo/ModeloV_Modelo.php');
if (($_REQUEST['id']!="" && $_REQUEST['modelo']!="" && $_REQUEST['motor']=!"")) {
    
        $tmp_id = (isset($_REQUEST['id'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['id'], ENT_QUOTES, "ISO-8859-1"))) : "";
$id_form=$tmp_id;

    $tmp_modelo = (isset($_REQUEST['modelo'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['modelo'], ENT_QUOTES, "ISO-8859-1"))) : "";
$modelo_form=$tmp_modelo;

    $tmp_motor = (isset($_REQUEST['motor'])) ? strip_tags(trim(htmlspecialchars($_REQUEST['motor'], ENT_QUOTES, "ISO-8859-1"))) : "";
$motor_form=$tmp_motor;
} else if ($_REQUEST['id']==""){
    
    echo "<p>Introduce algún valor en el id por favor. </p>";
    
} else if ($_REQUEST['modelo']="") {
    echo "<p>Introduce algún valor en el modelo del vehículo por favor. </p>";
} else if($_REQUEST['motor']="") {
    echo "<p>Introduce algún valor en el motor del vehículo por favor. </p>";
}

$modelo=new ModeloV_Modelo();
$modelo->setId_modelo($id_form);
$modelo->setModelo_vehiculo($modelo_form);
$modelo->setModelo_motor($motor_form);

?>

</form>
</table>
<a href="index.php">Inicio</a>
</body>
</html>
