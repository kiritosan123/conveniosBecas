function agregarCategoria() {
    var categoria = $('#nombreCategoria').val();
    if (categoria == "") {
        swal("Debes Agregar una Categoria");
        return false;
    } else {
        $.ajax({
            type: "POST",
            data: "categoria=" + categoria,
            url: "../procesos/categorias/agregarCategoria.php",
            success: function (respuesta) {
                respuesta = respuesta.trim();

                if (respuesta == 1) {
                    $('#tablaCategorias').load("categorias/tablaCategoria.php");
                    $('#nombreCategoria').val("");
                    swal(":D", "Agregado con exito", "success");
                } else {
                    swal(":(", "Fallo al agregar", "error");
                }
            }

        });
    }
}

function eliminarCategorias(idCategoria){
    idCategoria = parseInt(idCategoria);
    if(idCategoria < 1){
        swal("No tienes Id de Categoria");
        return false;
    }else{
        //*************************
        swal({
            title: "Esta seguro de eliminar esta Categoría?",
            text: "Una ves eliminada, no podra recuperarse!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    data: "idCategoria=" + idCategoria,
                    url : "../procesos/categorias/eliminarCategoria.php",
                    success:function(respuesta){
                        respuesta = respuesta.trim();
                        
                        if(respuesta==1){
                            $('#tablaCategorias').load("categorias/tablaCategoria.php");
                            swal("Eliminado con Exito!", {
                                icon: "success",
                            });
                        }else{
                            swal(":(","Fallor al Eliminar","Error");
                        }
                    }
                });
            } 
          }); 
        //++++++++++++++++++++++++++++
    }
}

function obtenerDatosCategoria(idCategoria){
    $.ajax({
        type: "POST",
        data: "idCategoria=" + idCategoria,
        url : "../procesos/categorias/obtenerCategoria.php",
        success:function(respuesta){
            respuesta = jQuery.parseJSON(respuesta);
            
            $('#idCategoria').val(respuesta['idCategoria']);
            $('#categoriaU').val(respuesta['nombreCategoria']);
        }
    
    })
}