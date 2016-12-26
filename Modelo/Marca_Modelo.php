<?php

class Marca_Modelo {
    
    private $id_marca;
    private $marca_vehiculo;
    
    public function __construct() {
        $this->id_marca=$id_marca;
        $this->marca_vehiculo=$marca_vehiculo;
    }
    
    
    function getId_marca() {
        return $this->id_marca;
    }

    function getMarca_vehiculo() {
        
        $fichero=fopen("..\Marcas_Vehiculos.txt","r");
        
       // $contador_lineas=0;
        while(!feof($fichero)) {
            $filas[]=fgets($fichero,999999);
            //$campo[$contador_lineas]=explode(';',$filas);
            //$contador_lineas++;
                 
            
        }
        //return $this->marca_vehiculo=$campo[$contador_lineas];
        return $this->marca_vehiculo[]=$filas;
        
    }

    function setId_marca($id_marca) {
        
       // $id_form=$_REQUEST['id'];
        $fichero=fopen("Marcas_Vehiculos.txt","a");
        fwrite($fichero,$id_marca.";");
        fclose($fichero);
    }

    function setMarca_vehiculo($marca_vehiculo) {
        //include_once("../Alta_Vehiculo.php");
        /*$id_form=$_REQUEST['id'];
        $marca_form=$_REQUEST['marca'];*/
       /* print_r($id_form);
        print_r($marca_form);*/
        //$marca_form=$_REQUEST['marca'];
        $fichero=fopen("Marcas_Vehiculos.txt","a");
        fwrite($fichero,$marca_vehiculo);
        fclose($fichero);
        
        //$this->marca_vehiculo = $marca_vehiculo;
    }

      
}

/*$prueba=new Marca_Modelo();
$matriz=$prueba->getMarca_vehiculo();
print_r($matriz);*/


?>

