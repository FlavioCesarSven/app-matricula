<!doctype html>
<html class="no-js" lang="es">
    <head>
        <?php
        include_once 'includes/s_head.php';
        ?>  
        <title>Matrícula 2021</title>
    </head>

    <body>

        <!-- header-start -->
        <header class="fix">
            <?php
            //  echo "<script>alert('EL Proceso de Registro de Matrícula ha Finalizado!!!');window.location='../../index.php';</script>";
            include_once 'includes/s_header.php';
            ?>

        </header>
        <!-- header-end -->

        <div class="event-details-area" style="background: #08294D;">
            <div class="container">
                <div class="row">
                    <div class=" white-bg">
                        <div class="card" style="border:0;  ">
                            <div class="card-header text-center" style="background-color: #FB344B; font-size: 1.2em; font-weight: bold; color:#fff;border-radius: 0">             
                                FORMULARIO DE RATIFICACIÓN DE MATRÍCULA REGULAR 2021 - II <br>
                                (ESTUDIANTES DEL II, IV y VI CICLO)
                            </div>
                            <form id="frmUsuarioMat" onsubmit="return ActualizarDatos()">

                                <div class="card-body"> 
                                    <div class="card">
                                        <div class="card-header">        
                                            1. DATOS DE ESTUDIANTE (Buscar por DNI)
                                        </div>
                                        <div class="card-body" style="background-color: #F0F2F5;border:0;border-radius: 0">
                                            <div class="row">    
                                                <div class="col-xl-9 col-md-9"> 
                                                    <div class="row"> 
                                                        <div class="col-xl-9 col-md-9">
                                                            <div class="row"> 
                                                                <div class="col-xl-3 col-md-3" style="padding-right: 0.3em">
                                                                    <input id="InputID" type="hidden">
                                                                    <input type="hidden"  id="InputAccion" name="InputAccion">
                                                                    <input id="InputDNI" name="InputDNI" class="form-control" placeholder="Ingrese DNI" type="text" autofocus="autofocus" maxlength="8">
                                                                    <div id="msgDni"></div>
                                                                </div>
                                                                <div class="col-xl-9 col-md-9" style="padding-left: 0.3em">
                                                                    <button onclick="buscarEstudiante()" type="button" class="btn btn-warning"><i class="fa fa-search"></i> Buscar </button>
                                                                    <button id="btnLimpiar" onclick="limpiarFormUsuario()" type="button" class="btn btn-secondary"><i class="fa fa-trash"></i> Limpiar</button>
                                                                </div>
                                                                <div class="col-xl-12 col-lg-12" style="padding-top: 1em" >
                                                                    <span>APELLIDOS Y NOMBRES: </span>
                                                                    <input id="InputApellidos"  name="InputApellidos" class="form-control clase_txt" disabled type="text">

                                                                </div>
                                                                <div class="col-xl-8 col-lg-8" style="padding-top: 1em;">
                                                                    <span>PROGRAMA DE ESTUDIOS: </span>
                                                                    <input id="InputPrograma" name="InputPrograma" disabled class="form-control clase_txt"  type="text">
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4" style="padding-top: 1em;">
                                                                    <span>CICLO - SECCIÓN: </span>
                                                                    <input id="InputTurno" name="InputTurno" disabled class="form-control clase_txt"  type="text">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-3">
                                                            <h6 class="fondo_etiqueta"><i class="fa fa-picture-o" aria-hidden="true"></i> FOTOGRAFÍA</h6>
                                                            <img id="foto_est" class="img-fluid" src="../images/estudiantes/no-disp1.jpg" alt=""/>
                                                        </div>

                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div style="margin-top: 1em;" class="col-lg-3">
                                                            <?php
                                                            require_once '../controller/cOperadorC.php';
                                                            $oProgC = new cOperadorC();
                                                            $result_operador = $oProgC->listar();

                                                            foreach ($result_operador as $row) {
                                                            }
                                                            ?>
                                                            <span>OPERADOR MÓVIL: </span>
                                                            <select name="inputOperador" id="inputOperador" class="form-control " >
                                                            <option selected disabled>Seleccione</option>
                                                            <?php
                                                            foreach ($result_operador as $row) {
                                                            ?>
                                                                <option value="<?php echo $row["idoperador"] ?>"><?php echo $row["nomb_ope"] ?></option>
                                                            <?php  } ?>

                                                        </select>
                                                        </div>
                                                        <div style="padding-top: 1em;" class="col-lg-3">
                                                            <span>N° MÓVIL: </span>
                                                            <input id="InputCelular" name="InputCelular" class="form-control clase_txt" placeholder="N° Móvil"  maxlength="9"  type="text">
                                                        </div>
                                                        <div style="padding-top: 1em;" class="col-lg-6">
                                                            <span>E-MAIL INSTITUCIONAL: </span>
                                                            <input id="InputMail" name="InputMail" class="form-control clase_txt" placeholder="Correo Institucional"  maxlength="60"  type="text">
                                                        </div>
                                                        <div id="msgenvio1" class="col-lg-12">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-3"> 
                                                    <h5 class="fondo_etiqueta"><i class="fa fa-paperclip" aria-hidden="true"></i> ADJUNTAR VOUCHER (.jpg | .jpeg)</h5>
                                                    <p style="font-size: 1em;color:#333">Este comprobante será validado por el Personal Administrativo de la institución.</p>
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12 text-center" id="preview">
                                                            <img id="mi_imagen" style="width: 60%; " src="../images/voucher/no-disponible.jpg" alt=""/>
                                                            <a id="openFile" href=# class="btn btn-danger" style="padding: 0.6em 0"><i class="fa fa-picture-o"></i> Cargar Imagen</a>
                                                        </div>
                                                    </div>   

                                                    <input type="file" name="InputFile" id="InputFile"/>

                                                    <!-- Insertamos un Campo Oculto -->
                                                    <input type="hidden" id="InputOculto" name="InputOculto" />

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                    <div class="card-header">
                                        1. DIRECCIÓN - LUGAR DE NACIMIENTO
                                    </div>
                                    <div class="card-body" style="background-color: #F0F2F5;border:0;border-radius: 0">
                                        <div class="row">
                                            <div class="col-xl-4 col-md-9">
                                                <span>DIRECCIÓN: </span>
                                                <input id="InputDireccion" name="InputDireccion" class="form-control clase_txt" placeholder="Dirección" maxlength="60" type="text">
                                            </div>

                                            
                                            <div class="col-xl-2 col-md-9">
                                                <span >Fech. Nacimiento</span>
                                                <input type="date" class="form-control" id="inputFecNac" name="inputFecNac">
                                            </div>
                                            <div class="col-xl-6 col-md-3">

                                            <?php
                                            require_once '../controller/cUbigeoC.php';
                                            $oProgC = new cUbigeoC();
                                            $result_ubigeo = $oProgC->listar();

                                            foreach ($result_ubigeo as $row) {
                                            }
                                            ?>
                                                <span>LUGAR DE PROCEDENCIA: </span>
                                                <select class="form-control selectpicker" data-live-search="true" id="inputUbigeo" name="inputUbigeo">
                                                    <option selected disabled>Seleccione</option>
                                                    <?php
                                                    foreach ($result_ubigeo as $row) {
                                                    ?>
                                                        <option value="<?php echo $row["idubigeo"] ?>"><?php echo $row["ubigeo"] ?></option>
                                                    <?php  } ?>

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="row" style="padding:0.5em 1.5em;">  
                                    <div id="msgenvio" class="col-lg-12">
                                    </div>
                                    <div class="col-lg-12">

                                        <button type="submit" class="btn btn-block btn-primary">
                                            <i class="fa fa-save fa-2x"></i><span style="font-size: 22px;">&nbsp;&nbsp; REALIZAR MATRÍCULA </span>
                                            <!--                                    <div class="ripple-container"></div>-->
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer start -->
    <footer id="Contact">
        <?php
        include_once 'includes/s_footer.php';
        ?>
    </footer>
    <!-- footer end -->

    <?php
    //Librerias JS
    include_once 'includes/s_js.php';
    ?>   
    <script src="./js/input.js"></script>
    <script src="../js/js_matricula_estudiante.js" type="text/javascript"></script>
</body>


</html>
