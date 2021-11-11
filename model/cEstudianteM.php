<?php 

require_once '../config/connMySQL.php';
require_once '../entity/cEstudianteE.php';

class cEstudianteM {

    function Listar(){
        $oConn = new connMySQL();
        $sql  = "select * from v_estudiante order by 1";

        $result = $oConn->executeQuery($sql);
        return $result;
    }

    function Insertar(cEstudianteE $oEnt)
    {
        try 
        {
            //omitir mensajes de error
            error_reporting(E_ALL & ~E_NOTICE);
            //Crear un objeto a partir de la
            //clase de conexion
            $oConn=new connMySQL();
            //creamos una variable para leer la conexion
            $mysqli=$oConn->getConnection();
            //Sentencia Sql para realizar la Inserción
            $sql="insert into tb_estudiante values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            //Preparar la sentencia
            $stmt=$mysqli->prepare($sql);
            //Establecemos los valores para los parametros
            $stmt->bind_param('isssssssssssiis', $oEnt->getIdestudiante(),
                                      $oEnt->getNdni_est(),
                                      $oEnt->getApel_est(),
                                      $oEnt->getNomb_est(),
                                      $oEnt->getFnac_est(),
                                      $oEnt->getSexo_est(),
                                      $oEnt->getDire_est(),
                                      $oEnt->getCins_est(),
                                      $oEnt->getNcel_est(),
                                      $oEnt->getFoto_est(),
                                      $oEnt->getEstd_est(),
                                      $oEnt->getFreg_est(),
                                      $oEnt->getIdoperador(),
                                      $oEnt->getIdprograma(),
                                      $oEnt->getIdubigeo());
            //Ejecutar sentencia
            $stmt->execute();
            //Cerramos la conexion
            $mysqli->close();
            //retornar el mensaje
            return 'OK';
        } 
        catch (Exception $exc)
        {
            return 'Error: '.$exc->getMessage();
        }
    }

    function SeleccionarxID($idest)
    {
        $oConn = new connMySQL();
        $sql  = "select * from tb_estudiante where idestudiante = '$idest'";

        $result = $oConn->executeQuery($sql);

        $row = $result->fetch_assoc();
        return $row;
    }

    function SeleccionarxID_Ficha($idest)
    {
        $oConn = new connMySQL();
        $sql  = "select * from v_estudiante_ficha where idestudiante = '$idest'";

        $result = $oConn->executeQuery($sql);

        $row = $result->fetch_assoc();
        return $row;
    }


    function Editar(cEstudianteE $oEnt)
    {
        try 
        {
            //omitir mensajes de error
            error_reporting(E_ALL & ~E_NOTICE);
            //Crear un objeto a partir de la
            //clase de conexion
            $oConn=new connMySQL();
            //creamos una variable para leer la conexion
            $mysqli=$oConn->getConnection();
            //Sentencia Sql para realizar la Inserción
            $sql="update tb_estudiante set ndni_est=?,apel_est=?,nomb_est=?,fnac_est=?,sexo_est=?,dire_est=?,cins_est=?,ncel_est=?,foto_est=?,estd_est=?,idoperador=?,idprograma=?,idubigeo=? where idestudiante=?";
            //Preparar la sentencia
            $stmt=$mysqli->prepare($sql);
            //Establecemos los valores para los parametros
            $stmt->bind_param('ssssssssssiisi', $oEnt->getNdni_est(),
                                      $oEnt->getApel_est(),
                                      $oEnt->getNomb_est(),
                                      $oEnt->getFnac_est(),
                                      $oEnt->getSexo_est(),
                                      $oEnt->getDire_est(),
                                      $oEnt->getCins_est(),
                                      $oEnt->getNcel_est(),
                                      $oEnt->getFoto_est(),
                                      $oEnt->getEstd_est(),
                                      $oEnt->getIdoperador(),
                                      $oEnt->getIdprograma(),
                                      $oEnt->getIdubigeo(),
                                      $oEnt->getIdestudiante());
            //Ejecutar sentencia
            $stmt->execute();
            //Cerramos la conexion
            $mysqli->close();
            //retornar el mensaje
            return 'OK';
        } 
        catch (Exception $exc)
        {
            return 'Error: '.$exc->getMessage();
        }
    } 

}