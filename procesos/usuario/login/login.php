<?php

    session_start();
    require_once "../../../clases/Usuario.php";

    $usuario  = $_POST['login'];

    //<!--METODO PARA ENCRIPTAR PASSWORD-->
    //$password = sha1($_POST['password']);
    
    //<!--METODO SIN ENCRIPTAR PASSWORD-->
    $password = $_POST['password'];

    $usuarioObj = new Usuario();

    echo $usuarioObj->login($usuario, $password);

    //print_r($_POST);
?>