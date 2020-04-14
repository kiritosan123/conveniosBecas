<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor</title>
    <link rel="stylesheet" type="text/css" href="../../librerias/bootstrap4/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
    <link rel="stylesheet" type="text/css" href="../../librerias/jquery-ui-1.12.1/jquery-ui.css">

    <link rel="stylesheet" href="../../librerias/fontawesome/css/all.css">
    <link rel="stylesheet" href="../../librerias/datatable/dataTables.bootstrap4.min.css">
    <link rel="shortcut icon" href="../../img/logo2.png" type="image/x-icon">
    <link rel="icon" href="../../img/logo2.png" type="image/x-icon">

    <!--Js para las graficas-->
    <script src="../../librerias/plotly-latest.min.js"></script>

</head>

<body style="background-color: #e9ecef">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="../inicio.php">
                <img src="../../img/logo.png" alt="" width="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../inicio.php"><span class="fas fa-home"></span>Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../categorias.php"><span class="fas fa-file"></span>Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../gestor.php"><span class="fas fa-university"></span>Administrar Convenios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../gestorPasantes.php"><span class="fas fa-user-graduate"></span>Administrar Pasantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reporte.php"><span class="fas fa-envelope-open-text"></span>Reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../procesos/usuario/salir.php" style="color: red">
                            <span class="fas fa-power-off"></i>Salir
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card bg-info">
                    <div class="card-header">
                        Graficas
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="cargaLineal"></div>
                            </div>
                            <div class="col-sm-6">
                                <div id="cargaBarras"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card bg-info">
                    <div class="card-header">
                        Graficas Pastel
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-sm-2"></div>
                        <div id="cargaPastel" class="col-sm-8"></div>
                        <div class="col-sm-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="../../librerias/jquery-3.4.1.min.js"></script>
    <script src="../../librerias/bootstrap4/popper.min.js"></script>
    <script src="../../librerias/bootstrap4/bootstrap.min.js"></script>
    <script src="../../librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="../../librerias/sweetalert.min.js"></script>
    <script src="../../librerias/datatable/jquery.dataTables.min.js"></script>
    <script src="../../librerias/datatable/dataTables.bootstrap4.min.js"></script>

</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#cargaLineal').load('lineal.php');
        $('#cargaBarras').load('barras.php');
        $('#cargaPastel').load('pastel.php');
    });
</script>