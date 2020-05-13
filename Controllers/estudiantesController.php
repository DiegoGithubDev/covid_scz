<?php namespace Controllers;
 
class estudiantesController{
    
    public function index() {
        echo "hola soy el index del controlador estudiantes";
    }
    
    public function ver($num) {
        echo "hola soy el ver del controlador estudiantes numero $num";
    }
     
}