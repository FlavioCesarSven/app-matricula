<?php 

require_once '../config/connMySQL.php';
require_once '../entity/cPeriodo.php';

class cPeriodoM {

    function Listar(){
        $oConn = new connMySQL();
        $sql  = "select * from tb_periodo";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

    function Insertar( cPeriodoE $oEnt ){
        try
        {
            error_reporting(E_ALL & ~E_NOTICE);
            
            $oConn = new connMysql(); 
            $mysqli = $oConn->getConnection(); 
            $strSQL = "insert into tb_periodo values(?,?,?)"; 
            $stmt = $mysqli->prepare($strSQL);
            $stmt->bind_param('iss', 
                    $oEnt->getIdperiodo(),
                    $oEnt->getNomb_per(),
                    $oEnt->getEstd_per(),
                );

            $stmt->execute();
         
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