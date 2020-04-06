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