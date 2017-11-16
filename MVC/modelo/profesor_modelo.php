<?php

    class profesor_modelo {

    private $db;
    private $profesor;

    public function __construct(){
        require_once("../modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->profesor=array();
    }
    public function get_profesores(){
        if($consulta=$this->db->query("Select * from docente")){
           // echo "datos cargados"; sólo se usa para comprobar que si se cargaron los datos
        };
        while($filas=$consulta->fetch_assoc()){
           $this->profesor[]=$filas;
        }
        return $this->profesor;
    }
}

?>