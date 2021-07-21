<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    
    $delete = new Clase_sql();

    $id = $_GET['ALU_NMATRI'];

    $delete_alumno = $delete-> EliminarAlumno($id);

    header('Location: ../page-alumnos.php')
?>