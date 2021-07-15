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
<!----
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

--->
        <div id="bloque">
            

            <div id="tarjeta">
            <div id="subtarjeta">
                <h1>Identificacion</h1>
                <div id=subtarjeta1>
                <div>
                
                </div>
                
                </div>
                
            </div>
                <img src="https://scontent.fuio14-1.fna.fbcdn.net/v/t1.18169-9/10924825_1571291193085412_3652568559445422628_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=174925&_nc_eui2=AeGrHcAqU6Q5Kw70UEAb8q2IWJgq6EbIyNNYmCroRsjI0_OCccEAFoflIF6cXtFN7ukY_8cF1mztmPoHwJ6LUYoY&_nc_ohc=FPicfjSBCGEAX-keZ6P&_nc_oc=AQnlcykaoZAdJ71t_DiCd5Vf5w5YYD9a7mttgFXIoGs1cWC9l-9qLT9sAh0fRygeFuI&_nc_ht=scontent.fuio14-1.fna&oh=918208b52fb8720549b8d46e168562ca&oe=60F5C0BD" alt="foto de perfil">
                <br>
                <label for="">Numero de matricula: </label>
                <input type="text" name="input_codigo" id="input">
            </div>
        </div>
        
        <div id="bloque">
            <div id="tarjeta">
            <div id="subtarjeta">
                <h1>Datos adicionales</h1>
            </div>

            <h2>Datos adicionales</h2>
                        <div>
                            <label for="">Fecha de matricula: </label>
                            <input type="date" value="" id="input">
                        </div>

                        <div>
                            <label for="">Folio: </label>
                            <input type="text" name="input_folio" id="input">
                        </div>
                        
                        <input type="radio" name="" id="" value="Soltero">
                        <label for="Soltero">Normal</label><br>

                        <input type="radio" name="" id="" value="Casado">
                        <label for="Casado">Condicional</label><br>

                        <div>
                            <label for="">Año: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Educación: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Sección: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Especialidad: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Paralelo: </label>
                            <input type="text" id="input">
                        </div>
            </div>

            <div id="tarjeta">
                <div id="subtarjeta">
                    <h1>Datos personales</h1>
                </div>

                <div id="subtarjeta1">
                    <div>
                    <h2>Informativo</h2>
                        <div>
                            <label for="">Apellidos: </label>
                            <input type="text" name="input_apellido" id="input">
                        </div>

                        <div>
                            <label for="">Nombre: </label>
                            <input type="text" id="input" name="input_nombre">
                        </div>
                        
                        <div>
                            <label for="">Cedula: </label>
                            <input type="text" id="input" name="input_cedula">
                        </div>

                        <div>
                            <label for="">Lugar de naciemiento: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Fecha de naciemiento: </label>
                            <input type="date" id="input">
                        </div>

                        <div>
                            <label for="">Nacionalidad: </label>
                            <input type="text" id="input" name="input_nacionalidad">
                        </div>

                        <div>
                            <label for="">Domicilio: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Telefono: </label>
                            <input type="text" id="input" name="input_telefono">
                        </div>
                    </div>

                    <div>
                        <div>
                            <h2>Estado civil</h2>

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
                            <h2>Sexo</h2>

                            <input type="radio" name="" id="" value="Masculino">
                            <label for="Masculino">Masculino</label><br>

                            <input type="radio" name="" id="" value="Femenino">
                            <label for="Femenino">Femenino</label><br>
                        </div>
                            <br>
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

                <div id="subtarjet">
                    <div>
                        <h2>Datos del padre</h2>
                        <div>
                            <label for="">Nombre: </label>
                            <input type="text" value="" id="input">
                        </div>

                        <div>
                            <label for="">Nacionalidad: </label>
                            <input type="text" value="" id="input">
                        </div>
                        
                        <div>
                            <label for="">Direccion: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Profesion: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Cedula: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Telefono: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Trabajo: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Lugar de trabajo: </label>
                            <input type="text" id="input">
                        </div>
                    </div>

                    <div>
                        <h2>Datos de la madre</h2>
                        <div>
                            <label for="">Nombre: </label>
                            <input type="text" value="" id="input">
                        </div>

                        <div>
                            <label for="">Nacionalidad: </label>
                            <input type="text" value="" id="input">
                        </div>
                        
                        <div>
                            <label for="">Direccion: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Profesion: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Cedula: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Telefono: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Trabajo: </label>
                            <input type="text" id="input">
                        </div>

                        <div>
                            <label for="">Lugar de trabajo: </label>
                            <input type="text" id="input">
                        </div>
                    </div>
                </div>
            </div>

            <div id="tarjeta">
                <div id="subtarjeta">
                <h1>Detalles</h1>
            </div>
                <h2>Cliente</h2>
                <div>
                    <label for="">Nombre: </label>
                    <input type="text" id="input">
                </div>

                <h2>Representante</h2>
                <div>
                    <label for="">Nombre: </label>
                    <input type="text" id="input">
                </div>

                <div>
                    <label for="">Parentesco: </label>
                    <input type="text" id="input">
                </div>

                <h2>Plantel de donde procede</h2>
                <div>
                    <label for="">Nombre: </label>
                    <input type="text" id="input" name="input_colAnt">
                </div>

                <div>
                    <label for="">Ciudad/Dirección: </label>
                    <input type="text" id="input">
                </div>

                <div>
                    <label for="">Año anterior: </label>
                    <input type="text" id="input">
                </div>

                <div>
                    <label for="">Tipo: </label>
                    <input type="text" id="input">
                </div>

                <div>
                    <label for="">Año: </label>
                    <input type="text" id="input">
                </div>

                <div>
                    <label for="">¿Repite el año?: </label>
                    <input type="text" id="input">
                </div>

                <h2>Condicionantes</h2>

                    <div>
                        <input type="checkbox" name="" id="" value="si">
                        <label for="">Aprovechamiento</label>
                    </div>

                    <div>
                        <input type="checkbox" name="" id="" value="si">
                        <label for="">Disciplina</label>
                    </div>

                    <div>
                        <input type="checkbox" name="" id="" value="si">
                        <label for="">Pension</label>
                    </div>

                    <div>
                        <input type="checkbox" name="" id="" value="si">
                        <label for="">Becado</label>
                    </div>

                    <h2>Observacion</h2>

                    <div>
                        <textarea name="" id="" cols="70" rows="3"></textarea>
                    </div>
            </div>
        </div>

        <input type="submit" value="Guardar">

    </form>    
    </div>
</body>
</html>