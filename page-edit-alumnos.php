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

    <?php 

    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    $consulta = new Clase_sql();

    $id = $_GET['alum_codigo'];

    $consulta_alumnos = $consulta-> ConsultaAlumnoID($id);
    $consulta_paralelo = $consulta-> ConsultaParaleloGeneral();

    while($display = $consulta_alumnos->fetch_assoc()){ ?>

        <form action="funciones/edit_alumnos.php" method="POST">

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
                    <input type="text" name="" id="input" value="<?php echo $display['alum_codigo']; ?>">
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
                                <input type="date" value="<?php echo $display['alum_fech_matr']; ?>" id="input" name="input_fec_mat">
                            </div>

                            <div>
                                <label for="">Folio: </label>
                                <input type="text" name="input_folio" id="input" value="<?php echo $display['alum_folio']; ?>">
                            </div>

                            <select name="input_tipo" id="input">
                            <option value="<?php echo $display['alum_tipo_matr']; ?>"><?php echo $display['alum_tipo_matr']; ?></option>
                                <option value="Normal">Normal</option>
                                <option value="Condicional">Condicional</option>
                            </select>

                            <div>
                                <label for="">Año: </label>
                                <select name="aaa" id="input">
                                <option value="<?php echo $display['alum_ao']; ?>"><?php echo $display['alum_ao']; ?></option>
                                    <option value="Primero">Primero</option>
                                    <option value="Segundo">Segundo</option>
                                    <option value="Tercero">Tercero</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Educación: </label>
                                <select name="education" id="input">
                                <option value="<?php echo $display['alum_educacion']; ?>"><?php echo $display['alum_educacion']; ?></option>
                                    <option value="Basica">Basica</option>
                                    <option value="Bachillerato">Bachillerato</option>
                                    <option value="Elemental">Elemental</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Sección: </label>
                                <select name="seccion" id="input">
                                <option value="<?php echo $display['alum_seccion']; ?>"><?php echo $display['alum_seccion']; ?></option>
                                    <option value="Matutina">Matutina</option>
                                    <option value="Vespertina">Vespertina</option>
                                    <option value="Nocturna">Nocturna</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Especialidad: </label>
                                <select name="especialidad" id="input">
                                <option value="<?php echo $display['alum_especialidad']; ?>"><?php echo $display['alum_especialidad']; ?></option>
                                    <option value="Ninguno">-- Ninguno --</option>
                                    <option value="Informatica">Informatica</option>
                                    <option value="Contabilidad">Contabilidad</option>
                                    <option value="General">General</option>
                                </select>
                            </div>

                            <div>
                                <label for="">Paralelo: </label>
                                <select name="paralelo" id="input">
                                <option value="<?php echo $disp['alum_paralelo']; ?>"><?php echo $display['alum_paralelo']; ?></option>
                                <?php while($disp = $consulta_paralelo->fetch_assoc()){?>
                                    <option value="<?php echo $disp['PAR_CODIGO'] ?>">
                                    <?php echo $disp['PAR_NOMBRE'] ?>
                                    </option>
                                <?php } ?>
                                </select>
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
                                <input type="text" name="input_apellido" id="input" value="<?php echo $display['alum_apellido']; ?>">
                            </div>

                            <div>
                                <label for="">Nombre: </label>
                                <input type="text" id="input" name="input_nombre" value="<?php echo $display['alum_nombre']; ?>">
                            </div>
                            
                            <div>
                                <label for="">Cedula: </label>
                                <input type="text" id="input" name="input_cedula" value="<?php echo $display['alum_cedula']; ?>">
                            </div>

                            <div>
                                <label for="">Lugar de naciemiento: </label>
                                <input type="text" id="input" name="input_lug_nac" value="<?php echo $display['alum_lug_nac']; ?>">
                            </div>

                            <div>
                                <label for="">Fecha de naciemiento: </label>
                                <input type="date" id="input" name="fech_nacimiento" value="<?php echo $display['alum_fech_nac']; ?>">
                            </div>

                            <div>
                                <label for="">Nacionalidad: </label>
                                <input type="text" id="input" name="input_nacionalidad" value="<?php echo $display['alum_nacionalidad']; ?>">
                            </div>

                            <div>
                                <label for="">Domicilio: </label>
                                <input type="text" id="input" name="domicilio" value="<?php echo $display['alum_domicilio']; ?>">
                            </div>

                            <div>
                                <label for="">Telefono: </label>
                                <input type="text" id="input" name="input_telefono" value="<?php echo $display['alum_telefono']; ?>">
                            </div>
                        </div>

                        <div>
                            <div>
                                <h2>Estado civil</h2>

                                <select name="civil" id="">
                                    <option value="<?php echo $display['alum_civil']; ?>"><?php echo $display['alum_civil']; ?></option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Divorciado">Divorciado</option>
                                    <option value="Union libre">Union libre</option>
                                    <option value="Viudo">Viudo</option>
                                </select>

                            </div>
                        
                            <div>
                                <h2>Sexo</h2>

                                <select name="sex" id="">
                                <option value="<?php echo $display['alum_sexo']; ?>"><?php echo $display['alum_sexo']; ?></option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                    
                            </div>
                                <br>
                            <div>
                                <label for="">¿Nuevo?</label>
                                <select name="new" id="">
                                <option value="<?php echo $display['alum_nuevo']; ?>"><?php echo $display['alum_nuevo']; ?></option>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
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
                                <input type="text" value="" id="input" name="padre_nombre" value="<?php echo $display['alum_padre_nombre']; ?>">
                            </div>

                            <div>
                                <label for="">Nacionalidad: </label>
                                <input type="text" value="" id="input" name="padre_nacionalidad" value="<?php echo $display['alum_padre_nacionalidad']; ?>">
                            </div>
                            
                            <div>
                                <label for="">Direccion: </label>
                                <input type="text" id="input" name="padre_direccion" value="<?php echo $display['alum_padre_direccion']; ?>">
                            </div>

                            <div>
                                <label for="">Profesion: </label>
                                <input type="text" id="input" name="padre_profesion" value="<?php echo $display['alum_padre_profesion']; ?>">
                            </div>

                            <div>
                                <label for="">Cedula: </label>
                                <input type="text" id="input" name="padre_cedula" value="<?php echo $display['alum_padre_cedula']; ?>">
                            </div>

                            <div>
                                <label for="">Telefono: </label>
                                <input type="text" id="input" name="padre_telefono" value="<?php echo $display['alum_padre_telefono']; ?>">
                            </div>

                            <div>
                                <label for="">Trabajo: </label>
                                <input type="text" id="input" name="padre_trabajo" value="<?php echo $display['']; ?>">
                            </div>

                            <div>
                                <label for="">Lugar de trabajo: </label>
                                <input type="text" id="input" name="padre_lug_tra" value="<?php echo $display['alum_padre_lug_trab']; ?>">
                            </div>
                        </div>

                        <div>
                            <h2>Datos de la madre</h2>
                            <div>
                                <label for="">Nombre: </label>
                                <input type="text" value="" id="input" name="madre_nombre" value="<?php echo $display['alum_madre_nombre']; ?>">
                            </div>

                            <div>
                                <label for="">Nacionalidad: </label>
                                <input type="text" value="" id="input" name="madre_nacionalidad" value="<?php echo $display['alum_madre_nacionalidaad']; ?>">
                            </div>
                            
                            <div>
                                <label for="">Direccion: </label>
                                <input type="text" id="input" name="madre_direccion" value="<?php echo $display['alum_madre_direccion']; ?>">
                            </div>

                            <div>
                                <label for="">Profesion: </label>
                                <input type="text" id="input"  name="madre_profesion" value="<?php echo $display['alum_madre_profesion']; ?>">
                            </div>

                            <div>
                                <label for="">Cedula: </label>
                                <input type="text" id="input"  name="madre_cedula" value="<?php echo $display['alum_madre_cedula']; ?>">
                            </div>

                            <div>
                                <label for="">Telefono: </label>
                                <input type="text" id="input"  name="madre_telefono" value="<?php echo $display['alum_madre_telefono']; ?>">
                            </div>

                            <div>
                                <label for="">Trabajo: </label>
                                <input type="text" id="input"  name="madre_trabajo" value="<?php echo $display['alum_madre_trabajo']; ?>">
                            </div>

                            <div>
                                <label for="">Lugar de trabajo: </label>
                                <input type="text" id="input"  name="madre_lug_tra" value="<?php echo $display['alum_madre_lug_trab']; ?>">
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
                        <input type="text" id="input"  name="cliente_nombre" value="<?php echo $display['alum_cliente_nombre']; ?>">
                    </div>

                    <h2>Representante</h2>
                    <div>
                        <label for="">Nombre: </label>
                        <input type="text" id="input" name="repre_nombre" value="<?php echo $display['alum_repre_nombre']; ?>">
                    </div>

                    <div>
                        <label for="">Parentesco: </label>
                        <input type="text" id="input" name="parentesco" value="<?php echo $display['alum_repre_parentesco']; ?>">
                    </div>

                    <h2>Plantel de donde procede</h2>
                    <div>
                        <label for="">Nombre: </label>
                        <input type="text" id="input" name="input_colAnt" value="<?php echo $display['alum_colant_nombre']; ?>">
                    </div>

                    <div>
                        <label for="">Ciudad/Dirección: </label>
                        <input type="text" id="input" name="input_direccion" value="<?php echo $display['alum_colant_direccion']; ?>">
                    </div>

                    <div>
                        <label for="">Año anterior: </label>
                        <input type="text" id="input" name="i_aaa" value="<?php echo $display['']; ?>">
                    </div>

                    <div>
                        <label for="">Tipo: </label>
                        <input type="text" id="input" name="i_tipo" value="<?php echo $display['alum_colant_tipo']; ?>">
                    </div>

                    <div>
                        <label for="">Año: </label>
                        <input type="text" id="input" name="ii_aa" value="<?php echo $display['']; ?>">
                    </div>

                    <div>
                        <label for="">¿Repite el año?: </label>
                        <input type="text" id="input" name="repite" value="<?php echo $display['alum_rep_ao']; ?>">
                    </div>

                    <h2>Condicionantes</h2>

                    <select name="condicionantes" id="input">
                    <option value="<?php echo $display['alum_condicionantes']; ?>"><?php echo $display['alum_condicionantes']; ?></option>
                        <option value="Aprovechamiento">Aprovechamiento</option>
                        <option value="Disciplina">Disciplina</option>
                        <option value="Pension">Pension</option>
                        <option value="Becado">Becado</option>
                    </select>

                        <h2>Observacion</h2>

                        <div>
                            <textarea name="observacion" id="" cols="70" rows="3" value="<?php echo $display['alum_observacion']; ?>"></textarea>
                        </div>
                </div>
            </div>

            <input type="submit" value="Guardar">

        </form>
    <?php } ?>    
    </div>
</body>
</html>