<?php

require_once '../model/cOperadorM.php';

class cOperadorC
{
    function listar()
    {
        $oMod = new cOperadorM();
        return $oMod->Listar();
    }

    //funcion que permite leer los Datos del Formulario
    function getDataForm()
    {
        //crear un objeto a partir de la Entidad para asignarle 
        $oEnt = new cOperadorE();
        //asignar valores
        $oEnt->setIdoperador($_REQUEST["inputID"]);
        $oEnt->setNomb_ope(trim($_REQUEST["inputNombre"]));
        if (isset($_REQUEST["inputEstado"]))
            $oEnt->setEstd_ope("A");
        else
            $oEnt->setEstd_ope("I");
    
        return $oEnt;
    }

    function Insert(cOperadorE $oEnt) {
        //crear un objeto a partir del modelo
        $oMod = new cOperadorM();
        //Trasladar los datos al Modelo y se recepciona Mensaje
        $msg = $oMod->Insertar($oEnt);
        //retornar Mensaje
        return $msg;
    }

}

//Realizar Accion (Insert, Update, Delete, Select) segÃºn datos llegados desde el Formulario
if (isset($_REQUEST["inputAccion"])) {
    //Crear un Objeto a partir de esta clase
    $oCont = new cOperadorC();
    //recuperar el valor de InputAccion
    $accion = $_REQUEST["inputAccion"];
    //Determinar que acciÃ³n se va a realizar
    switch ($accion) {

        case "Insert":
            // print_r($_REQUEST);//VERIFICAR
            echo $oCont->Insert($oCont->getDataForm());
            break;
        case "Update":
            //print_r($_POST);
            // echo $oCont->Update($oCont->getDataForm());
            break;
        case "Delete":
            // echo $oCont->Delete($_REQUEST["InputID"]);
            break;
        case "SelectByID":
            // $rpta = $oCont->SelectByID($_REQUEST["InputID"]);
            echo json_encode($rpta);
            break;
        
    }
}


