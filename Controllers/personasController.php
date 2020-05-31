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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['input_nombre'];
            $apellido_paterno = $_POST['input_apellido_paterno'];
            $apellido_materno = $_POST['input_apellido_materno'];
            $estado_salud = $_POST['input_estado_salud'];
            $telefono = $_POST['input_telefono'];
            $ubicacion = $_POST['input_ubicacion'];

            $this->persona->set("nombre", $nombre);
            $this->persona->set("apellido_paterno", $apellido_paterno);
            $this->persona->set("apellido_materno", $apellido_materno);
            $this->persona->set("estado_salud", $estado_salud);
            $this->persona->set("telefono", $telefono);
            $this->persona->set("ubicacion", $ubicacion);
            $this->persona->add();
            $url_personas = "Location:" . URL . "personas/index";
            header($url_personas);
        }
    }

    public function editar() {
        $id = $_POST['input_id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nombre = $_POST['input_nombre'];
            $apellido_paterno = $_POST['input_apellido_paterno'];
            $apellido_materno = $_POST['input_apellido_materno'];
            $estado_salud = $_POST['input_estado_salud'];
            $telefono = $_POST['input_telefono'];
            $ubicacion = $_POST['input_ubicacion'];
            $this->persona->set("id", $id);
            $this->persona->set("nombre", $nombre);
            $this->persona->set("apellido_paterno", $apellido_paterno);
            $this->persona->set("apellido_materno", $apellido_materno);
            $this->persona->set("estado_salud", $estado_salud);
            $this->persona->set("telefono", $telefono);
            $this->persona->set("ubicacion", $ubicacion);
            $this->persona->edit();
            $list_person = "Location: ".URL."/persona/index";
            header($list_person);
        }else{
            $this->persona->set("id", $id);
            $datos = $this->persona->view();
            return $datos;
        }
    }
    public function eliminar(){
        
    }
}
