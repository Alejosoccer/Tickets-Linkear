<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>ADMINISTRACIÓN | BUSONLINE.COM</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />
        <link href="img/log.ico" rel="icon" />
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet" />
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet" />
        <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet" />
        <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet" />
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="lib/animate/animate.min.css" rel="stylesheet" />
        <link href="lib/venobox/venobox.css" rel="stylesheet" />
        <link href="css/nivo-slider-theme.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
    </head>

    <body data-spy="scroll" data-target="#navbar-example">
        <div id="preloader"></div>

        @if(Session::has('success'))

        <div class="alerta-b wow animated fadeInRight">
        <div class="alert alert-success" role="alert">
            <span><i id="icono_alert" class="fa fa-check mr-2"></i> {{ Session::get('success') }}</span>
        </div>
        </div>

        @endif
        
        <header>
            <!-- header-area start -->
            <div id="sticker" class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <!-- Navigation -->
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Menú de navegación</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!-- Brand -->
                                    <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                        <h1><img class="image-fluid" src="img/header/flecha.png" alt="" /></h1>
                                        <h1><img class="image-nav" src="img/header/flecha-nav.png" alt="" /></h1>
                                        <!-- Uncomment below if you prefer to use an image logo -->
                                        <!-- <img src="img/logo.png" alt="" title=""> -->
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li id="lista" class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="page-scroll" id="drop" href="{{url('/')}}">Volver a inicio </a></li>
                                                <li><a class="page-scroll" id="drop" href="{{url('/#about')}}">¿Quiénes somos? </a></li>
                                                <li><a class="page-scroll" id="drop" href="{{url('/#comprar')}}">¿Cómo puedo comprar?</a></li>
                                                <li><a class="page-scroll" id="drop" href="{{url('/#vendido')}}">Lo más vendido</a></li>
                                                <li><a class="page-scroll" id="drop" href="{{url('/#portfolio')}}">Nuestras rutas</a></li>
                                                <li><a class="page-scroll" id="drop" href="{{url('/#suscribe-area')}}">Plataformas de pago</a></li>
                                                <li><a class="page-scroll" id="drop" href="{{url('/#aliados')}}">Nuestros aliados</a></li>
                                                <li><a class="page-scroll" id="drop" href="{{url('/#contact')}}">Contáctenos</a></li>
                                            </ul>
                                        </li>

                                        <li id="lista">
                                            <a class="page-scroll" href="https://play.google.com/store?hl=es" target="_blank">Nuestra APP</a>
                                        </li>

                                        <li id="lista">
                                            <a class="page-scroll" href="https://www.viamichelin.es/web/Mapas-Planos/Mapa_Plano-Ecuador">Gúia de turismo</a>
                                        </li>


                                        <li id="lista" class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Te ayudamos<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="drop" href="#">Mapas y rutas</a></li>
                                                <li><a id="drop" href="#">Preguntas frecuentes</a></li>
                                                <li><a id="drop" href="#">Política y privacidad</a></li>
                                                <li><a id="drop" href="#">Terminos y condiciones</a></li>
                                            </ul>
                                        </li>

                                        <li id="lista">
                                            <a class="page-scroll" href="#team">Promociones</a>
                                        </li>

                                        <li id="lista" class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="drop" href="#">Mi perfil</a></li>
                                                <li><a id="drop" href="#">Configuración</a></li>
                                                <li><a id="drop" href="#">Mis compras</a></li>
                                                <li><a id="drop" href="#">Imprimir factura</a></li>
                                            </ul>
                                        </li>

                                        <li id="lista">
                                            <a id="item-button" class="page-scroll carrito" id="shopping">
                                                <i id="icon-shop" class="fa fa-shopping-cart green"></i><sup><span id="spanNumero" class="badge badge-danger"></span></sup>
                                            </a>
                                        </li>

                                        <li id="lista">
                                            <a id="item-button" class="page-scroll">
                                                <span class="search_btn"> <i class="fa fa-search"></i> &nbsp;Buscar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- navbar-collapse -->
                            </nav>
                            <!-- END: Navigation -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
        </header>
        <!-- header end -->

        @yield('contenido-dinamico')
        
        <div class="mt-2">

        </div>
       
        <!-- Start Footer bottom Area -->
        <footer id="footer">
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright text-center">
                                <p>&copy; Copyright 2020 Todos los derechos reservados de <strong>Flechabus</strong></p>
                            </div>
                            <div class="credits">
                                <a href="#">Ecuador - Quito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/venobox/venobox.min.js"></script>
        <script src="lib/knob/jquery.knob.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/parallax/parallax.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="lib/appear/jquery.appear.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="js/main.js"></script>

        <script>

        $(document).ready(function () {

            $("#sticker").addClass("stick");
                $("#icon-shop").addClass("white-icon");
                var s = $("#sticker");
                var pos = s.position();

                $(window).on("scroll", function () {
                    var windowpos = $(window).scrollTop() > 0;
                    if (windowpos > pos.top) {
                        s.addClass("stick");

                        $("#icon-shop").addClass("white-icon");
                    } else {
                        s.addClass("stick");
                        $("#icon-shop").addClass("white-icon");
                    }
                });

        });

        </script>
        <script src="js/carrito.js"></script>
    </body>
</html>
