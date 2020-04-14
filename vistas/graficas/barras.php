<?php
    require_once "../../clases/Conexion.php";
    $conexion = Conectar::conexion();
    $sql = "SELECT t_categorias.nombre as nombre,COUNT(*) as cant
                    FROM t_categorias, t_archivo
                    WHERE t_categorias.id_categoria=t_archivo.id_categoria
                    GROUP BY nombre;";
    $result = mysqli_query($conexion, $sql);

    $valoresX = array();
    $valoresY = array();

    while($ver = mysqli_fetch_row($result)){
        $valoresX[] = $ver[0];
        $valoresY[] = $ver[1];
    }

    $datosX = json_encode($valoresX);
    $datosY = json_encode($valoresY);

?>
    <!-- funncion  para covenrtir en nuemero los datos json-->
    <script type="text/javascript">
        function crearCadenaBarras(json){
            var parsed = JSON.parse(json);
            var arr = [];
            for(var x in parsed){
                arr.push(parsed[x]);
            }
            return arr;
        }
    </script>


<div id="graficaBarras"></div>


<script type="text/javascript">

    datosX = crearCadenaBarras('<?php  echo $datosX ?>');
    datosY = crearCadenaBarras('<?php  echo $datosY ?>');
    var data = [
    {
        x: datosX,
        y: datosY,
        type: 'bar',
        marker: {
        color: 'red'
        }
    }
    ];
    var layout = {
        title: 'Grafica de Barras',
        xaxis: {
            tickangle: -45,
            title: 'Convenios'
        },
        yaxis: {
            title: 'Cantidad'
        },
        barmode: 'group'
    };

Plotly.newPlot('graficaBarras', data, layout);
</script>