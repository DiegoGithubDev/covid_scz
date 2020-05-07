<?php namespace Models;
class Conexion{
    private $datos = array(
                         "host"=>"localhost",
                         "user"=>"diego",
                         "pass"=>"Diego123456789@",
                         "db"=>"proyecto"
                     );
    private $con;

    public function __construct($param) {
        $this->con = new \mysqli($this->datos["host"],
                                $this->datos["user"],
                                $this->datos["pass"],
                                $this->datos["db"]
                         );
    }
    
    public function consultaSimple($sql) {
        $this->con->query($query);
    }
    
    public function consultaRetorno($sql) {
        return $this->con->query($query);
    }
    
}

