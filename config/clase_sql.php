<?php
    class Clase_sql{
        # ATRIBUTOS |  privados
        private $bd;
        # CONSTRUCTOR - permite dar un valor inicial a los atributos
        public function __construct(){
            $this->bd = new mysqli(SERVIDOR,USUARIO,CLAVE,BDD);
            # Definir caracteres
            $this->bd -> set_charset('utf8');
        }

        # FUNCIONES
        # Funcion para consultar Paralelos
        public function ConsultaParaleloGeneral(){
            # Consultas Sql
            # query "es la consulta" ("consulta sql")
            $resultado = $this->bd->query("SELECT * FROM snp_para");
            return $resultado;
        }
        # Funcion para Insertar paralelo
        public function InsertarParalelo($cod, $nom){
            $resultado = $this->bd->query("INSERT INTO  snp_para (PAR_CODIGO, PAR_NOMBRE) VALUES ('$cod', '$nom')");
            return true;
            }
        # Funcion para eliminar Paralelos
        public function EliminarParalelo($cod){
            $resultado = $this->bd->query("DELETE FROM snp_para WHERE PAR_CODIGO = $cod");
            return $resultado;
        }
        
        # Funcion para Visualizar Paralelos Unico
        public function ConsultaParaleloUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM snp_para WHERE PAR_CODIGO = $cod");
            return $resultado;

        }
        # Funcion para Actualizar Paralelos
        public function ActualizarParalelo($cod, $codi, $name){
            $resultado = $this->bd->query("UPDATE snp_para set PAR_CODIGO='$codi', PAR_NOMBRE='$name' WHERE PAR_CODIGO =$cod");
            return true;
        }

        # Funcion para Concultar Alumnos 
        public function ConsultaAlumnos(){
            $resultado = $this->bd->query("SELECT * FROM snp_alum");
            return $resultado;
        }

        # Funcion para consultar materia
         public function ConsultaMateriaGeneral(){
             $resultado = $this->bd->query("SELECT * FROM snp_mate");
             return $resultado;
         }
        #Funcion para insertar materia
         public function InsertarMateria($codm,$codcurm,$nombm,$codperm,$gram,$tipm,$ordenm,$resaltm,$obprmam,$cocomam,$numacom,$oculm,$areidm,$areacm,$ambm){
             $resultado = $this->bd->query("INSERT INTO snp_mate(MAT_CODIGO, MAT_CODCUR, MAT_NOMBRE, MAT_CODPER, MAT_GRADO, MAT_TIPO, MAT_ORDEN, MAT_RESALT, MAT_OBPRMA, MAT_COCOMA, MAT_NUMACO, MAT_OCULTA, MAT_AREID, MAT_AREAC, MAT_AMBITO) VALUES('$codm','$codcurm','$nombm','$codperm','$gram','$tipm','$ordenm','$resaltm','$obprmam','$cocomam','$numacom','$oculm','$areidm','$areacm','$ambm')");
             return true;
         }
        #Funcion para Eliminar materia
        public function EliminarMateria($cod){
            $resultado = $this->bd->query("DELETE FROM snp_mate WHERE MAT_CODIGO = $cod");
            return $resultado;
        }
        #Funcion para consultar Materia unico
        public fuction ConsultaMateriaUnico($cod){
            $resultado = $this->bd->query("SELECT * FROM snp_mate  WHERE MAT_CODIGO = $cod");
            return $resultado;
        }
        #Funcion para Editar Materia
        public fuction ActualizarMateria($cod,$codm,$codcurm,$nombm,$codperm,$gram,$tipm,$ordenm,$resaltm,$obprmam,$cocomam,$numacom,$oculm,$areidm,$areacm,$ambm){
            $resultado = $this->bd->query("UPDATE snp_mate set MAT_CODIGO='$codm', MAT_CODCUR='$codcurm', MAT_NOMBRE='$nombm', MAT_CODPER='$codperm', MAT_GRADO='$gram', MAT_TIPO='$tipm', MAT_TIPO='$tipm', MAT_ORDEN='$ordem', MAT_RESALT='$resaltm', MAT_OBPRMA='$obprmam', MAT_COCOMA='$cocomam', MAT_NUMACO='$numacom', MAT_OCULTA='$oculm', MAT_AREID='$areidm', MAT_AREAC='$areacm',MAT_AMBITO='$ambm' WHERE MAT_CODIGO=$cod");
            return true;
    }
?>