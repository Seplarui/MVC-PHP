<?php
$vector=array(" ; ; id1; marca1; id2; marca2; ; ; id3; marca3; ");
print_r($vector);
echo "<br/>";
$cadena=implode(":",$vector);
$reemplazo=str_replace(";","",$cadena);
$cadena_array=explode(" ",$reemplazo);
$longitud=count($cadena_array);
for($i=0;$i<$longitud;$i++) {
    
    if ($cadena_array[$i]=="") {
        unset($cadena_array[$i]);
    }
    
}
echo "<pre>";
$kk=  array_values($cadena_array);
echo "<pre>";
echo "Array_values";
var_dump($kk);
echo "</pre>";

?>
<html>
    

<table width=”100%” border=”1″>
  
 <?php
       foreach($kk as $key => $value)
          {
   
 ?>
        <tr>  <!–iniciamos la creacion de una fila–>
               <td><!– agregamos en la primera columna de cada fila cada  key: ç
                               “primero,segundo tercero”–>
                   <?php echo $key; ?>
             </td>
                     <?php foreach($value as $key=>$value)
                       {
                         
                     ?>
              <td><!– En las 3 ultimas columnas restantes agregamos
              el nombre, el apellido y la edad de cada persona.–>
                    <?php echo $value;?>
             </td>
                    <?php
                     }
                    ?>
        </tr>
        <?php
        }
       ?>

</table>

</html>





