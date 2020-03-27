<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
        
    include "header.php" 
?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Gestor de Universitarios</h1>
            <span class="btn btn-primary">
                <span class="fas fa-plus-circle"></span>Agregar Universitario
            </span>
            <hr>
            <div id="tablaGestorArchivos"></div>
        </div>
    </div>

<?php include "footer.php" ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaGestorArchivos').load("gestor/tablaGestorPasante.php");
    })
</script>

<?php
    }else{
        header("location:../index.html");
    }
?>