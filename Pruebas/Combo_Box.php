<!doctype html>
<html>
    
    <head><title>Combo_Box</title></head>
    
    <body>
        <?php
        
        $elementos=array("elemento1","elemento2","elemento3","elemento4","elemento5");
      /*  print_r($elementos);
        echo "<br/>";
        echo ($elementos[0]);*/
        
        ?>
        <?php
        
        $longitud_array=count($elementos);
        for($i=0;$i<$longitud_array;$i++) {
            
            if($i%2==0) {
                
            ?>
        <select>
            <option value="volvo"><?php echo ($elementos[$i]);?></option>
            
        </select>
        <?php    
        }
        
        
            }
        
        
        ?>
        
        
        
    </body>
    
    
    
    
</html>