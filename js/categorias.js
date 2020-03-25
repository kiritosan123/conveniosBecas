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
                    $('#nombreCategoria').val("");
                    swal(":D", "Agregado con exito", "success");
                } else {
                    swal(":(", "Fallo al agregar", "error");
                }
            }

        });
    }
}