<?php

require_once '../model/cUsuarioM.php';

class cUsuarioC
{
    function validateAccessUser( $logi, $pass )
    {
        $oMod = new cUsuarioM(  );
        return $oMod->validarAcceso($logi, $pass);
    }


}

if (isset($_REQUEST["inputAccion"])) {
    $oCont = new cUsuarioC();
    $accion = $_REQUEST["inputAccion"];
    switch ($accion) {

        case "ValidarInicioSesion":

            if ( isset($_REQUEST["InputLogin"]) && isset($_REQUEST["InputPassword"]) ) {

                $login = $_REQUEST["InputLogin"];
                $password = $_REQUEST["InputPassword"];

                $result = $oCont -> validateAccessUser($login, $password);
                $row = $result->fetch_object();

                if (isset($row)) {
                    $_SESSION["usuario"]=$row->usuario; 
                }

                //codificar en formato json
                echo json_encode($row);
               
            }
            break;
        
    }
}


