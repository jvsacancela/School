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
                <a href="" id="btnAdd">Nuevo <i class="fas fa-user-plus"></i></a>
            </div>
        </div>
           
        
        <table>
            <thead>
                <th></th>
                <th>Código</th>
                <th>Matricula</th>
                <th>Folio</th>
                <th>Cédula</th>
                <th>Número</th>
                <th>Apellidos</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Telefono</th>
                <th>Colegio anterior</th>
            </thead>
            <tbody>
                <?php while($display = $consulta_alumnos->fetch_assoc()){ ?>
                <tr>
                    <td>
                        <a href=""><i class="fas fa-info" id="btnInfo"></i></a>
                        <a href=""><i class="fas fa-edit" id="btnEdit"></i></a>
                        <a href=""><i class="fas fa-trash" id="btnDelete"></i></a>
                    </td>
                    <td><?php echo $display['ALU_NMATRI'] ?></td>
                    <td><?php echo $display['ALU_MATRIC'] ?></td>
                    <td><?php echo $display['ALU_NFOLIO'] ?></td>
                    <td><?php echo $display['ALU_CEDULA'] ?></td>
                    <td><?php echo $display['ALU_NLISTA'] ?></td>
                    <td><?php echo $display['ALU_APELLI'] ?></td>
                    <td><?php echo $display['ALU_NOMBRE'] ?></td>
                    <td><?php echo $display['ALU_NACION'] ?></td>
                    <td><?php echo $display['ALU_TELEDO'] ?></td>
                    <td><?php echo $display['ALU_COLEVI'] ?></td>
                </tr>
                    
                <?php } ?>
                
            </tbody>

            
        </table>
    </div>
</body>
</html>