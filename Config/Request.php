<?php namespace Config;
class Request{
    private $controlador;
    private $metodo;
    private $argumento;
    
    public function __construct() {
        if ( isset($_GET['url']) ){
            $ruta = filter_input(INPUT_GET, 'url',FILTER_SANITIZE_URL);
            //echo "esto es la ruta antes explode= $ruta <br> ";
            $ruta = explode('/', $ruta);
            $ruta = array_filter($ruta);
           // echo "esto es la ruta = $ruta <br> ";
            $this->controlador = strtolower(array_shift($ruta));
            $this->metodo = strtolower(array_shift($ruta));
            $this->argumento = strtolower(array_shift($ruta));
            if (!$this->metodo){
                $this->metodo = 'index'; 
            }
        }else{
             if (!$this->controlador){
                $this->controlador = 'estudiantes'; 
            }
            if (!$this->metodo){
                $this->metodo = 'index';
            }  
        }        
    }
    
    public function getControlador() {
        return $this->controlador;
    }
    public function getMetodo() {
        return $this->metodo;
    }
    public function getArgumento() {
        return $this->argumento;
    }
    
    
    
}
