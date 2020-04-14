<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>DRNICyB</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../librerias/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../librerias/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/logo2.png" type="image/x-icon">
  <link rel="icon" href="../img/logo2.png" type="image/x-icon">
  
  <!-- LIBRERIAS PROPIAS -->
  <link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../librerias/jquery-ui-1.12.1/jquery-ui.css">   
  <link rel="stylesheet" href="../librerias/fontawesome/css/all.css">
  <link rel="stylesheet" href="../librerias/datatable/dataTables.bootstrap4.min.css">

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="../img/uto1.png" alt="ProOnliPc">
        </div>

        <h1>Universidad Técnica de Oruro</h1>
        <h2>Dirección de Relaciones <span class="rotating">Nacionales Internacionales Convenios y Becas</span></h2>
      </div>
    </div>
  </section>

  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="../img/uto1.png" alt="" title="" /></img></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="../index.html">Inicio</a></li>
          <li><a href="../index.html">Sobre Nosotros</a></li>
          <li><a href="../index.html">Autoridades</a></li>
          <li><a href="../index.html">Publicaciones</a></li>          
          <li class="menu-has-children"><a href="">Convenios</a>
            <ul>
              <li><a href="conveniosNacionales.php">Convenios Nacionales</a></li>              
              <li><a href="conveniosInternacionales.php">Convenios Internacionales</a></li>
            </ul>
          </li>
          <li><a href="../index.html">Pasatias y Tésis</a></li>
          <li><a href="#contact">Contactos</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->
  <!--==========================
  Convenios Section
  ============================-->
  
  <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            <h1 class="display-4">Convenios Nacionales</h1>
            
            <hr>
            <div id="tablaGestorArchivos"></div>
        </div>
    </div>
    
    <!-- MODAL para mostrar cuando se hace click en el boto visualizar -->
    <div class="modal fade" id="visualizarArchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Previsualización</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="archivoObtenido"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
    </div>
  

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contáctanos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">¡Si tienes preguntas, o deseas que nos comuniquemos contigo, envía un correo electrónico <br> o ponte en contacto por medio de los telefonos proporcionados en la parte inferior.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Caro entre Velasco y Galvarro y Av. 6 de Agosto<br>Edif. UTO 5to piso</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>onarcec@hotmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+591 2 52 82918</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Correo" data-rule="email" data-msg="Ingresa un Correo Valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Map Section-->
  <section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d948.8088569204996!2d-67.10830144438918!3d-17.967780565070886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sbo!4v1586365771405!5m2!1ses-419!2sbo"></iframe>
    <br />
    <small>
      <a href="www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d948.8088569204996!2d-67.10830144438918!3d-17.967780565070886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sbo!4v1586365771405!5m2!1ses-419!2sbo"></a>
    </small>
  </section>
  
  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>DavidCarl</strong>. All Rights Reserved
          </div>
          <div class="credits">
        
            By <a href="">DRNICyB</a>
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="../librerias/jquery/jquery.min.js"></script>
  <script src="../librerias/bootstrap4/popper.min.js"></script>
  <script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="../librerias/superfish/hoverIntent.js"></script>
  <script src="../librerias/superfish/superfish.min.js"></script>
  <script src="../librerias/morphext/morphext.min.js"></script>
  <script src="../librerias/wow/wow.min.js"></script>
  <script src="../librerias/stickyjs/sticky.js"></script>
  <script src="../librerias/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="../js/custom.js"></script>

  <script src="../contactform/contactform.js"></script>

  <!-- Template PROPIAS Specisifc Custom Javascript File -->
  <script src="../librerias/jquery-3.4.1.min.js"></script>
  
  <script src="../librerias/bootstrap4/bootstrap.min.js"></script>
  <script src="../librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
  <script src="../librerias/sweetalert.min.js"></script>

    
  <script src="../librerias/datatable/jquery.dataTables.min.js"></script>
  <script src="../librerias/datatable/dataTables.bootstrap4.min.js"></script>

  <script src="../js/gestor.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tablaGestorArchivos').load("gestor/tablaGestorConveniosNacionales.php");
            $('#categoriasLoad').load("categorias/selectCategoria.php");

            //Fucion para agregar el archivo PDF
            $('#btnGuardarArchivos').click(function(){
                agregarArchivosGestor();                
            });
        });        
    </script>


</body>

</html>
