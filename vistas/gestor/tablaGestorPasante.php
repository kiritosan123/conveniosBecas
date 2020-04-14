<?php

    session_start();
    require_once "../../clases/Conexion.php";
    $c = new Conectar();
    $conexion = $c->conexion();
    $idUsuario = $_SESSION['idUsuario'];
    
    $sql = "SELECT 
                    pasantes.id_pasante as idPasante,
                    categorias.nombre as categoria,
                    pasantes.ci as ci,
                    pasantes.nombre as nombre,
                    pasantes.celular as celular,
                    pasantes.facultad as facultad,
                    pasantes.tipoPasante as pasante,
                    pasantes.fechaSuscripcion as fechaSuscripcion
            FROM
                t_pasante AS pasantes
            INNER JOIN
                t_usuarios AS usuario ON pasantes.id_usuario = usuario.id_usuario
            INNER JOIN
                t_categorias AS categorias ON pasantes.id_categoria = categorias.id_categoria
            AND pasantes.id_usuario = '$idUsuario';";
    $result = mysqli_query($conexion, $sql);

?>

<div class="col-sm-12">
    <div class="table-responsive">
        <table class="table table-hover table-dark" id="tablaGestorDataTable">
            <thead>
                <tr>
                    <th>Nro.</th>
                    <th>Convenios</th>
                    <th>CI</th>
                    <th>Nombre Completo</th>
                    <th>Celular</th>
                    
                    <th>Facultad</th>
                    <th>Pasante/Tesista</th>
                    <th>Fechas de Suscripción</th>
                    <th>Actualizar</th>                    
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    /*
                        ARREGLO DE EXTENSIONES VALIDAS
                    */                    

                    while($mostrar = mysqli_fetch_array($result)){
                        $idPasante = $mostrar['idPasante'];
                ?>
                <tr>
                    <td><?php  echo $mostrar['idPasante']; ?></td>         
                    <td><?php  echo $mostrar['categoria']; ?></td>           
                    <td><?php echo $mostrar['ci'];  ?></td>
                    <td><?php echo $mostrar['nombre'];  ?></td>
                    <td><?php echo $mostrar['celular'];  ?></td>
                    <td><?php echo $mostrar['facultad'];  ?></td>
                    <td><?php echo $mostrar['pasante'];  ?></td>
                    <td><?php echo $mostrar['fechaSuscripcion'];  ?></td>
                    <td>
                        <span class="btn btn-warning btn-sm" onclick="obtenerDatosCategoria('<?php echo $idCategoria ?>')" data-toggle="modal" data-target="#modalActualizarCategoria">
                            <span class="fas fa-edit"></span></span>
                    </td>
                    <td>
                        <span class="btn btn-danger btn-sm" onclick="eliminarArchivo('<?php echo $idPasante  ?>')">
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