<?php
    session_start();
    require_once "../../clases/GestorPasante.php";
    $Gestor = new Gestor();
    $idUsuario = $_SESSION['idUsuario'];

    // <!-- viene de selectCategoria  . . para desplegar las categorias q tenemos-->
    $idCategoria = $_POST['categoriasArchivos'];


    // AGREGANDO PARA OBJETVIO, VIGENCIA
    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $facultad = $_POST['facultad'];
    $carrera = $_POST['carrera'];
    $tipoPasante = $_POST['tipoPasante'];
    $fechaSuscripcion = explode("-", $_POST['fechaSuscripcion']);
    $fechaSuscripcion = $fechaSuscripcion[2] . "-" . $fechaSuscripcion[1] . "-" . $fechaSuscripcion[0];
    $estado = $_POST['estado'];
    $sexo = $_POST['sexo'];


    $datosRegistroArchivo = array(        
        "idCategoria"      => $idCategoria,
        "ci"               => $ci,
        "nombrePasante"    => $nombre,
        "celular"          => $celular,
        "facultad"         => $facultad,
        "carrera"          => $carrera,
        "tipoPasante"      => $tipoPasante,
        "fechaSuscripcion" => $fechaSuscripcion,
        "estado"           => $estado,
        "idUsuario"        => $idUsuario,
        "sexo"             => $sexo
    );
    
    $respuesta = $Gestor->agregaRegistroPasante($datosRegistroArchivo);
    echo $respuesta;
?>