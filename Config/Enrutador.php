<?php namespace Config;

class Enrutador{
    
    static public function run(Request $request) {
        $controlador = $request->getControlador()  . 'Controller';
        $ruta = ROOT . "Controllers" . DS . $controlador . '.php';
        print_r($ruta);
    }
}


