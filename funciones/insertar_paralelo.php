<?php
    require_once 'config.php';
    require_once 'clase_sql.php';
    $clase_par = new Clase_sql();

    $cod = $_POST['codigo'];
    $nom = $_POST['nombre'];

    $result = $clase_par-> InsertarParalelo($cod, $nom);
    // header ('Location: consulta_cliente.php');
  header ('Location: index.php');

?>