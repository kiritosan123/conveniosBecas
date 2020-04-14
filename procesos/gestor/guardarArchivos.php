<?php
    session_start();
    require_once "../../clases/Gestor.php";
    $Gestor = new Gestor();

    $idCategoria = $_POST['categoriasArchivos'];
    $idUsuario = $_SESSION['idUsuario'];


    // AGREGANDO PARA OBJETVIO, VIGENCIA
    $objetivo = $_POST['objetivo'];
    $vigencia = $_POST['vigencia'];
    $estado = $_POST['estado'];
    $fechaSuscripcion = explode("-", $_POST['fechaSuscripcion']);
    $fechaSuscripcion = $fechaSuscripcion[2] . "-" . $fechaSuscripcion[1] . "-" . $fechaSuscripcion[0];

    if($_FILES['archivos']['size'] > 0){
        
        $carpetaUsuario = '../../archivos/'.$idUsuario;

        if(!file_exists($carpetaUsuario)){
            mkdir($carpetaUsuario, 0777, true);
        }
        //para saber cuantos archivos se an seleccionado
        $totalArhivos = count($_FILES['archivos']['name']);

        for($i = 0; $i < $totalArhivos; $i++){
            
            $nombreArchivo = $_FILES['archivos']['name'][$i];
            $explode = explode('.', $nombreArchivo);
            $tipoArchivo = array_pop($explode);
            $rutaAlmacenamiento = $_FILES['archivos']['tmp_name'][$i];            
            $rutaFinal = $carpetaUsuario."/".$nombreArchivo;

            $datosRegistroArchivo = array(
                                            "idUsuario"        => $idUsuario,
                                            "idCategoria"      => $idCategoria,
                                            "nombreArchivo"    => $nombreArchivo,
                                            "objetivo"         => $objetivo,
                                            "fechaSuscripcion" => $fechaSuscripcion,
                                            "vigencia"         => $vigencia,
                                            "tipo"             => $tipoArchivo,
                                            "ruta"             => $rutaFinal,
                                            "estado"             => $estado
            );


            if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
                $respuesta = $Gestor->agregaRegistroArchivo($datosRegistroArchivo);
            }
        }

        echo $respuesta;
    }else{
        echo 0;
    }
    
    
?>