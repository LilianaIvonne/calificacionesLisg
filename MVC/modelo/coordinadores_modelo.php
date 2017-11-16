<?php

    class coordinadores_modelo {

    private $db;
    private $coordinadores;

    public function __construct(){
        require_once("../modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->coordinadores=array();
    }
    public function get_coordinadores(){
        if($consulta=$this->db->query("Select * from coordinador")){
           // echo "datos cargados"; sólo se usa para comprobar que si se cargaron los datos
        };
        while($filas=$consulta->fetch_assoc()){
           $this->coordinadores[]=$filas;
        }
        return $this->coordinadores;
    }
}

?>
