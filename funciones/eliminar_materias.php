<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $conculta = new Clase_sql();

    $cod = $_GET['MAT_CODIGO'];

    $result = $conculta-> EliminarMateria($cod);
    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-materias.php');

?>