<?php

require_once 'Model/estudianteModel.php';

class estudianteController {
   private $model;
   
   function __construct() {
       $this->model = new estudianteModel();
   }
   
   public function listarEstudiantes(){
       $estudiantes = $this->model->listarEstudiantes();
       require_once 'View/Include/header.php';
       require_once 'View/Estudiante/listar.php';
       require_once 'View/Include/footer.php';
       
   }

}
