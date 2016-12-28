<?php
error_reporting(0);
   
  $fichero=fopen("Marcas_Vehiculos.txt","r");
   while(!feof($fichero)) {
       
       $filas[]=fgets($fichero,999999);
             
   }
 
   $longitud=count($filas);
   $x=0;
   for ($i=0;$i<$longitud;$i++) {
       
       //trim($filas[$i]);
       
       if (($filas[$i]=="\r\n") || ($filas[$i]=="")){
           unset($filas[$i]);
       }
           
   }
   $vector = array_values($filas);
   $longitud_vector=count($vector);
   for($j=0;$j<$longitud_vector;$j++) {
       
           echo "<table border=1>";
           echo "<tr><td>".$vector[$x]."</td><td>".$vector[$x+1]."</td></tr>";
           echo "</table>";
           $x=$x+2;

       
   }


 
