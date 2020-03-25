<?php

    session_start();
    session_destroy();

    // Aqui es donde podemos poner a la pagina q keramos q direccione al presionar salir
    header("location:../../index.html");
?>