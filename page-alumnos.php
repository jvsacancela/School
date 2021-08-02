<?php 
    require_once "config/config.php";
    require_once "config/clase_sql.php";
     $consulta = new Clase_sql();
     $consulta_alumnos = $consulta-> ConsultaAlumnos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
    <div id="contenedor">
       <h1>Alumnos</h1>
       
        <div id="menu">
           
            <div id="contBuscar">
                <i id="iconSearch" class="fas fa-search"></i>
                <input type="text" id="inputBuscar" placeholder="Buscar">
            </div>
            <div id="acciones">
                <a href="page-add-alumnos.php" id="btnAdd">Nuevo <i class="fas fa-user-plus"></i></a>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div id="filtros">
            <div>
                <label for="">Año: </label>
                <input type="text" id="input">
            </div>

            <div>
                <label for="">Sección: </label>
                <input type="text" id="input">
            </div>

            <div>
                <label for="">Paralelo: </label>
                <input type="text" id="input">
            </div>

            <div>
                <label for="">Educación: </label>
                <input type="text" id="input">
            </div>

            <div>
                <label for="">Especialidad: </label>
                <input type="text" id="input">
            </div>
       </div>
        <br>
        <table>
            <thead>
                <th></th>
                <th>Matricula</th>
                <th>Folio</th>
                <th>Cédula</th>
                <th>Número</th>
                <th>Apellidos</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Sexo</th>
                <th>Representante</th>
            </thead>
            <tbody>
                <?php while($display = $consulta_alumnos->fetch_assoc()){ ?>
                <tr>
                    <td>
                       <!-- <a href=""><i class="fas fa-info" id="btnInfo"></i></a> -->
                        <a href="page-edit-alumnos.php?alum_codigo=<?php echo $display['alum_codigo']?>"><i class="fas fa-edit" id="btnEdit"></i></a>
                        <a href="funciones/eliminar_alumnos.php?alum_codigo=<?php echo $display['alum_codigo']?>"><i class="fas fa-trash" id="btnDelete"></i></a>
                    </td>
                    <td><?php echo $display['alum_codigo'] ?></td>
                    <td><?php echo $display['alum_folio'] ?></td>
                    <td><?php echo $display['alum_cedula'] ?></td>
                    <td><?php echo $display['alum_telefono'] ?></td>
                    <td><?php echo $display['alum_apellido'] ?></td>
                    <td><?php echo $display['alum_nombre'] ?></td>
                    <td><?php echo $display['alum_nacionalidad'] ?></td>
                    <td><?php echo $display['alum_sexo'] ?></td>
                    <td><?php echo $display['alum_repre_nombre'] ?></td>
                </tr>
                    
                <?php } ?>
                
            </tbody>

            
        </table>
    </div>
</body>
</html>