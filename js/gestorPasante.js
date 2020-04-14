function agregarArchivosGestor() {
    var formData = new FormData(document.getElementById('frmArchivos'));
    $.ajax({
        url: "../procesos/gestor/guardarArchivosPasante.php",
        type: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
            respuesta = respuesta.trim();

                if(respuesta == 1){
                    $('#frmArchivos')[0].reset();
                    $('#tablaGestorArchivos').load("gestor/tablaGestorPasante.php");                    
                    swal(":D","Agregado con Éxito","success");
                }
                else{
                    swal(":(","Fallo al Agregar","Error 322");                    
                    console.log(respuesta);
                }
        }
    });

}

function eliminarArchivo(idPasante){
    idPasante = parseInt(idPasante);
    if(idPasante < 1){
        swal("No tienes Id de Pasante");
        return false;
    }else{
        //+++++++++++++++++++
        swal({
            title: "Estas seguro de eliminar este archivo?",
            text: "Una ves eliminado no podra recuperarse",
            icon: "warning",
            buttons: true,
            dangerMode: true
        })
        .then((willDelete) => {
            if(willDelete){
                $.ajax({
                    type: "POST",
                    data: "idPasante=" + idPasante,
                    url: "../procesos/gestor/eliminarPasante.php",
                    success:function(respuesta){
                        respuesta = respuesta.trim();
                        if(respuesta == 1){
                            $('#tablaGestorArchivos').load("gestor/tablaGestorPasante.php");                    
                            swal("Eliminado con Exito!", {
                                icon: "success",                            
                            });
                        }else{
                            swal("Error al Eliminar!", {
                                icon: "error",
                            });
                            console.log(repuesta);
                        }
                        
                    }
                });
            }
        });
    }
}

function obteberArchivoPorId(idArchivo){
    $.ajax({
        type: "POST",
        data: "idArchivo=" + idArchivo,
        url : "../procesos/gestor/obtenerArchivo.php",
        success:function(respuesta){
            $('#archivoObtenido').html(respuesta);
        }
    });
}