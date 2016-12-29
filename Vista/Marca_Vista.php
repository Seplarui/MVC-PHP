<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Marca Vista</title>

	<style type="text/css">

	td {
		border:1px dotted #FF0000;
		}
	</style>
	
</head>
<body>
<div align="center">
<h1 align="center">Gestión de Marcas de Coches</h1>
<hr>
<ul><li><a href="../alta_vehiculo.php">Alta Vehículo</a></li></ul>

<!--<table border="1">

<tr><td>LISTADO DE MARCAS DE COCHES</td>-->

<?php
require_once('../Controlador/Marca_Controlador.php');

$longitud_k=count($matrizMarca);
$x=0;
for ($i=0;$i<$longitud_k+2;$i++) {
    if($x<=$longitud_k) {
      echo "<table border=1>";
           echo "<tr><td>".$matrizMarca[$x]."</td><td>".$matrizMarca[$x+1]."</td></tr>";
           echo "</table>";
           $x=$x+2;
    
    }
    
}

/*foreach ($matrizMarca as $registro) {
	
        /*echo $registro[0]."<br>";
        echo $registro[1]."<br>";
        echo $registro[2]."<br>";
        echo $registro[3]."<br>";*/
    
    
    //print_r($vector);
    //print_r( $vector[0][1]);
        
   /* $vector=explode(";",$registro);
    print_r($vector);
    */
    /*
	echo "<tr><td>".$registro . "</td></tr>";


}*/

?>
	</table>
	<a href="index2.php">Inicio</a>
	<hr>
	<i>CEEDCV  2016/2017 21/12/2016</i>
	</div>

</body>
</html>