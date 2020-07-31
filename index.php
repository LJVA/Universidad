<?php
    require_once 'Controller/estudianteController.php';
    $controller = new estudianteController();

    if(!isset($_GET['accion'])){
        $controller->listarEstudiantes();
    }else{
        $metodo = $_GET['accion'];
        $controller->$metodo();
    }
?>
