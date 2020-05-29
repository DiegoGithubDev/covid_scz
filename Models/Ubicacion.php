<?php namespace Models;
class Ubicacion {
    private $latitud;
    private $longitud;
    private $con ;
    
    public function __construct() {
        $this->con = new Conexion();
    }
    
    public function set($atributo,$contenido) {
        $this->$atributo = $contenido;
        
    }
    
    public function get($atributo) {
        return $this->$atributo ;
    }
    
    public function listar() {
        $sql = "SELECT * FROM ubicacion";
        $datos = $this->con->consultaRetorno($sql);
        return $datos;
        
    }
    
    public function add() {
        $sql = "INSERT INTO seccion(id,nombre) VALUES(null,'{$this->nombre}')";
        $this->con->consultaSimple($sql);
    }
    
    public function delete() {
        $sql = "DELETE FROM seccion WHERE id='{$this->id}'";
        $this->con->consultaSimple($sql);
    }
    
    public function edit() {
        $sql = "UPDATE FROM seccion SET nombre = '{$this->nombre}' WHERE id ='{$this->id}'";
        $this->con->consultaSimple($sql);
    }
    
    public function view() {
        $sql = "SELECT * FROM seccion WHERE id = '{$this->id}'";
        $datos = $this->con->consultaRetorno($sql);
        $row = mysqli_fetch_array($datos);
        return $row;
    }
    
    
}