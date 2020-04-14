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
        function crearCadenaLineal(json){
            var parsed = JSON.parse(json);
            var arr = [];
            for(var x in parsed){
                arr.push(parsed[x]);
            }
            return arr;
        }
    </script>



<div id="graficaLineal"></div>


<script type="text/javascript">
    
    datosX = crearCadenaLineal('<?php  echo $datosX ?>');
    datosY = crearCadenaLineal('<?php  echo $datosY ?>');
    
    var trace1 = {
        x: datosX,
        y: datosY,
        type: 'scatter',
        line: {
            color: 'red',
            width: 2
        },
        marker: {
            color: 'red',
            size: 12
        }
    };

    var layout = {
        title: 'Grafica Lineal',
        xaxis: {
            title: 'Convenios'
        },
        yaxis: {
            title: 'Cantidad'
        }
    };


    var data = [trace1];

    Plotly.newPlot('graficaLineal', data, layout);
</script>