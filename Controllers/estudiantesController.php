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
    public function agregar() {
        if ($_SERVER["REQUEST_METHOD"]==="POST"){
            $nombre = $_POST["input_nombre"];
            $edad = $_POST["input_edad"];
            $promedio = $_POST["input_promedio"];
            $id_seccion = $_POST["input_seccion"];
            $imagen = $_FILES["input_imagen"]["name"];
            $this->estudiante->set("nombre", $nombre);
            $this->estudiante->set("edad", $edad);
            $this->estudiante->set("promedio", $promedio);
            $this->estudiante->set("id_seccion", $id_seccion);
            $this->estudiante->set("imagen", $imagen);  
            $nombre_imagen = $_FILES["input_imagen"]["name"];
            $ruta = ROOT . "Views" . DS . "template" . DS ."imagenes" . DS . $nombre_imagen;
            $allowed_image_extension = array("png","jpg","jpeg");
            $file_extension = pathinfo( $_FILES["input_imagen"]["name"], PATHINFO_EXTENSION );
            if ($file_extension && in_array($file_extension, $allowed_image_extension)){
                $this->estudiante->add();
                move_uploaded_file( $_FILES["input_imagen"]["tmp_name"] , $ruta );  
                header( "Location: " . URL . "estudiantes/index");
            }else
            {
                $msg = " this file is not validate";
                $msg = urlencode($msg);
                header( "Location:" . URL."estudiantes/agregar/".$id."?msg_error=$msg");
            }
        }
            
    }
    
    public function editar($param) {
        //echo var_dump($_REQUEST);
        //echo $_FILES["input_imagen"]["name"];
        if ( $_SERVER['REQUEST_METHOD'] === 'GET' ){
            $this->estudiante->set("id", $param);
            $datos = $this->estudiante->view();
            return $datos;
            
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
            $nombre_imagen = $_FILES["input_imagen"]["name"];
            $ruta = ROOT . "Views" . DS . "template" . DS ."imagenes" . DS . $nombre_imagen;
            $allowed_image_extension = array("png","jpg","jpeg");
            $file_extension = pathinfo( $_FILES["input_imagen"]["name"], PATHINFO_EXTENSION );
            if ($file_extension && in_array($file_extension, $allowed_image_extension)){
                $this->estudiante->edit();
                move_uploaded_file( $_FILES["input_imagen"]["tmp_name"] , $ruta );  
                header( "Location: " . URL . "estudiantes/index");
            }else
            {
                $msg = " this file is not validate";
                $msg = urlencode($msg);
                header( "Location:" . URL."estudiantes/editar/".$id."?msg_error=$msg");
            }
            

        }
            
        
       
    }
    
    public function ver($num) {
        echo "hola soy el ver del controlador estudiantes numero $num";
    }
       
}
