<!-- SELECT idubigeo, CONCAT(ndep_ubi,'/',npro_ubi,'/', ndis_ubi) ubigeo FROM tb_ubiego WHERE ndep_ubi<>''  -->

<div class="modal fade" id="w_estudiante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document" style="max-width: 90%;">
        <form id="frm_estudiante" onsubmit="return guardarRegistro()">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titulo_ventana">Programas</h5>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">CAMPOS</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputID">ID</label>
                                                <input type="text" class="form-control" id="inputID" name="inputID" readonly>
                                                <input type="hidden" class="form-control" id="inputAccion" name="inputAccion">
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputDni">DNI (*)</label>
                                                <input type="text" class="form-control" id="inputDni" name="inputDni" placeholder="Dni" maxlength="8">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputApellidos">Apellidos (*)</label>
                                                <input type="text" class="form-control" id="inputApellidos" name="inputApellidos" placeholder="Apellidos" maxlength="60">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputNombres">Nombres (*)</label>
                                                <input type="text" class="form-control" id="inputNombres" name="inputNombres" placeholder="Nombres" maxlength="60">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputFecNac">Fech. Nacimiento</label>
                                                <input type="date" class="form-control" id="inputFecNac" name="inputFecNac">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputSexo">Sexo (*)</label>
                                                <select name="inputSexo" id="inputSexo" class="form-control">
                                                    <option selected disabled>Seleccione</option>
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Femenino</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputDireccion">Direcci??n (*)</label>
                                                <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" placeholder="Direcci??n" maxlength="60">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputEmail">Email Institucional (*)</label>
                                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <?php
                                            require_once '../controller/cProgramasC.php';
                                            $oProgC = new cProgramasC();
                                            $result2 = $oProgC->listar();

                                            foreach ($result2 as $row) {
                                            }
                                            ?>

                                            <div class="form-group">
                                                <label for="inputPrograma">Programa de Estudio (*)</label>
                                                <select name="inputPrograma" id="inputPrograma" class="form-control">

                                                    <option selected disabled>Seleccione</option>
                                                    <?php
                                                    foreach ($result2 as $row) {
                                                    ?>
                                                        <option value="<?php echo $row["idprograma"] ?>"><?php echo $row["nomb_pro"] ?></option>
                                                    <?php  } ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6">

                                            <?php
                                            require_once '../controller/cOperadorC.php';
                                            $oProgC = new cOperadorC();
                                            $result_operador = $oProgC->listar();

                                            foreach ($result_operador as $row) {
                                            }
                                            ?>

                                            <div class="form-group">
                                                <label for="inputOperador">Operador Movil (*)</label>
                                                <select name="inputOperador" id="inputOperador" class="form-control " >
                                                    <option selected disabled>Seleccione</option>
                                                    <?php
                                                    foreach ($result_operador as $row) {
                                                    ?>
                                                        <option value="<?php echo $row["idoperador"] ?>"><?php echo $row["nomb_ope"] ?></option>
                                                    <?php  } ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputMovil">N?? Movil (*) </label>
                                                <input type="text" class="form-control" id="inputMovil" name="inputMovil" placeholder="N??mero de Movil" maxlength="9">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8 col-sm-6">

                                            <?php
                                            require_once '../controller/cUbigeoC.php';
                                            $oProgC = new cUbigeoC();
                                            $result_ubigeo = $oProgC->listar();

                                            foreach ($result_ubigeo as $row) {
                                            }
                                            ?>

                                            <div class="form-group">
                                                <label for="inputUbigeo">Departamento/Provincia/Distrito (*)</label>
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

                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="inputEstado" name="inputEstado" value="A">
                                                <label class="form-check-label" for="inputEstado">Estado</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12" id="msg">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label class="text-center">Imagen</label>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 text-center" id="preview">
                                            <img id="mi_imagen" class="img-fluid" src="../images/estudiantes/sin-foto.jpg" alt="" />
                                            <a id="openFile" href=# class="btn btn-danger btn-block" style="padding: 0.6em 0"><i class="fa fa-pi"></i> Cargar Imagen</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 text-center">
                                            <span id="info_file" class="alert alert-block" style="padding: 0.7em">

                                            </span>
                                        </div>
                                    </div>
                                    <input type="file" name="InputFile" id="InputFile" />
                                    <!-- Insertamos un Campo Oculto -->
                                    <input type="hidden" id="InputOculto" name="InputOculto" />
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="actualizarPagina()" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger"> <i class="fas fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>