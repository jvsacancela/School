<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_par = new Clase_sql();

    $cod = $_GET['CIC_CODI'];

    $result = $clase_par-> EliminarCiclo($cod);
    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-ciclo.php');

?>