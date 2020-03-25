<?php

class Conectar
{
    public function conexion()
    {
        /*$servidor = "localhost";
            $usuario  = "root";
            $password = "";
            $base     = "gestor";

            $conexion = msqli_connect($servidor,
                                        $usuario,
                                        $password,
                                        $base);
            return $conexion;  */
        $Conexion = new mysqli("localhost", "root", "", "gestor");
        if ($Conexion->connect_error) {
            echo "Falló al conectar :" . $Conexion->connect_error;
        }

        $Conexion->set_charset("utf8");
        return $Conexion;
    }
}
