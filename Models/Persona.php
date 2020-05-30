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
        $sql = "INSERT INTO persona(id,nombre,apelllido_paterno,apellido_materno,estado_salud,telefono,ubicacion)
                VALUES(null,'{$this->nombre}','{$this->apellido_paterno}','{$this->apellido_materno}',
                            '{$this->estado_salud}','{$this->telefono}','{$this->ubicacion}')";
        $this->con->consultaSimple($sql);
    }
    public function delete() {
        $ql = "DELETE FROM estudiante WHERE id = '{$this->id}'";
        $this->con->consultaSimple($sql);
        
    }
    
    public function edit() {
        echo $this->id;
        echo $this->nombre;
        echo $this->edad;
        echo $this->promedio;
        echo $this->id_seccion;
        echo $this->imagen;
        $sql = "UPDATE estudiante SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}',imagen = '{$this->imagen}' WHERE id = '{$this->id}'";
        //$sql = "UPDATE estudiante SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}' ";
        $this->con->consultaSimple($sql);              
    }
    
    public function view() {
         $sql = "SELECT t1.* , t2.id as id_seccion,t2.nombre as nombre_seccion FROM estudiante t1 INNER JOIN seccion t2
                    ON t1.id_seccion = t2.id WHERE t1.id = '{$this->id}'";
        $datos = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_array($datos);
        return $row;
    }

            
    }
