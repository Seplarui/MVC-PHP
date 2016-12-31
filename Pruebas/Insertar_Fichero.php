<html>
    
    <head><title></title></head>
    
    <body>
        
        <form action="Insertar_Fichero.php" action="post">
            
            Prueba: <input type="text" name="prueba" >
            <input type="submit" value="Boton_Enviar">

        </form>
        
        
    </body>
            
    
    
    
</html>

<?php

$prueba=$_REQUEST['prueba'];
$fichero=fopen("kk.txt","a");
fwrite($fichero,$prueba);


?>