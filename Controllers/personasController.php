<?php namespace Controllers;
use Models\Persona as persona;
class personasController {
    private $persona ;
    
    public function __construct() {
        $this->persona = new persona();
    }
    public function index(){
        $datos = $this->persona->listar();
        return $datos;
    }
    public function agregar() {
        
    }
    public function edidtar() {
        
    }
    public function eliminar(){
        
    }
}
