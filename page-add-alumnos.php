<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del alumno</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/datos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
    <div id="contenido">

    <form action="funciones/insertar_alumnos.php" method="POST">

    <div>
    <input type="text" name="input_codigo" placeholder="codigo">
    <input type="text" name="input_matricula" placeholder="matricula">
    <input type="text" name="input_folio" placeholder="folio">
    <input type="text" name="input_cedula" placeholder="cedula">
    <input type="text" name="input_numero" placeholder="numero">
    <input type="text" name="input_apellido" placeholder="apellidos">
    <input type="text" name="input_nombre" placeholder="nombres">
    <input type="text" name="input_nacionalidad" placeholder="nacionalidad">
    <input type="text" name="input_telefono" placeholder="telefono">
    <input type="text" name="input_colAnt" placeholder="colegio anterior">
    </div>
        <div id="bloque">
            <div id="tarjeta">

            <div id="subtarjeta">
                <h1>Datos del alumno</h1>
            </div>    
                <h1>dedewdew</h1>
                <p>deadewwefrwf</p>
              
            </div>

            <div id="tarjeta">
            <div id="subtarjeta">
                <h1>Identificacion</h1>
                <div id=subtarjeta1>
                <div>
                
                </div>
                
                </div>
                
            </div>
                <img src="" alt="foto de perfil">
                <br>
                <label for="">Numero de matricula: </label>
                <input type="text" value="" id="input">
            </div>
        </div>
        
        <div id="bloque">
            <div id="tarjeta">
            <div id="subtarjeta">
                <h1>Datos adicionales</h1>
            </div>
            </div>

            <div id="tarjeta">
                <div id="subtarjeta">
                    <h1>Datos personales</h1>
                </div>

                <div id="subtarjeta1">
                    <div>
                        <div>
                            <label for="">Apellidos: </label>
                            <input type="text" value="" id="input">
                        </div>

                        <div>
                            <label for="">Nombre: </label>
                            <input type="text" value="" id="input">
                        </div>
                        
                        <div>
                            <label for="">Cedula: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Lugar de naciemiento: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Nacionalidad: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Domicilio: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Telefono: </label>
                            <input type="text" id="input">
                        </div>
                    </div>

                    <div>
                        <div>
                            <label for="">Estado civil: </label><br>

                            <input type="radio" name="" id="" value="Soltero">
                            <label for="Soltero">Soltero</label><br>

                            <input type="radio" name="" id="" value="Casado">
                            <label for="Casado">Casado</label><br>

                            <input type="radio" name="" id="" value="Divorciado">
                            <label for="Divorciado">Divorciado</label><br>

                            <input type="radio" name="" id="" value="Union-libre">
                            <label for="Union-libre">Union libre</label><br>

                            <input type="radio" name="" id="" value="Viudo">
                            <label for="Viudo">Viudo</label><br>
                        </div>
                    
                        <div>
                            <label for="">Sexo: </label><br>

                            <input type="radio" name="" id="" value="Masculino">
                            <label for="Masculino">Masculino</label><br>

                            <input type="radio" name="" id="" value="Femenino">
                            <label for="Femenino">Femenino</label><br>
                        </div>

                        <div>
                            <input type="checkbox" name="" id="" value="si">
                            <label for="">Nuevo</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div id="bloque">
            <div id="tarjeta">
            <div id="subtarjeta">
                <h1>Datos familiares</h1>
            </div>
            </div>

            <div id="tarjeta">
                <div id="subtarjeta">
                <h1>Cliente</h1>
            </div>
            </div>
        </div>

        
        <div id="bloque">
            <div id="tarjeta">
            <div id="subtarjeta">
                <h1>Datos del representante</h1>
            </div>
            </div>

            <div id="tarjeta">
            <div id="subtarjeta">
                <h1>Plantel donde procede</h1>
            </div>
            </div>
        </div>
       
        <div id="bloque">
            <div id="tarjeta">
                <h1>Condicionales</h1>
                <h1>Observación</h1>
            </div>
        </div>

        <input type="submit" value="Guardar">

    </form>    
    </div>
</body>
</html>