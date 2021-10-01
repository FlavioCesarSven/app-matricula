init()
function init(){

}


function abrirModal(){
    
    setTimeout( function () {
        $('#inputNombre').focus();
    }, 1000 );

    $('#titulo_ventana').text('Agregar Programa');

    $('#inputAccion').val('Insert');
    
    
    $('#w_programa').modal({
        show: true,
        backdrop: 'static'
    });    
    
}

function guardarRegistro(){
    var nombre = $('#inputNombre').val();
    if( nombre.length == 0 ){
       
        // Swal.fire(
        //     'Ingrese el Nombre!',
        //     'Dato Obligatorio',
        //     'warning'
        // );

        $('#msgenvio').html('<div class="alert alert-danger" role="alert">Ingrese el Nombre </div>').show(300).delay(2000).hide(300);

        $('#inputNombre').focus();
        return false;
    }

    Swal.fire({
        title: 'Seguro de Guardar los cambios?',
        // text: "Sistema de Matricula",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
      }).then((result) => {
        if (result.isConfirmed) {
        
            var ruta = "../controller/cProgramasC.php";

            var formData = new FormData($('#frm_programa')[0]);

            $.ajax({
                type: 'POST',
                url: ruta,
                data: formData,
                contentType: false,
                processData : false,
                success: function (rpta){

                    if (rpta =='OK') {
                       Swal.fire(
                        'Sistema de Matricula!',
                        'Registro Guardado',
                        'success'
                     );  
                        limpiarControles();
                    }

                }
            });
        }
      });

    return false;
}

function editarPrograma(){
    setTimeout( function () {
        $('#inputNombre').focus();
    }, 1000 );
    
    $('#titulo_ventana').text('Editar Programa');
    $('#inputAccion').val('Udpate');
    

    $('#w_programa').modal({
        show: true,
        backdrop: 'static'
    });    
    
}

function actualizarPagina(){
    window.location.reload();
}

function limpiarControles(){
    $('#frm_programa')[0].reset();
}

function eliminarRegistro(idprog){
    Swal.fire({
        title: 'Sistema de Matricula',
        text: "¿Seguro de Eliminar el Registro?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
        
      }).then((result) => {
        if (result.isConfirmed) {
        
            var ruta = "../controller/cProgramasC.php";
            var accion = "Delete";

            $.ajax({
                type: 'POST',
                url: ruta,
                data: 'inputAccion=' + accion + '&inputID='+ idprog,
                success: function (rpta){
                  alert(rpta);
                  actualizarPagina();
                }
            });
        }
      });
}