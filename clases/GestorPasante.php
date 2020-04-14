<?php

    require_once "Conexion.php";

    class Gestor extends Conectar {
        public function agregaRegistroPasante($datos) {
            $conexion = Conectar::conexion();
            $sql = "INSERT INTO t_pasante (id_categoria, ci, nombre, celular, facultad, carrera, tipoPasante, fechaSuscripcion, estado, id_usuario, sexo)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param("issssssssis", $datos['idCategoria'],
                                        $datos['ci'],
                                        $datos['nombrePasante'],
                                        $datos['celular'],
                                        $datos['facultad'],
                                        $datos['carrera'],
                                        $datos['tipoPasante'],
                                        $datos['fechaSuscripcion'],
                                        $datos['estado'],
                                        $datos['idUsuario'],
                                        $datos['sexo']);
            
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }

        public function obtenNombreArchivo($idArchivo){
            $conexion = Conectar::conexion();
            $sql = "SELECT nombre FROM t_archivo WHERE id_archivo = '$idArchivo'";

            $result = mysqli_query($conexion, $sql);

            return mysqli_fetch_array($result)['nombre'];
        }

        public function eliminarRegistroPasante($idPasante){
            $conexion = Conectar::conexion();

            $sql = "DELETE  FROM t_pasante WHERE id_pasante = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idPasante);

            $respuesta = $query->execute();
            $query->close();
            
            return $respuesta;
        }
        
    }

?>