<?php
session_start();
if (isset($_SESSION['usuario'])) {

    include "header.php"
?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Gestor de Convenios</h1>
            <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarArchivos">
                <span class="fas fa-plus-circle"></span>Agregar Convenios
            </span>
            <hr>
            <div id="tablaGestorArchivos"></div>
        </div>
    </div>

    <!--ESTA ES LA VENTANA MODAL DONDE SE INGRESA LOS DATOS DEL CONVENIOS-->
    <!-- Modal -->
    <div class="modal fade" id="modalAgregarArchivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmArchivos" enctype="multipart/form-data" method="POST">
                        <label for="">Categoria</label>
                        <div id="categoriasLoad"></div>
                        <hr>
                        <label for="">Objetivo</label>
                        <input type="text" name="objetivo" id="idObjetivo" class="form-control">
                        <label for="">Fechas de Suscripción</label>
                        <input type="text" name="fechaSuscripcion" id="fechaSuscripcion" class="form-control" required="" readonly="">
                        <label for="">Vigencia</label>
                        <input type="text" name="vigencia" id="idVigencia" class="form-control">
                        
                        <input type="file" name="archivos[]" id="archivos[]" class="form-control" multiple="">
                        <!--<input type="file" name="archivos" id="archivos" class="form-control" multiple="">-->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btnGuardarArchivos">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    

    <?php include "footer.php" ?>
    <script src="../js/gestor.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaGestorArchivos').load("gestor/tablaGestor.php");
            $('#categoriasLoad').load("categorias/selectCategoria.php");

            //Fucion para agregar el archivo PDF
            $('#btnGuardarArchivos').click(function(){
                agregarArchivosGestor();                
            });
        });        
    </script>

<?php
} else {
    header("location:../index.html");
}
?>