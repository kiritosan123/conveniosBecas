<?php
    session_start();
    require_once "../../clases/GestorPasante.php";

    $Gestor = new Gestor();
    $idPasante = $_POST['idPasante'];
    $idUsuario = $_SESSION['idUsuario'];

    echo $Gestor->eliminarRegistroPasante($idPasante); 
?>