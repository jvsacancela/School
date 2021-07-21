<?php
    require_once '../config/config.php';
    require_once '../config/clase_sql.php';
$clase_par = new Clase_sql();
   
if(isset($_GET['PAR_CODIGO'])){
    $cod = $_GET['PAR_CODIGO'];
    $result = $clase_par-> ConsultaParaleloUnico($cod);
    $row =mysqli_fetch_array($result);
    $codigo = $row['PAR_CODIGO'];
    $nombre = $row['PAR_NOMBRE'];
    
}
if(isset($_POST['actualizar'])){
    $cod = $_GET['PAR_CODIGO'];
    $codi=$_POST['codigo1'];
    $name=$_POST['nombre1'];
    $result = $clase_par-> ActualizarParalelo($cod, $codi, $name);
    // header ('Location: consulta_cliente.php');
  header ('Location: ../page-paralelo.php');
}
?>
<!--Ventana modal editar-->
<div class="modal fade" id="modal3">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <i class="fa fa-graduation-cap"></i><span class="h4">   Paralelos</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="editar_paralelo.php?PAR_CODIGO=<?php echo $_GET['PAR_CODIGO']; ?>" method="POST" class="needs-validation col-4 " novalidate>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="codigo1" class="col-md-3 col-form-label">Codigo</label>
                                <div class="col-sm-9">
                                    <input type="text" name="codigo1" id="codigo1" class="form-control" value="<?php echo $codigo;?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre1" class="col-md-3 col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nombre1" id="nombre1" class="form-control" value="<?php echo $nombre;?>" required>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="actualizar" class="btn btn-outline-dark col-12">Actualizar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

