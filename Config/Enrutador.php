<?php namespace Config;

class Enrutador{
    
    static public function run(Request $request) {
        $controlador = $request->getControlador()  . 'Controller';
        $metodo = $request->getMetodo();
        $argumento = $request->getArgumento();
        $ruta = ROOT . "Controllers" . DS . $controlador . '.php';
        //print_r($ruta);
        if (is_readable($ruta)){
            //require_once "$ruta";
            $mostrar = "Controllers\\".$controlador;
            $controlador = new $mostrar();
            if (!$argumento){
                call_user_func(array($controlador,$metodo));
            }else{
                call_user_func_array( array($controlador,$metodo), array($argumento) );
            }
            
        }else{
            echo 'archivo NO existe';
        }
       $rutaVista = ROOT."Views".DS.$request->getControlador().DS.$request->getMetodo().".php";
       require_once $rutaVista;
        
    }
}


