<?php

    require_once "../../../clases/Usuario.php";

    //<!--METODO PARA ENCRIPTAR PASSWORD-->
    //$password = sha1($_POST['password']);

    //<!--METODO PARA SIN ENCRIPTAR-->
    $password = $_POST['password'];


    $fechaSuscripcion = explode("-", $_POST['fechaSuscripcion']);
    $fechaSuscripcion = $fechaSuscripcion[2] . "-" . $fechaSuscripcion[1] . "-" . $fechaSuscripcion[0];
    
    $datos = array(
        "nombre"            =>    $_POST['nombre'],
        "fechaSuscripcion"  =>   $fechaSuscripcion,
        "email"            =>   $_POST['correo'], 
        "usuario"           =>   $_POST['usuario'], 
        "password"          =>   $password
    );
    
    $usuario = new Usuario();
    echo $usuario->agregarUsuario($datos);
?>