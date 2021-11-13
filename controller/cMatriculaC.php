<?php 

require_once '../model/cMatriculaM.php';

class cMatriculaC
{
    function listar(){
        $oMod = new cMatriculaM();
        return $oMod->Listar();
    }

    
    function SelecByDni($dni) {
        //crear un objeto a partir del modelo
        $oMod = new cMatriculaM();
        //Trasladar los datos al Modelo y se recepciona Mensaje
        $row = $oMod->SeleccionarxDNI( $dni );
        //retornar Mensaje
        return $row;
    }
}


//Realizar Accion (Insert, Update, Delete, Select) segÃºn datos llegados desde el Formulario
if (isset($_REQUEST["InputAccion"])) {
    //Crear un Objeto a partir de esta clase
    $oCont = new cMatriculaC();
    //recuperar el valor de InputAccion
    $accion = $_REQUEST["InputAccion"];
    //Determinar que acciÃ³n se va a realizar
    switch ($accion) {

        case "SelectByDni":
            $rpta = $oCont->SelecByDni($_REQUEST["InputDNI"]);
            echo json_encode($rpta);
            break;
        
    }
}