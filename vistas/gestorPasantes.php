<?php
session_start();
if (isset($_SESSION['usuario'])) {

    include "header.php"
?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            <h1 class="display-4">Gestor de Pasantes</h1>
            <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarArchivos">
                <span class="fas fa-plus-circle"></span>Agregar Universitario
            </span>
            <hr>
            <div id="tablaGestorArchivos"></div>
        </div>
    </div>

    <!--ESTA ES LA VENTANA MODAL DONDE SE INGRESA LOS DATOS DEL UNIVERSITARIO-->
    <!-- Modal -->
    <div class="modal fade" id="modalAgregarArchivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Datos Universitario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmArchivos" enctype="multipart/form-data" method="POST">
                        <label for="">Categoria</label>
                        <div id="categoriasLoad"></div>
                        <hr>
                        <label for="">Carnet de Identidad</label>
                        <input type="text" name="ci" id="ci" class="form-control" >
                        <label for="">Nombre Completo</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        <label for="">Numero de Celular</label>
                        <input type="text" name="celular" id="celular" class="form-control">
                        <label for="">Sexo</label>
                        <input type="text" name="sexo" id="sexo" class="form-control">
                        <label for="">Facultad</label>
                        <input type="text" name="facultad" id="facultad" class="form-control">
                        <label for="">Carrera</label>
                        <input type="text" name="carrera" id="carrera" class="form-control">
                        <label for="">Pasante/Tesista</label>
                        <input type="text" name="tipoPasante" id="tipoPasante" class="form-control">
                        <label for="">Fechas de Suscripción</label>
                        <input type="text" name="fechaSuscripcion" id="fechaSuscripcion" class="form-control" required="" readonly="">
                        <label for="">Estado</label>
                        <input type="text" name="estado" id="estado" class="form-control">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btnGuardarArchivos">Guardar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal para ver cuando ser recupera un Estudiante y poder Editar o Actualizar-->
    <div class="modal fade" id="modalActualizarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="frmActualizaCategoria">
                        <input type="text" name="idCategoria" id="idCategoria" hidden>
                        <label>Categoria</label>
                        <input type="text" name="categoriaU" id="categoriaU" class="form-control">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCerrarUpdateCategoria">Cerrar</button>
                    <button type="button" class="btn btn-warning" id="btnActualizaCategori">Actualizar</button>
                </div>
            </div>
        </div>
    </div>


    <?php include "footer.php" ?>
    <script src="../js/gestorPasante.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaGestorArchivos').load("gestor/tablaGestorPasante.php");
            $('#categoriasLoad').load("categorias/selectCategoria.php");

            //Fucion para agregar el nuevo estudiante
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