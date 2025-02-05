<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
            Kronos Soluciones TIC SAS
        </title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <!--    favicon-->
        <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon"/>
        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Icon -->
        <link href="assets/fonts/line-icons.css" rel="stylesheet" type="text/css"/>
        <!-- Slicknav -->
        <link href="assets/css/slicknav.css" rel="stylesheet" type="text/css"/>
        <!-- Owl carousel -->
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/owl.theme.css" rel="stylesheet" type="text/css"/>
        <!-- Slick Slider -->
        <link href="assets/css/slick.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/slick-theme.css" rel="stylesheet" type="text/css"/>
        <!-- Animate -->
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- Main Style -->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css"/>
        <!-- Responsive Style -->
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-147768098-1">
        </script>
        <!-- Font Awesome -->
        <script crossorigin="anonymous" src="https://kit.fontawesome.com/a97cb65071.js">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147768098-1');
        </script>
        <script type="text/javascript">
            function enviar(){
    var nombre = $('#nombre').val();
    var email = $('#email').val();
    var mensaje = $('#mensaje').val();
    var submit = $('#submit').val();

          console.log('Nombre = '+nombre);
          console.log('Email = '+email);
          console.log('mensaje = '+mensaje);
          console.log('submit = '+submit);

    if(nombre != '' && email != '' && mensaje != ''){
    $.ajax({
          url: 'correo.php',
          type: 'POST',
          data: "nombre="+nombre+"&email="+email+"&mensaje="+mensaje+"&submit="+submit,
      })
      .done(function(data) {
        /*muestra data actual*/
          console.log(data);
          console.log('Enviado?');
          console.log(data.r);
          estado('ok');
      })
      .fail(function() {
          console.log("error");
          estado('fallo');
      })
      .always(function() {
          console.log("complete");
      });
    } else {
      alert('Completa el formulario :p');
    }
}

function estado(estado){
  if(estado == 'ok'){
    alert('Mensaje enviado :D');
    $("#form_contacto")[0].reset();
    location.reload();
  } else {
    alert('Mensaje no enviado :(');
  }
}
        </script>
    </head>
    <body>
        <!-- Header Area wrapper Starts -->
        <header id="header-wrap">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#main-navbar" data-toggle="collapse" type="button">
                            <span class="navbar-toggler-icon">
                            </span>
                            <span class="icon-menu">
                            </span>
                            <span class="icon-menu">
                            </span>
                            <span class="icon-menu">
                            </span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img alt="" src="assets/img/logo.png"/>
                        </a>
                        <a class="navbar-brand" href="http://bit.ly/32gVbYP" target="_blank">
                            <img alt="" src="assets/img/whatsapp.png"/>
                        </a>
                        +57 3002406185
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="navbar-nav mr-auto w-100 justify-content-center clearfix">
                            <li class="nav-item active">
                                <a class="nav-link" href="#hero-area">
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">
                                    Servicios
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#feature">
                                    Caracter&iacutesticas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#clients">
                                    Clientes

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">
                                    Contacto
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu Start -->
                <ul class="mobile-menu navbar-nav">
                    <li>
                        <a class="page-scroll" href="#hero-area">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">
                            Servicios
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#feature">
                            Caracter&iacutesticas
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#clients">
                            Clientes
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">
                            Contacto
                        </a>
                    </li>
                </ul>
                <!-- Mobile Menu End -->
            </nav>
            <!-- Navbar End -->
            <!-- Hero Area Start -->
            <div class="hero-area-bg" id="hero-area">
                <div class="overlay">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="contents text-center">
                                <h2 class="head-title wow fadeInUp">
                                    Kronos Soluciones TIC SAS
                                </h2>
                                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                                    <a class="btn btn-common" href="#contact">
                                        Cont&aacutectenos
                                    </a>
                                </div>
                            </div>
                            <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                                <img alt="" class="img-fluid" src="assets/img/hero-1.png">
                                </img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Area End -->
        </header>
        <!-- Header Area wrapper End -->
        <!-- Services Section Start -->
        <section class="section-padding" id="services">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">
                        Servicios
                    </h2>
                </div>
                <div class="row">
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                            <div class="icon">
                                <i class="lni-code">
                                </i>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="#">
                                        Desarrollo de software
                                    </a>
                                </h3>
                                <p>
                                    Desarrollo de software a la medida, ejecutamos todas las fases de desarrollo, an&aacute;lisis, dise&ntilde;o, implementaci&oacute;n, pruebas, mantenimiento, basado en las necesidades de la organizaci&oacute;n.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
                            <div class="icon">
                                <i class="lni-mobile">
                                </i>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="#">
                                        Aplicaciones m&oacute;viles
                                    </a>
                                </h3>
                                <p>
                                    Desarrollo de aplicaciones m&oacute;viles, para plataformas ANDROID y IOS, aplicaciones nativas, aplicaciones hibridas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                            <div class="icon">
                                <i class="lni-world">
                                </i>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="#">
                                        P&aacute;ginas web
                                    </a>
                                </h3>
                                <p>
                                    P&aacute;ginas web con administradores de contenidos (Wordpress, Drupal, Joomla), p&aacute;ginas web desde cero (0), sitios web adaptables, din&aacute;micos, ligeros para una correcta navegaci&oacute;n tanto en computadores como en dispositivos m&oacute;viles.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                            <div class="icon">
                                <i class="lni-cart">
                                </i>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="#">
                                        Tiendas virtuales
                                    </a>
                                </h3>
                                <p>
                                    Tiendas virtuales con todo lo necesario para hacer crecer tu organizaci&oacute;n, sitio web con administrador de contenidos, con tecnolog&iacute;a Wordpress y Woocommerce, incluye productos, precios, inventarios, categor&iacute;as, valoraciones, y una plataforma de pagos online totalmente autom&aacute;tica (Con m&aacute;s de 30 m&eacute;todos de pago).
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
                            <div class="icon">
                                <i class="lni-search">
                                </i>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="#">
                                        Posicionamiento y SEO
                                    </a>
                                </h3>
                                <p>
                                    &iquest;C&oacute;mo aparecer en las primeras b&uacute;squedas de Google? es un conjunto de procesos, herramientas, mejoras para llegar a eso, te ofrecemos nuestro servicio enfocado en SEO para lograrlo, incluye creaci&oacute;n de redes sociales (Facebook, Instagram, Whatsapp Bussiness) , Un completo estudio del sitio web , Montaje en google (M&eacute;tricas), campa&ntilde;as de Email marketing (Envi&oacute; masivo de Email), Post para redes sociales, y todo una asesor&iacute;a para la correcta publicaci&oacute;n y divulgaci&oacute;n de tu organizaci&oacute;n, a trav&eacute;s de diversos canales digitales.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
                            <div class="icon">
                                <i class="lni-graduation">
                                </i>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="#">
                                        E-Learning
                                    </a>
                                </h3>
                                <p>
                                    La educaci&oacute;n virtual ha venido en crecimiento, por eso ofrecemos una plataforma completa en donde podr&aacute;s implementar cursos online de pago o gratuitos de la mano de la tecnolog&iacute;a MOODLE te permite obtener las siguientes caracter&iacute;sticas; Cursos online, profesores, estudiantes, sistema de calificaciones y muchas m&aacute;s.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Services item -->
                    <div class="col-md-6 col-lg-4 col-xs-12">
                        <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
                            <div class="icon">
                                <i class="lni-user">
                                </i>
                            </div>
                            <div class="services-content">
                                <h3>
                                    <a href="#">
                                        Reclutamiento y selecci&oacute;n de perfiles TI
                                    </a>
                                </h3>
                                <p>
                                    Realizamos las fases de levantamiento de perfil, selecci&oacute;n de personal, pruebas de conocimiento t&eacute;cnico, presentaci&oacute;n terna, garant&iacute;a de los procesos de selecci&oacute;n, tiempos de entrega desde 4 d&iacute;as dependiendo el perfil.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->
        <!-- Feature Section Start -->
        <div id="feature">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="text-wrapper">
                            <div>
                                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">
                                    Caracter&iacute;sticas
                                </h2>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="features-box wow fadeInLeft" data-wow-delay="0.3s">
                                            <div class="features-icon">
                                                <i class="lni-code">
                                                </i>
                                            </div>
                                            <div class="features-content">
                                                <h4>
                                                    Lenguajes de programaci&oacute;n
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        PHP
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        .NET
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        JAVA
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Node.js
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Typescript
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        JavaScript
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Android
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Swift
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Flutter
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        IONIC
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="features-box wow fadeInLeft" data-wow-delay="0.6s">
                                            <div class="features-icon">
                                                <i class="lni-database">
                                                </i>
                                            </div>
                                            <div class="features-content">
                                                <h4>
                                                    Bases de datos
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        MySql
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        PostgreSQL
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        SQL server
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        MongoDB
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Dynamo
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="features-box wow fadeInLeft" data-wow-delay="0.9s">
                                            <div class="features-icon">
                                                <i class="lni-cog">
                                                </i>
                                            </div>
                                            <div class="features-content">
                                                <h4>
                                                    Metodolog&iacute;as y frameworks
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        POO(Programaci&oacute;n Orientada a Objetos)
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Bootstrap
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Laravel
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        VUE
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Angular
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="features-box wow fadeInLeft" data-wow-delay="1.2s">
                                            <div class="features-icon">
                                                <i class="lni-leaf">
                                                </i>
                                            </div>
                                            <div class="features-content">
                                                <h4>
                                                    Otras caracteristicas
                                                </h4>
                                                <ul>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Responsive (Adaptables)
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Patrones de diseño
                                                    </li>
                                                    <li>
                                                        <i class="lni-check-mark-circle">
                                                        </i>
                                                        Arquitecturas limpias
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 padding-none">
                        <div class="feature-thumb wow fadeInRight" data-wow-delay="0.3s">
                            <img alt="" src="assets/img/feature/caracteristicas.png">
                            </img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Section End -->
        <!-- Clients Section Start -->
        <div class="section-padding" id="clients">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">
                        Clientes
                    </h2>
                </div>
                <div class="row text-align-">
                    <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="client-item-wrapper">
                            <a href="http://www.effortcolombia.com" target="_blank">
                                <img alt="" class="img-fluid" src="assets/img/clients/effortcolombiasas.png">
                                </img>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="client-item-wrapper">
                            <a href="https://www.ortopedicoswyw.com" target="_blank">
                                <img alt="" class="img-fluid" src="assets/img/clients/ortopedicoswilliamson&williamson.png">
                                </img>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="client-item-wrapper">
                            <a href="https://bulevar.com.co/marcas/carolina-endara/" target="_blank">
                                <img alt="" class="img-fluid" src="assets/img/clients/carolinaendara.png">
                                </img>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="client-item-wrapper">
                            <a href="https://www.chegolazo.com/" target="_blank">
                                <img alt="" class="img-fluid" src="assets/img/clients/chegolazo.png">
                                </img>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">&nbsp;</div>
                </div>
                <div class="row text-align-">
                    <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="client-item-wrapper">
                            <a href="https://www.mentum.group/" target="_blank">
                                <img alt="" class="img-fluid" src="assets/img/clients/mentum.png">
                                </img>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="client-item-wrapper">
                            <a href="http://www.construlok.com/" target="_blank">
                                <img alt="" class="img-fluid" src="assets/img/clients/construloksas.png">
                                </img>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="client-item-wrapper">
                            <a href="https://www.neuronabebe.com/" target="_blank">
                                <img alt="" class="img-fluid" src="assets/img/clients/neuronabebe.png">
                                </img>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="client-item-wrapper">
                            <a href="https://www.facebook.com/novaeventsoficial/" target="_blank">
                                <img alt="" class="img-fluid" src="assets/img/clients/novaevents.png">
                                </img>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clients Section End -->
        <!-- Footer Section Start -->
        <footer class="footer-area section-padding" id="contact">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                            <h3 class="footer-titel">
                                Direcci&oacute;n
                            </h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.0830381916585!2d-74.0907715855407!3d4.755591396546207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9f195f9871f1%3A0x5720dcf9ae2245c7!2sKronos%20soluciones%20TIC!5e0!3m2!1ses!2sco!4v1625673741756!5m2!1ses!2sco" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                            <h3 class="footer-titel">
                                Cont&aacute;ctenos  
                            </h3>
                            <ul>
                                <li>
                                    Direcci&oacute;n: Carrera 102 No 155 50
                                </li>
                                <li>
                                    Correo: kronossolucionestic@gmail.com
                                </li>
                                <li>
                                    Web : www.kronossolucionestic.com
                                </li>
                                <li>
                                    Whatasapp: 3002406185
                                </li>
                                <li>
                                    <i class="fab fa-youtube">
                                    </i>
                                    <a href="http://bit.ly/38MHRxP" target="_blank">
                                        KronosSolucionesTIC
                                    </a>
                                </li>
                                <li>
                                    <i class="fab fa-facebook">
                                    </i>
                                    <a href="http://bit.ly/2v5DiAb" target="_blank">
                                        KronosSolucionesTIC
                                    </a>
                                </li>
                                <li>
                                    <i class="fab fa-instagram">
                                    </i>
                                    <a href="http://bit.ly/3bT5gzJ" target="_blank">
                                        KronosSolucionesTIC
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
<!-- Footer Section End -->
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Copyright &copy; <?php echo date("Y"); ?> Kronos Soluciones TIC SAS | Desarollo por
                    <a href="http://www.kronossolucionestic.com/">
                        Kronos soluciones TIC SAS
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Go to Top Link -->
<a class="back-to-top" href="#">
    <i class="lni-arrow-up">
    </i>
</a>
<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1">
    </div>
</div>
<!-- End Preloader -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-min.js">
</script>
<script src="assets/js/popper.min.js">
</script>
<script src="assets/js/bootstrap.min.js">
</script>
<script src="assets/js/owl.carousel.min.js">
</script>
<script src="assets/js/slick.min.js">
</script>
<script src="assets/js/wow.js">
</script>
<script src="assets/js/jquery.nav.js">
</script>
<script src="assets/js/scrolling-nav.js">
</script>
<script src="assets/js/jquery.easing.min.js">
</script>
<script src="assets/js/jquery.slicknav.js">
</script>
<script src="assets/js/main.js">
</script>
