init()
function init(){

}

function abrirModal(){
    
    setTimeout( function () {
        $('#inputNombre').focus();
    }, 1000 );

    $('#titulo_ventana').text('Agregar Periodo');

    $('#inputAccion').val('Insert');
    
    $('#w_periodo').modal({
        show: true,
        backdrop: 'static'
    });    
    
}

function guardarRegistro(){
    var nombre = $('#inputNombre').val();
    if( nombre.length == 0 ){
       
        $('#msgenvio').html('<div class="alert alert-danger" role="alert">Ingrese el Nombre </div>').show(300).delay(2000).hide(300);

        $('#inputNombre').focus();
        return false;
    }

    Swal.fire({
        title: 'Seguro de Guardar los cambios?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
      }).then((result) => {
        if (result.isConfirmed) {
        
            var ruta = "../controller/cPeriodoC.php";

            var formData = new FormData($('#frm_programa')[0]);

            $.ajax({
                type: 'POST',
                url: ruta,
                data: formData,
                contentType: false,
                processData : false,
                success: function (rpta){
                  alert(rpta)
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
    
    $('#titulo_ventana').text('Editar Operador');
    $('#inputAccion').val('Udpate');
    

    $('#w_operador').modal({
        show: true,
        backdrop: 'static'
    });    
    
}