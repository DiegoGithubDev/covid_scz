<?php namespace Views;
$mytemplate = new template();
class template {
    public  function __construct() {
?>     
        <!DOCTYPE html>    
        <html lang="es">
            <head>
                 <meta charset="UTF-8">
                 <title>Template</title>
                 <link href="<?php echo URL ?>Views/template/css/bootstrap.css" rel="stylesheet" type="text/css"/>
            </head>
            <body>
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <a class="navbar-brand" href="#">Covid-19-SCZ</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor01">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Informacion <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
                            <div class="dropdown-menu" style="">
                                <a class="dropdown-item" href="<?php echo URL ?>estudiantes/index">Listar</a>
                              <a class="dropdown-item" href="<?php echo URL ?>estudiantes/agregar">AgregarEstudiante</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Secciones</a>
                            <div class="dropdown-menu" style="">
                              <a class="dropdown-item" href="<?php echo URL ?>secciones/index">Listar</a>
                              <a class="dropdown-item" href="<?php echo URL ?>secciones/agregar">Agregar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Personas</a>
                            <div class="dropdown-menu" style="">
                              <a class="dropdown-item" href="<?php echo URL ?>personas/index">Listar</a>
                              <a class="dropdown-item" href="<?php echo URL ?>personas/agregar">Agregar</a>
                            </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo URL ?>ubicacion/index">Ubicacion Infectados</a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" placeholder="Search" type="text">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                </nav>
                
<?php           
    }
    
    public function __destruct() {
?> 
                <script src="<?php echo URL ?>Views/template/jquery/jquery.min.js" type="text/javascript"></script>
                <script src=" <?php echo URL ?>Views/template/jquery/popper.min.js" type="text/javascript"></script>
                <script src="<?php echo URL ?>Views/template/jquery/bootstrap.min.js" type="text/javascript"></script>
            </body>
        </html>
<?php         
    }
}

