<?php

    session_start();
    require_once "../../clases/Conexion.php";
    $c = new Conectar();
    $conexion = $c->conexion();
    $idUsuario = $_SESSION['idUsuario'];
    
    $sql = "SELECT 
                    archivos.nombre AS idArchivo,
                    usuario.nombre AS nombreUsuario,
                    categorias.nombre AS categoria,
                    archivos.nombre AS nombreArchivo,
                    archivos.tipo AS tipoArchivo,
                    archivos.ruta AS rutaArchivo,
                    archivos.fecha AS fecha
                FROM
                    t_archivos AS archivos
                        INNER JOIN
                    t_usuarios AS usuario ON archivos.id_usuario = usuario.id_usuario
                        INNER JOIN
                    t_categorias AS categorias ON archivos.id_categoria = categorias.id_categoria
                        AND archivos.id_usuario = '$idUsuario'";
    $result = mysqli_query($conexion, $sql);

?>

<div class="col-sm-12">
    <div class="table-responsive">
        <table class="table table-hover table-dark" id="tablaGestorDataTable">
            <thead>
                <tr>
                    <th>Nombre Convenio</th>
                    <th>Tipo de Archivo</th>
                    <th>Descargar</th>
                    <th>Visulalizar</th>                    
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($mostrar = mysqli_fetch_array($result)){
                        
                        $rutaDescarga = "../archivos/".$idUsuario."/".$mostrar['nombreArchivo'];
                        $nombreArchivo = $mostrar['nombreArchivo'];
                ?>
                <tr>                    
                    <td><?php echo $mostrar['nombreArchivo'];  ?></td>
                    <td><?php echo $mostrar['tipoArchivo'];  ?></td>
                    <td>
                        <a href="<?php echo $rutaDescarga; ?>" download="<?php echo $nombreArchivo; ?>" class="btn btn-success btn-sm">
                            <span class="fas fa-download"></span>
                        </a>
                    </td>
                    <td></td>
                    <td>
                        <span class="btn btn-danger btn-sm">
                            <span class="fas fa-trash-alt"></span>
                        </span>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $( document).ready(function(){
        $('#tablaGestorDataTable').DataTable();
    });
</script>