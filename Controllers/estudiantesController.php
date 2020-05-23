<?php namespace Controllers;
use Models\Estudiante as Estudiante;
class estudiantesController{
    private $estudiante;
    
    public function __construct() {
        $this->estudiante = new Estudiante();
    }
    public function index() {
        $dato = $this->estudiante->listar();
        return $dato;
    }
    
    public function editar($param) {
        //echo var_dump($_REQUEST);
        //echo $_FILES["input_imagen"]["name"];
        if ( $_SERVER['REQUEST_METHOD'] === 'GET' ){
            $this->estudiante->set("id", $param);
            $dato=$this->estudiante->view();
            return $dato ;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $param;
            $nombre = $_POST["input_nombre"];
            $edad = $_POST["input_edad"];
            $promedio = $_POST["input_promedio"];
            $id_seccion = $_POST["input_seccion"];
            $imagen = $_FILES["input_imagen"]["name"];
            $this->estudiante->set("id", $id);
            $this->estudiante->set("nombre", $nombre);
            $this->estudiante->set("edad", $edad);
            $this->estudiante->set("promedio", $promedio);
            $this->estudiante->set("id_seccion", $id_seccion);
            $this->estudiante->set("imagen", $imagen);
            $this->estudiante->edit();
            //header("Location: " . URL . "estudiantes");

        }
            
        
       
    }
    
    public function ver($num) {
        echo "hola soy el ver del controlador estudiantes numero $num";
    }
       
}
