function agregarArchivosGestor() {
    var formData = new FormData(document.getElementById('frmArchivos'));
    $.ajax({
        url: "../procesos/gestor/guardarArchivos.php",
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
                    $('#tablaGestorArchivos').load("gestor/tablaGestor.php");                    
                    swal(":D","Agregado con Éxito","success");
                }
                else{
                    swal(":(","Fallo al Agregar","Error 322");                    
                    console.log(respuesta);
                }
        }
    });

}

function eliminarArchivo(idArchivo){
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
                data: "idArchivo=" + idArchivo,
                url: "../procesos/gestor/eliminarArchivo.php",
                success:function(respuesta){
                    respuesta = respuesta.trim();
                    if(respuesta == 1){
                        $('#tablaGestorArchivos').load("gestor/tablaGestor.php");                    
                        swal("Eliminado con Exito!", {
                            icon: "success",
                        });
                    }else{
                        swal("Error al Eliminar!", {
                            icon: "error",
                        });
                        console.log(respuesta);
                    }
                    
                }
            });
        }
    });
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