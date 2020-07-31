<?php

require_once 'DB/conexion.php';
require_once 'Estudiante.php';

class estudianteModel {
    private $DB;
    
    function __construct() {
        $this->DB = new Database();
    }
    
    public function listarEstudiantes(){
        $estudiantes = array();
        $this->DB->getConeccion();
        $sql = "SELECT * FROM ESTUDIANTES";
        $registros = $this->DB->executeQueryReturnData($sql);
        $this->DB->cerrarConeccion();
        foreach ($registros as $row){
            $estudiante = new Estudiante($row['cedula'],$row['nombre'],$row['apellido'],$row['edad']);
            array_push($estudiantes, $estudiante);
        }
        return $estudiantes;
    }

}
