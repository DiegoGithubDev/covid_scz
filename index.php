 <?php
       /* require_once './Config/Autoload.php';
        Autoload::run();
        $seccion = new Models\Seccion();
        $estudiante = new Models\Estudiante();
        $seccion->set("id",1);
        $reg = $seccion->view();
        echo $reg["nombre"];
        echo var_dump( $estudiante->listar() );
         */
        define('DS', DIRECTORY_SEPARATOR);
        define ('ROOT', realpath(dirname(__FILE__)) . DS );
        define('URL', "http://localhost/proyecto/");
        
        require_once './Config/Autoload.php';
        Config\Autoload::run();
        $request=new Config\Request();
        //echo $request->getControlador()."/".$request->getMetodo()."/".$request->getArgumento();
        //print_r($request->getControlador());
        include_once "./Views/template.php";
        Config\Enrutador::run($request);
        
 
?>
 
