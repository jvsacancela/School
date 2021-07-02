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
        
        # Funcion para Actualizar Paralelos
       
    }
?>