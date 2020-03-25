<?php

session_start();

if (isset($_SESSION['usuario'])) {
    include "header.php";
?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Categorías</h1>
            <div class="row">
                <div class="col-sm-12">
                    <div id="tablaCategorias"></div>
                </div>
            </div>
        </div>
    </div>
<?php
    include "footer.php";
} else {
    header("location:../index.html");
}
?>