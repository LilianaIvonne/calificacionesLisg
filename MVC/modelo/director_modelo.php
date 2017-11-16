<?php

    class director_modelo {

    private $db;
    private $director;

    public function __construct(){
        require_once("./modelo/Conectar.php");
        $this->db=Conectar::conexion();
        $this->director=array();
    }
    public function get_director(){
        if($consulta=$this->db->query("Select * from director")){
           // echo "datos cargados"; sólo se usa para comprobar que si se cargaron los datos
        };
        while($filas=$consulta->fetch_assoc()){
           $this->director[]=$filas;
        }
        return $this->director;
    }
}

?>