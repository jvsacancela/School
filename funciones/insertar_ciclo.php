<?php
        require_once '../config/config.php';
        require_once '../config/clase_sql.php';
    $clase_par = new Clase_sql();

   
    $nom = $_POST['nombre'];

    $result = $clase_par-> InsertarCiclo($nom);
    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-ciclo.php');

?>