<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
    $clase_par = new Clase_sql();

    $cod = $_GET['PAR_CODIGO'];

    $result = $clase_par-> EliminarParalelo($cod);
    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-paralelo.php');

?>