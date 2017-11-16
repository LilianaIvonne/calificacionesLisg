<?php

    class alumnos_modelo {

    private $db;
    private $alumnos;

    public function __construct(){
        require_once("../modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->alumnos=array();
    }
    public function get_alumnos(){
        if($consulta=$this->db->query("Select * from alumno")){
           // echo "datos cargados"; sólo se usa para comprobar que si se cargaron los datos
        };
        while($filas=$consulta->fetch_assoc()){
           $this->alumnos[]=$filas;
        }
        return $this->alumnos;
    }
}

?>
