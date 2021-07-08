<?php
 
    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $consulta = new Clase_sql();

    $consulta_materia = $consulta-> ConsultaMateriaGeneral();
?>
<?php include("includes/header.php") ?>

    <div class="container " style="margin-top: 50px">
    
        <div class="card">
            <div class="card-header bg-dark     text-white">
                <div class="form-group row">
                    <div class="col-7">
                    <i class="fa fa-graduation-cap"></i><span class="h4"> Materia </span>
                    </div>
                    
                    <div class="col-5 text-right">
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal1">Nuevo materia</button>
                    </div>

                </div>
            </div>
            
           <div class="card-body">
                <table class="table table-hover"id="dtcli2"> 
                    <thead class="thead-dark grey">
                        <tr class="row">
                        <th class="col">CODIGO </th>
                        <th class="col">CODIGO CURSO</th>
                        <th class="col">NOMBRE</th>
                        <th class="col">CODIGO PERSONAL</th>
                        <th class="col">GRADO</th>
                        <th class="col">TIPO</th>
                        <th class="col">ORDEN</th>
                        <th class="col">RESALTAR</th>
                        <th class="col">OBPMRA</th>
                        <th class="col">COCOMA</th>
                        <th class="col">NUMACO</th>
                        <th class="col">OCULTAR</th>
                        <th class="col">AREA ID</th>
                        <th class="col">AREA ACADEMICA</th>
                        <th class="col">AMBITO</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                        <!---Ciclo While para agregar datos de la clase_sql en una Variable $f --> 
                        <?php while($f = $consulta_materia->fetch_assoc()){ ?>
                    <tr class="row">
                         <td class="col"> <?php echo $f['MAT_CODIGO']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_CODCUR']; ?> </td>
                         <td class="col text-upercase"> <?php echo $f['MAT_NOMBRE']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_CODPER']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_GRADO']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_TIPO']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_ORDEN']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_RESALT']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_OBPRMA']; ?> </td>
                         <td class="col text-upercase"> <?php echo $f['MAT_COCOMA']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_NUMACO']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_OCULTA']; ?> </td>
                         <td class="col"> <?php echo $f['MAT_AREID']; ?> </td>
                         <td class="col text-upercase"> <?php echo $f['MAT_AREAC']; ?> </td>
                        <td class="col"> <?php echo $f['MAT_AMBITO']; ?> </td>
                        
                        <td class="col">
                          <a href="funciones/editar_materias.php?MAT_CODIGO=<?php echo $f['MAT_CODIGO']?>" class="btn btn-success">
                               <i class="fas fa-marker"></i>
                            </a>
                            <a href="funciones/eliminar_materias.php?MAT_CODIGO=<?php echo $f['MAT_CODIGO']?>" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                       
                    </tr>
                        <?php }?>
                </tbody>

                </table>
           </div>
        </div>


    </div>

    <!--Ventana modal-->
    <div class="modal fade" id="modal1">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <i class="fa fa-graduation-cap"></i><span class="h4">   MATERIAS </span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="funciones/insertar_materias.php" method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                       <div class="form-group row">
                                <label for="codigo" class="col-md-3 col-form-label">Codigo Materia</label>
                                <div class="col-sm-9">
                                    <input type="text" name="codigo" id="codigo" class="form-control" required>
                                    <div class="invalid-feedback">Codigo </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="codigo_curso" class="col-md-3 col-form-label">Codigo Curso</label>
                                <div class="col-sm-9">
                                    <input type="text" name="codigo_curso" id="codigo_curso" class="form-control" required>
                                    <div class="invalid-feedback">Codigo Curso</div>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="nombre" class="col-md-3 col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                                    <div class="invalid-feedback">Ingrese un Nombre</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="codigo_personal" class="col-md-3 col-form-label">Codigo Personal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="codigo_personal" id="codigo_personal" class="form-control" required>
                                    <div class="invalid-feedback">Codigo Personal</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="grado" class="col-md-3 col-form-label">Grado</label>
                                <div class="col-sm-9">
                                    <input type="text" name="grado" id="grado" class="form-control" >
                                    <div class="invalid-feedback">Ingrese Grado</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Tipo" class="col-md-3 col-form-label">Tipo</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tipo" id="tipo" class="form-control" required>
                                    <div class="invalid-feedback">Tipo</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="orden" class="col-md-3 col-form-label">orden</label>
                                <div class="col-sm-9">
                                    <input type="text" name="orden" id="orden" class="form-control" required>
                                    <div class="invalid-feedback">Orden</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="resaltar" class="col-md-3 col-form-label">Resaltar</label>
                                <div class="col-sm-9">
                                    <input type="text" name="resaltar" id="resaltar" class="form-control">
                                    <div class="invalid-feedback">Resaltar</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="obpmra" class="col-md-3 col-form-label">Obpmra</label>
                                <div class="col-sm-9">
                                    <input type="text" name="obpmra" id="obpmra" class="form-control" >
                                    <div class="invalid-feedback">Ingrese un Obpmra</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cocoma" class="col-md-3 col-form-label">cocoma</label>
                                <div class="col-sm-9">
                                    <input type="text" name="cocoma" id="cocoma" class="form-control" required>
                                    <div class="invalid-feedback">cocoma</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="numaco" class="col-md-3 col-form-label">Numaco</label>
                                <div class="col-sm-9">
                                    <input type="text" name="numaco" id="numaco" class="form-control" required>
                                    <div class="invalid-feedback">Ingrese Numaco</div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="ocultar" class="col-md-3 col-form-label">ocultar</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ocultar" id="ocultar" class="form-control">
                                    <div class="invalid-feedback">Ocultar</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="area_id" class="col-md-3 col-form-label">Area Ide</label>
                                <div class="col-sm-9">
                                    <input type="text" name="area_id" id="area_id" class="form-control" required>
                                    <div class="invalid-feedback">Area Id </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="area_academica" class="col-md-3 col-form-label">Area Academica</label>
                                <div class="col-sm-9">
                                    <input type="text" name="area_academica" id="area_academica" class="form-control" required>
                                    <div class="invalid-feedback">Area Academica</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ambito" class="col-md-3 col-form-label">Ambito</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ambito" id="ambito" class="form-control" required>
                                    <div class="invalid-feedback">Ingrese un ambito</div>
                                </div>
                            </div> 
                        </div> 
                    
                 
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-dark col-12">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <?php include("includes/footer.php") ?>

<script>
    $(document).ready(function(){
        $('#dtcli2').DataTable();
    });

</script>