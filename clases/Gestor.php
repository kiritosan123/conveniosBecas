<?php

    require_once "Conexion.php";

    class Gestor extends Conectar {
        public function agregaRegistroArchivo($datos) {
            $conexion = Conectar::conexion();
            $sql = "INSERT INTO t_archivo (id_usuario, id_categoria, nombre, objetivo, fechaSuscripcion, vigencia, tipo, ruta, estado)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param("iisssssss", $datos['idUsuario'],
                                        $datos['idCategoria'],
                                        $datos['nombreArchivo'],
                                        $datos['objetivo'],
                                        $datos['fechaSuscripcion'],
                                        $datos['vigencia'],
                                        $datos['tipo'],
                                        $datos['ruta'],
                                        $datos['estado']);
            
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

        public function eliminarRegistroArchivo($idArchivo){
            $conexion = Conectar::conexion();
            $sql = "DELETE  FROM t_archivo WHERE id_archivo = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idArchivo);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }

        public function obtenerRutaArchivo($idArchivo){
            $conexion = Conectar::conexion();

            $sql = "SELECT nombre, tipo FROM t_archivo WHERE id_archivo = '$idArchivo'";
            $result = mysqli_query($conexion, $sql);
            $datos = mysqli_fetch_array($result);
            $nombreArchivo = $datos['nombre'];
            $extesion      = $datos['tipo'];

            return self::tipoArchivo($nombreArchivo, $extesion);
        }

        public function tipoArchivo($nombre, $extesion){
            //      NOTA IMPORTANTE  IMPORTANTE
            // HABILITAR CUANDO EXISTA MAS DE 1 USUARIO ... CASO CONTRARIO SIEMPRE SERA 1 EL VALOR DE idUsuario
            // esto si...si el usuario no esta activo entonces no se podra hacer una previsualizacion del documento es por eso q lo pongo por defecto el valor de 1 ya  q suponemos q solo habra un usuario
            //$idUsuario = $_SESSION['idUsuario'];
            $idUsuario = "1";

            $ruta = "../archivos/".$idUsuario."/".$nombre;

            switch ($extesion) {
                case 'png':
                    return '<img src="'.$ruta.'" width="90%">';
                    break;
                case 'jpg':
                    return '<img src="'.$ruta.'" width="90%">';
                    break;
                case 'pdf':
                    return '<embed src="'.$ruta.'#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" heigth="100px" />';
                    break;
                case 'mp3':
                    return '<audio controls src="'.$ruta.'"></audio>';
                    break;
                case 'mp4':
                    return '<video src="'.$ruta.'" controls width="100%" heigth="100px"></video>';
                    break;    
                
                default:
                    # code...
                    break;
            }
        }
    }

?>