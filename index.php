<?php
 
    require_once 'config.php';
    require_once 'clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_par = new Clase_sql();

    $result_par = $clase_par-> ConsultaParaleloGeneral();
?>


<html>

<head>
    <title>Paralelos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>

<body>

    <div class="container" style="margin-top: 150px">
    
        <div class="card">
            <div class="card-header bg-dark     text-white">
                <div class="form-group row">
                    <div class="col-7">
                    <i class="fa fa-graduation-cap"></i><span class="h4"> Paralelos</span>
                    </div>
                    
                    <div class="col-2 text-right">
                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal1">Nuevo paralelo</button>
                    </div>

                </div>
            </div>
            
           <div class="card-body">
                <table class="table table-hover"id="dtcli2"> 
                    <thead class="thead-dark grey">
                        <tr class="row">
                        <th class="col">CODIGO</th>
                        <th class="col">NOMBRE</th>
                        <th class="col">OPCIONES</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                        <!---Ciclo While para agregar datos de la clase_sql en una Variable $f --> 
                        <?php while($f = $result_par->fetch_assoc()){ ?>
                    <tr class="row">
                        <td class="col"> <?php echo $f['PAR_CODIGO']; ?> </td>
                        <td class="col text-upercase"> <?php echo $f['PAR_NOMBRE']; ?> </td>
                        <td>
                            <a href="editar.php?PAR_CODIGO=<?php echo $f['PAR_CODIGO']?>" class="btn btn-success">
                               <i class="fas fa-marker"></i>
                            </a>
                            <a href="eliminar.php?PAR_CODIGO=<?php echo $f['PAR_CODIGO']?>" class="btn btn-danger">
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
                    <i class="fa fa-graduation-cap"></i><span class="h4">   Paralelos</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="insertar_par.php" method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                            <div class="form-group row">
                                <label for="codigo" class="col-md-3 col-form-label">Codigo</label>
                                <div class="col-sm-9">
                                    <input type="text" name="codigo" id="codigo" class="form-control" required>
                                    <div class="invalid-feedback">Ingrese un codigo</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre" class="col-md-3 col-form-label">Nombre</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                                    <div class="invalid-feedback">Ingrese un Nombre</div>
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

</body>

<footer class="page-footer blue mt-4 pt-2 border">
<div class="footer-copyright text-center">

© 2021 - Derechos reservados
        <a href="">Louis Delgado</a>
</footer>

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"> </script>
<script src="js/validarDatos.js"></script>

</html>

<script>
    $(document).ready(function(){
        $('#dtcli2').DataTable();
    });

</script>