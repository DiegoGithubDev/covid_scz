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
        $this->estudiante->set("id", $param);
        $dato=$this->estudiante->view();
        return $dato ;
    }
    
    public function ver($num) {
        echo "hola soy el ver del controlador estudiantes numero $num";
    }
       
}
