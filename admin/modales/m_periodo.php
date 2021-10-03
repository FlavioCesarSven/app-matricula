<div class="modal fade" id="w_periodo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <form id="frm_programa" onsubmit="return guardarRegistro()">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"  id="titulo_ventana">Programas</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">CAMPOS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">

                  <div class="form-group">
                    <label for="inputID">ID</label>
                    <input type="text" class="form-control" id="inputID" name="inputID" readonly>
                    <input type="text" class="form-control" id="inputAccion" name="inputAccion" >
                  </div>

                  <div class="form-group">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Nombre">
                  </div>

                  <div class="form-group">
                    <label for="inputFinicio">Fecha de Inicio</label>
                      <input type="date" class="form-control" id="inputFinicio" name="inputFinicio" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>

                  <div class="form-group">
                    <label for="inputFinal">Fecha Finalización</label>
                      <input type="date" class="form-control" id="inputFinal" name="inputFinal" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>

                  <div class="form-group" id="msgenvio"></div>


                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="inputEstado" name="inputEstado" value="I">
                    <label class="form-check-label" for="inputEstado">Estado</label>
                  </div>

                </div>
                <!-- /.card-body -->              
            </div>
            </div>
            <div class="modal-footer">
                <button onclick="actualizarPagina()" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button  type="submit" class="btn btn-danger"> <i class="fas fa-save"></i> Guardar</button>
            </div>
        </div>
        </form>
    </div>
</div>