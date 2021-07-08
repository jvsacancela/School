<?php
        require_once '../config/config.php';
        require_once '../config/clase_sql.php';
    $consulta = new Clase_sql();

    
    $codm = $_POST ['codigo'];
    $codcurm = $_POST ['codigo_curso'];
    $nombm = $_POST ['nombre'];
    $codperm = $_POST ['codigo_personal'];
    $gram = $_POST ['grado'];
    $tipm = $_POST ['tipo'];
    $ordenm = $_POST ['orden'];
    $resaltm = $_POST ['resaltar'];
    $obprmam = $_POST ['obpmra'];
    $cocomam = $_POST ['cocoma'];
    $numacom = $_POST ['numaco'];
    $oculm = $_POST ['ocultar'];
    $areidm = $_POST ['area_id'];
    $areacm = $_POST ['area_academica'];
    $ambm = $_POST ['ambito'];
        
    $result = $consulta-> InsertarMateria($codm,$codcurm,$nombm,$codperm,$gram,$tipm,$ordenm,$resaltm,$obprmam,$cocomam,$numacom,$oculm,$areidm,$areacm,$ambm);
    echo $gram, $resaltm, $obprmam, $oculm;
    // header ('Location: consulta_cliente.php');
    
  //header ('Location: ../page-materias.php');

?>