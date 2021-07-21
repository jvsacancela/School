<?php
        require_once '../config/config.php';
        require_once '../config/clase_sql.php';

    $update = new Clase_sql();

    $alum_fech_matric = $_POST['input_fec_mat'];
    $alum_folio = $_POST['input_folio'];
    $alum_tipo = $_POST['input_tipo'];
    $alum_aaa = $_POST['aaa'];
    $alum_educacion = $_POST['education'];
    $alum_seccion = $_POST['seccion'];
    $alum_especialidad = $_POST['especialidad'];
    $alum_paralelo = $_POST['paralelo'];
    $alum_apellido = $_POST['input_apellido'];
    $alum_nombre = $_POST['input_nombre'];
    $alum_cedula = $_POST['input_cedula'];
    $alum_lug_nac = $_POST['input_lug_nac'];
    $alum_fech_nac = $_POST['fech_nacimiento'];
    $alum_domicilio = $_POST['domicilio'];
    $alum_telefono = $_POST['input_telefono'];
    $alum_civil = $_POST['civil'];
    $alum_sex = $_POST['sex'];
    $alum_new = $_POST['new'];
    $padre_nombre = $_POST['padre_nombre'];
    $padre_nacionalidad = $_POST['padre_nacionalidad'];
    $padre_direccion = $_POST['padre_direccion'];
    $padre_profesion = $_POST['padre_profesion'];
    $padre_cedula = $_POST['padre_cedula'];
    $padre_telefono = $_POST['padre_telefono'];
    $padre_trabajo = $_POST['padre_trabajo'];
    $padre_lug_tra = $_POST['padre_lug_tra'];
    $madre_nombre = $_POST['madre_nombre'];
    $madre_nacionalidad = $_POST['madre_nacionalidad'];
    $madre_direccion = $_POST['madre_direccion'];
    $madre_profesion = $_POST['madre_profesion'];
    $madre_cedula = $_POST['madre_cedula'];
    $madre_telefono = $_POST['madre_telefono'];
    $madre_trabajo = $_POST['madre_trabajo'];
    $madre_lug_tra = $_POST['madre_lug_tra'];
    $cliente_nombre = $_POST['cliente_nombre'];
    $repre_nombre = $_POST['repre_nombre'];
    $parentesco = $_POST['parentesco'];
    $alum_colAnt = $_POST['input_colAnt'];
    $direcc = $_POST['input_direccion'];
    $i_aaa = $_POST['i_aaa'];
    $i_tipo = $_POST['i_tipo'];
    $ii_aa = $_POST['ii_aa'];
    $repite = $_POST['repite'];
    $condicionantes = $_POST['condicionantes'];
    $observacion = $_POST['observacion'];


    $insertar_alumnos = $insertar-> UpdateAlumnos($alum_fech_matric,  $alum_folio,  $alum_tipo, $alum_aaa,  $alum_educacion,  $alum_seccion, $alum_especialidad, $alum_paralelo, $alum_apellido, $alum_nombre, $alum_cedula, $alum_lug_nac,  $alum_fech_nac,  $alum_domicilio,  $alum_telefono,  $alum_civil,  $alum_sex,  $alum_new,  $padre_nombre,  $padre_nacionalidad, $padre_direccion, $padre_profesion, $padre_cedula,  $padre_telefono, $padre_trabajo, $padre_lug_tra, $madre_nombre,  $madre_nacionalidad, $madre_direccion, $madre_profesion, $madre_cedula,  $madre_telefono, $madre_trabajo, $madre_lug_tra, $cliente_nombre, $repre_nombre, $parentesco, $alum_colAnt, $direcc, $i_aaa, $i_tipo, $ii_aa, $repite, $condicionantes, $observacion);
  header ('Location: ../page-alumnos.php');

?>