<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
$clase_par = new Clase_sql();


$cod = $_GET['CIC_CODI'];
$result = $clase_par-> ConsultaCicloUnico($cod);
$row =mysqli_fetch_array($result);
$codigo = $row['CIC_CODI'];
$nombre = $row['CIC_NOMB'];


if(isset($_POST['actualizar'])){
    $cod = $_GET['CIC_CODI'];
    $codi=$_POST['codigo'];
    $name=$_POST['nombre'];
    $result = $clase_par-> ActualizarCiclo($cod, $codi, $name);
    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-ciclo.php');
}

?>
<head>
    <title>Ciclos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>
<!--Ventana modal-->


                    <form action="editar_ciclo.php?CIC_CODI=<?php echo $_GET['CIC_CODI']; ?>" method="POST" class="needs-validation col-4 " novalidate>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="codigo" class="col-md-3 col-form-label">Codigo</label>
                                <div class="col-sm-9">
                                    <input type="text" name="codigo" id="codigo" class="form-control" value="<?php echo $codigo;?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre" class="col-md-3 col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre;?>" required>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="actualizar" class="btn btn-outline-dark col-12">Actualizar</button>
                    </div>
                </form>

<footer class="page-footer blue mt-4 pt-2 border">
<div class="footer-copyright text-center">

© 2021 - Derechos reservados
        <a href=""></a>
</footer>

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"> </script>
<script src="js/validarDatos.js"></script>

</html>