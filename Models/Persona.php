<?php namespace Models;
class Persona{
    private $id;
    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $estado_salud;
    private $telefono;
    private $ubicacion;
    private $con;
    
    public function __construct() {
        $this->con = new Conexion();
        
    }
    
    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }
    
    public function get($atributo) {
        return  $this->$atributo;
    }
    
    public function listar(){
        $sql = "SELECT * FROM persona";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
    }
    
    public function add() {
        //INSERT INTO `db_proyecto`.`persona` (`nombre`, `apellido_paterno`, `apellido_materno`, `estado_salud`, `telefono`, `ubicacion`) VALUES ('diego', 'mansilla', 'chavez', 'enfermo', '62213725', 'barrio por ahi');

        $sql = "INSERT INTO persona(id,nombre,apellido_paterno,apellido_materno,estado_salud,telefono,ubicacion)
                VALUES(null,'{$this->nombre}','{$this->apellido_paterno}','{$this->apellido_materno}',
                            '{$this->estado_salud}','{$this->telefono}','{$this->ubicacion}')";
        $this->con->consultaSimple($sql);
    }
    public function delete() {
        $ql = "DELETE FROM estudiante WHERE id = '{$this->id}'";
        $this->con->consultaSimple($sql);
        
    }
    
    public function edit() {
        $sql = "UPDATE persona SET nombre = '{$this->nombre}', apellido_paterno = '{$this->apellido_paterno}', apellido_materno = '{$this->apellido_materno}', estado_salud = '{$this->estado_salud}',telefono = '{$this->telefono}', ubicacion = '{$this->ubicacion}' WHERE id = '{$this->id}'";
        //$sql = "UPDATE estudiante SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}' ";
        $this->con->consultaSimple($sql);
    }

    public function view() {
        $sql = "SELECT * FROM persona WHERE id = '{$this->id}'";
        $datos = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_array($datos);
        return $row;
    }

            
    }
