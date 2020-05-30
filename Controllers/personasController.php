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
        if ($_REQUEST['POST'] === 'POST') {
            $nombre = $_POST['input_nombre'];
            $apellido_paterno = $_POST['input_apellido_paterno'];
            $apellido_materno = $_POST['input_estado_materno'];
            $estado_salud = $_POST['input_estado_salud'];
            $telefono = $_POST['input_telefono'];
            $ubucacion = $_POST['input_ubicacion'];

            $this->persona->set("nombre", $nombre);
            $this->persona->set("apellido_paterno", $apellido_paterno);
            $this->persona->set("apellido_materno", $apellido_materno);
            $this->persona->set("estado_salud", $estado_salud);
            $this->persona->set("telefono", $telefono);
            $this->persona->set("ubicacion", $ubucacion);
            $this->persona->add();
            $url_personas = "Location:" . URL . "personas/index";
            header($url_personas);
        }
    }

    public function edidtar() {
        
    }
    public function eliminar(){
        
    }
}
