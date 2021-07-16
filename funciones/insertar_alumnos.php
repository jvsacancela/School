<?php
        require_once '../config/config.php';
        require_once '../config/clase_sql.php';

    $insertar = new Clase_sql();

    $alum_fech_matric = $_POST['input_fec_mat'];
    $alum_folio = $_POST['input_folio'];
    $alum_tipo = $_POST['input_tipo'];
    
    $alum_cedula = $_POST['input_cedula'];
    $alum_numero = $_POST['input_numero'];
    $alum_apellido = $_POST['input_apellido'];
    $alum_nombre = $_POST['input_nombre'];
    $alum_nacionalidad = $_POST['input_nacionalidad'];
    $alum_telefono = $_POST['input_telefono'];
    $alum_colAnt = $_POST['input_colAnt'];

    $insertar_alumnos = $insertar-> InsertarAlumnos($alum_codigo, $alum_matricula, $alum_folio, $alum_cedula, $alum_numero, $alum_apellido, $alum_nombre, $alum_nacionalidad, $alum_telefono, $alum_colAnt);
  header ('Location: ../page-alumnos.php');

?>