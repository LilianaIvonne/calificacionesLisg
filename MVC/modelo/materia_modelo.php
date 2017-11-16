<?php

    class materia_modelo {

    private $db;
    private $materia;

    public function __construct(){
        require_once("../modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->materia=array();
    }
    public function get_materia(){
        if($consulta=$this->db->query("Select * from materia")){
           // echo "datos cargados"; sólo se usa para comprobar que si se cargaron los datos
        };
        while($filas=$consulta->fetch_assoc()){
           $this->materia[]=$filas;
        }
        return $this->materia;
    }
}

?>