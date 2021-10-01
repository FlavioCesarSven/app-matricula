<?php 

require_once '../config/connMySQL.php';
require_once '../entity/cOperadorE.php';

class cOperadorM {

    function Listar(){
        $oConn = new connMySQL();
        $sql  = "select * from tb_operador";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

    function Insertar( cOperadorE $oEnt ){
        try
        {
            
            error_reporting(E_ALL & ~E_NOTICE);
            
            $oConn = new connMysql(); 
            $mysqli = $oConn->getConnection(); 
            $strSQL = "insert into tb_operador values(?,?,?)"; 
            $stmt = $mysqli->prepare($strSQL);
            $stmt->bind_param('iss', 
                    $oEnt->getIdoperador(),
                    $oEnt->getNomb_ope(),
                    $oEnt->getEstd_ope(),
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
    function Eliminar(){

    }
}