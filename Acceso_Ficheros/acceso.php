<?php


$fp=fopen("Marcas_Vehiculos.txt","r");
$loop=0;

while(!feof($fp)) {
    $loop++;
    $line=fgets($fp);
    $field[$loop]=explode(';',$line);
    echo '<div>'
    . '<div>Nombre: '.$field[$loop][0].' ' .'Correo: '.$field[$loop][1].' ';
    
    $fp++;
    
    //var_dump($field);
}

fclose($fp);

?>
