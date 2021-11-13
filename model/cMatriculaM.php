<?php 

require_once '../config/connMySQL.php';

class cMatriculaM {

    function Listar(){
        $oConn = new connMySQL();
        $sql  = "select * from  v_estudiante_matricula order by 1";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

    function SeleccionarxDNI($dni)
    {
        $oConn = new connMySQL();
        $sql  = "select * from v_estudiante_matricula where ndni_est = '$dni'";

        $result = $oConn->executeQuery($sql);

        $row = $result->fetch_assoc();
        return $row;
    }


}