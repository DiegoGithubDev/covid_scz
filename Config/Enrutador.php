<?php namespace Config;

class Enrutador{
    
    static public function run(Request $request) {
        $controlador = $request->getControlador()  . 'Controller';
        print_r($controlador);
    }
}


