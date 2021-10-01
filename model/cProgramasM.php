<?php 

require_once '../config/connMySQL.php';
require_once '../entity/cProgramaE.php';

class cProgramasM {

    function Listar(){
        $oConn = new connMySQL();
        $sql  = "select * from tb_programa";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

    function Insertar( cProgramaE $oEnt ){
            try // manejo de errores 
            {
                //omitir mensajes
                error_reporting(E_ALL & ~E_NOTICE);
                //crear un objeto a partir de la conexion
                $oConn = new connMysql();
                //Creamos una variable para leer la ConexiÃ³n
                $mysqli = $oConn->getConnection();
                //sentencia SQL para insertar
                $strSQL = "insert into tb_programa values(?,?,?,?)";
                //Preparar la Sentencia para su ejecuciÃ³n
                $stmt = $mysqli->prepare($strSQL);
                //Establecer o asignar los valores para los parametros a partir de la Entidad
                $stmt->bind_param('isss', 
                        $oEnt->getIdprograma(),
                        $oEnt->getNomb_pro(),
                        $oEnt->getDesc_pro(),
                        $oEnt->getEstd_pro(),
                    );
                //ejecuta la sentencia
                $stmt->execute();
                //********************************************
                //cerrar conexiÃ³n
                $mysqli->close();
                //retornar
                return "OK";
            } catch (Exception $ex) {
                return 'Error: ' . $ex->getMessage();
            }
    
    }
    function Actualizar(){

    }
    function Eliminar( $idprog ){
        try // manejo de errores 
        {
            error_reporting(E_ALL & ~E_NOTICE);
            $oConn = new connMysql();
            //Creamos una variable para leer la ConexiÃ³n
            $mysqli = $oConn->getConnection();
            //sentencia SQL para insertar
            $strSQL = "delete from tb_programa where idprograma=?";
            //Preparar la Sentencia para su ejecuciÃ³n
            $stmt = $mysqli->prepare($strSQL);
            //Establecer o asignar los valores para los parametros a partir de la Entidad
            $stmt->bind_param('i', $idprog );
            //ejecuta la sentencia
            $stmt->execute();
            //********************************************
            //cerrar conexiÃ³n
            $mysqli->close();
            //retornar
            return "OK";
        } catch (Exception $ex) {
            return 'Error: ' . $ex->getMessage();
        }
    }

}