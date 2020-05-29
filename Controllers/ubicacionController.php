<?php namespace Controllers;
use Models\Ubicacion as ubicacion;
class ubicacionController{
       private $ubicacion;
    
    public function __construct() {
        $this->ubicacion = new ubicacion();
    }
    public function index() {
         $datos = $this->ubicacion->listar();
         
         if($_SERVER['REQUEST_METHOD'] === 'POST'){
             exit (json_encode($datos));
         }else{
             return(($datos) );
         }
    }
    
    public function list_ubicacion_to_json() {
        $dato = $this->ubicacion->listar();
         $json= array();
         while ($row = mysqli_fetch_array($dato)) {
            $json[]=array('id'=>$row['id'],
                          'latitud'=>$row['latitud'],
                          'longitud'=>$row['longitud']
                    );
         }
       
       exit( json_encode($json) );
        
    }
    
    
    public function ver($num) {
        echo "hola soy el ver del controlador secciones numero $num";
    }
     
}