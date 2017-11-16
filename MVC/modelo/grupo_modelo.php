<?php

    class grupo_modelo {

    private $db;
    private $grupo;

    public function __construct(){
        require_once("../modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->grupo=array();
    }
    public function get_grupo(){
        if($consulta=$this->db->query("Select * from grupo")){
           // echo "datos cargados"; sólo se usa para comprobar que si se cargaron los datos
        };
        while($filas=$consulta->fetch_assoc()){
           $this->grupo[]=$filas;
        }
        return $this->grupo;
    }
}

?>