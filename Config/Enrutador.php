<?php namespace Config;

class Enrutador{
    
    static public function run(Request $request) {
        $controlador = $request->getControlador()  . 'Controller';
        $metodo = $request->getMetodo();
        $argumento = $request->getArgumento();
        $ruta = ROOT . "Controllers" . DS . $controlador . '.php';
        if (is_readable($ruta)){
            require_once "$ruta";
            $mostrar = "Controllers\\".$controlador;
            $controlador = new $mostrar();
            if (!$argumento){
               $datos = call_user_func(array($controlador,$metodo));
            }else{
               $datos = call_user_func_array( array($controlador,$metodo), array($argumento) );      
            }
            //echo (var_dump($datos));
            $rutaVista = ROOT."Views".DS.$request->getControlador().DS.$request->getMetodo().".php";
            require_once $rutaVista;    
        }else{
            echo "Controller  NO existe: $ruta";
        }
       
        
    }
}


