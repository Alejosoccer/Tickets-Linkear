<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>INICIO | BUSONLINE.COM</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />
        <link href="{{URL::asset('img/log.ico')}}" rel="icon" />
        <link href="{{URL::asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet" />
        <link href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('lib/animate/animate.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('lib/venobox/venobox.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('css/nivo-slider-theme.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet" />
    </head>

    <body data-spy="scroll" data-target="#navbar-example">
        <div id="preloader"></div>

        <div class="modal-carrito" id="modal-carrito">
            <div class="modal-flex-carrito">
                <div class="flex-contenido" id="flex-car">
                    <div class="flex-header">
                        <span id="close_carrito"><i class="fa fa-close"></i></span>
                    </div>

                    <div class="section-headline comprar-head text-center">
                        <h2 id="flex-titulo">Mi carrito de compras</h2>
                    </div>

                    @if (Auth::guest())
                    <h4>Aún no has registrado ninguna compra</h4>
                    @else

                    <div class="table-modal">
                        <div class="item-modal">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">

                                    <div class="col-md-12 col-sm-12" id="price-n">
                                        <div class="col-md-6 col-sm-6">
                                            <span class="detail-pedido">Detalle</span>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <span class="detail-pedido">Precio</span>
                                        </div>

                                        <div class="col-md-2 col-sm-2">
                                            <span class="detail-pedido">Acción</span>
                                        </div>
                                    </div>

                                    <div id="carrito_compras">
                                        
                                    </div>

                                    <div class="col-md-12 col-sm-12" id="pago-carrito">
                                        <div class="col-md-9 col-sm-9">
                                            <span id="total-cancelar">Total a cancelar</span>
                                        </div>

                                        <div class="col-md-3 col-sm-3" id="total_pagar">
                                            
                                        </div>
                                    </div>

                                    <div class="btn-pay">
                                        <button class="form-btn" type="submit">Realizar pago</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="modal-buscar" id="modal-search">
            <div class="modal-flex">
                <div class="flex-contenido">
                    <div class="flex-header">
                        <span id="close_modal"><i class="fa fa-close"></i></span>
                    </div>

                    <div class="section-headline comprar-head text-center">
                        <h2 id="flex-titulo">Buscar un boleto</h2>
                    </div>

                    <div class="flex-filter">
                        <span id="filter-span"> <i class="fa fa-search"></i> Filtrar por cooperativa</span>
                        <span id="filter-back"> <i class="fa fa-search"></i> Filtro general</span>
                    </div>

                    <div class="flex-modal">
                        <form class="animated fadeIn" id="form-modal">
                            <div class="form-group">
                                <label for="origen"><i class="fa fa-map-marker"></i> Origen</label>
                                <select class="form-control" id="origen_viaje">
                                    <option>&nbsp;</option>
                                    <option value="Loja">Loja</option>
                                    <option value="Salinas">Salinas</option>
                                    <option value="Santa Rosa">Santa Rosa</option>
                                    <option value="Guayaquil">Guayaquil</option>
                                    <option value="Machala">Machala</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="destino"><i class="fa fa-map-marker"></i> Destino</label>
                                <select class="form-control" id="destino_viaje">
                                    <option>&nbsp;</option>
                                    <option value="Ambato">Ambato</option>
                                    <option value="Atacames">Atacames</option>
                                    <option value="Tulcán">Tulcán</option>
                                    <option value="Santo Domingo">Santo Domingo</option>
                                    <option value="Quito">Quito</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="fecha"><i class="fa fa-calendar"></i> Fecha de salida</label>
                                <input type="date" class="form-control" id="fecha_viaje" />
                            </div>

                            <button type="button" class="form-btn" onclick="verificarDisponiblidad()">Verificar disponibilidad</button>
                        </form>



                        <form class="animated fadeIn" id="form-filter">
                            <div class="form-group">
                                <label for="origen"><i class="fa fa-map-marker"></i> Cooperativa</label>
                                <select class="form-control" id="cooperativa_filtro">
                                    <option disabled selected>Selecciona una opción</option>
                                    
                                </select>
                            </div>

                            <button type="button" class="form-btn" onclick="buscarElementos()">Verificar disponibilidad</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
                                        <h1><img class="image-fluid" src="{{URL::asset('img/header/flecha.png')}}" alt="" /></h1>
                                        <h1><img class="image-nav" src="{{URL::asset('img/header/flecha-nav.png')}}" alt="" /></h1>
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
                                                <li><a class="page-scroll" id="drop" href="#about">¿Quiénes somos? </a></li>
                                                <li><a class="page-scroll" id="drop" href="#comprar">¿Cómo puedo comprar?</a></li>
                                                <li><a class="page-scroll" id="drop" href="#vendido">Lo más vendido</a></li>
                                                <li><a class="page-scroll" id="drop" href="#portfolio">Nuestras rutas</a></li>
                                                <li><a class="page-scroll" id="drop" href="#suscribe-area">Plataformas de pago</a></li>
                                                <li><a class="page-scroll" id="drop" href="#aliados">Nuestros aliados</a></li>
                                                <li><a class="page-scroll" id="drop" href="#contact">Contáctenos</a></li>
                                            </ul>
                                        </li>

                                        <li id="lista">
                                            <a class="page-scroll" href="https://play.google.com/store?hl=es" target="_blank">Nuestra APP</a>
                                        </li>

                                        <li id="lista">
                                            <a class="page-scroll" target="_blank" href="https://www.viamichelin.es/web/Mapas-Planos/Mapa_Plano-Ecuador">Gúia de turismo</a>
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

                                        <li id="lista" class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="drop" href="#">Mi perfil</a></li>
                                                <li><a id="drop" href="#">Configuración</a></li>
                                                <li><a id="drop" href="#">Mis compras</a></li>
                                                <li><a id="drop" href="#">Imprimir factura</a></li>
                                                <li><a id="item-button" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">Cerrar sesión</a>
             
             
                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                             @csrf
                                                         </form>
                                         
                                                     </li>
                                            </ul>
                                        </li>

                                        <li id="lista">
                                            <a id="item-button" class="carrito" id="shopping">
                                            <i id="icon-shop" class="fa fa-shopping-cart green"></i><sup><span class="badge badge-danger">0</span></sup>
                                            </a>
                                        </li>

                                        @if (Auth::guest())
                                        <li id="lista" class="sea">
                                            <a id="item-button" style="cursor: pointer;" href="{{url('login')}}" class="page-scroll">
                                                <span id="btn-login"> <i class="fa fa-user"></i> &nbsp;Login</span>
                                            </a>      
                                        </li>            
                                        @else
                     

                                        <li id="lista" class="sea">
                                            <a id="item-button" class="page-scroll">
                                                <span class="search_btn"> <i class="fa fa-search"></i> &nbsp;Buscar</span>
                                            </a>
                                        </li>
                                        @endif
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

        <!-- Start Slider Area -->
        <div id="home" class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="{{URL::asset('img/carousel/carousel-1.jpg')}}" alt="" title="#slider-direction-1" />
                    <img src="{{URL::asset('img/carousel/carousel-2.jpg')}}" alt="" title="#slider-direction-2" />
                    <img src="{{URL::asset('img/carousel/carousel-3.jpg')}}" alt="" title="#slider-direction-3" />
                </div>

                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction slider-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                        <h2 class="title1 margin-top">Viaja siempre seguro y cómodo</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                        <h1 class="title2">Compra tus pasaje desde cualquier parte del Ecuador</h1>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a id="ancla_ready" class="ready-btn right-btn page-scroll" href="#comprar">Ver mapa y rutas</a>
                                        <a id="ancla_ready_transparent" class="ready-btn page-scroll" href="{{url('login')}}">Comprar boleto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction slider-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content text-center">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <h2 class="title1 margin-top">Somos líderes en el mercado</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                        <h1 class="title2">Somos líderes en la industria con más de 10 años de experiencia en el mercado</h1>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a id="ancla_ready" class="ready-btn right-btn page-scroll" href="#services">Ver todos los servicios</a>
                                        <a id="ancla_ready_transparent" class="ready-btn page-scroll" href="{{url('login')}}">Comprar boleto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- direction 3 -->
                <div id="slider-direction-3" class="slider-direction slider-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <h2 class="title1 margin-top">Recorramos juntos todo el Ecuador</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                        <h1 class="title2">Juntos conoceremos cada rincón de nuestro país</h1>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a id="ancla_ready" class="ready-btn right-btn page-scroll" href="#services">Ver mapa y rutas</a>
                                        <a id="ancla_ready_transparent" class="ready-btn page-scroll" href="{{url('login')}}">Comprar boleto</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start About area -->
        <div id="about" class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>¿Quiénes somos?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img class="mt-0 animated fadeInUp" id="imagen-animated" src="{{URL::asset('img/nosotros/nosotros.jpg')}}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <a href="#">
                                    <h4 class="sec-head">Acerca de nosotros</h4>
                                </a>
                                <p>
                                    Somos líderes en la industria del turismo contamos con más de 20 años de experiencia, especialidos en brindar una atención de calidad y sobre todo en garantizar seguridad a nuestros usuarios que utlizan
                                    nuestros servicios.
                                </p>
                                <ul>
                                    <li><i class="fa fa-check"></i> Servicio 100% garantizado</li>
                                    <li><i class="fa fa-check"></i> Confianza y seguridad</li>
                                    <li><i class="fa fa-check"></i> Profesionales a tu servicio</li>
                                    <li><i class="fa fa-check"></i> 24 horas 360 dias del año</li>
                                    <li><i class="fa fa-check"></i> Rutas por todo el Ecuador</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div>
        <!-- End About area -->

        <!-- Start Service area -->
        <div id="comprar" class="comprar-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline comprar-head text-center">
                            <h2>¿Cómo comprar un boleto?</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="comprar-contents">
                        <!-- Start Left services -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="about-move">
                                <div class="comprar-details">
                                    <div class="single-comprar"> 
                                        <a class="comprar-icon wow fadeInUp" data-wow-delay="0.1s" href="#">
                                            <i class="fa fa-bus"></i>
                                        </a>
                                        <h4>Elige tu viaje</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, porro. Aliquid, eius autem molestias ipsa obcaecati molestiae fuga totam nostrum impedit ipsam quod accusamus dolorum architecto
                                            quo provident inventore eum!
                                        </p>
                                    </div>
                                </div>
                                <!-- end about-details -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="about-move">
                                <div class="comprar-details">
                                    <div class="single-comprar">
                                        <a class="comprar-icon wow fadeInUp" data-wow-delay="0.2s" href="#">
                                            <i class="fa fa-mouse-pointer"></i>
                                        </a>
                                        <h4>Selecciona tu asiento</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, porro. Aliquid, eius autem molestias ipsa obcaecati molestiae fuga totam nostrum impedit ipsam quod accusamus dolorum architecto
                                            quo provident inventore eum!
                                        </p>
                                    </div>
                                </div>
                                <!-- end about-details -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <!-- end col-md-4 -->
                            <div class="about-move">
                                <div class="comprar-details">
                                    <div class="single-comprar">
                                        <a class="comprar-icon wow fadeInUp" data-wow-delay="0.3s" href="#">
                                            <i class="fa fa-cc-visa"></i>
                                        </a>
                                        <h4>Realiza el pago</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, porro. Aliquid, eius autem molestias ipsa obcaecati molestiae fuga totam nostrum impedit ipsam quod accusamus dolorum architecto
                                            quo provident inventore eum!
                                        </p>
                                    </div>
                                </div>
                                <!-- end about-details -->
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12" id="flex-section">
                            <a id="ancla_ready_section" class="ready-btn page-scroll"href="{{url('login')}}">Comprar boleto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service area -->

        <!-- Start team Area -->
        <div id="vendido" class="our-vendido-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Lo más vendido</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="vendido-top">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-vendido-member">
                                <div class="vendido-img">
                                    <a href="#">
                                        <img src="{{URL::asset('img/mas_vendido/vendido-1.jpg')}}" alt="" />
                                    </a>
                                    <div class="vendido-social-icon text-center">
                                        <ul>
                                            <li>
                                                <a href="{{url('login')}}"> <i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vendido-content text-center">
                                    <h4>Quito a Guayaquil</h4>
                                    <p>$18 dólares | 1 pasajero</p>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-vendido-member">
                                <div class="vendido-img">
                                    <a href="#">
                                        <img src="{{URL::asset('img/mas_vendido/vendido-2.jpg')}}" alt="" />
                                    </a>
                                    <div class="vendido-social-icon text-center">
                                        <ul>
                                            <li>
                                                <a href="{{url('login')}}"> <i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vendido-content text-center">
                                    <h4>Ambato a Esmeraldas</h4>
                                    <p>$13,50 dólares | 1 pasajero</p>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-vendido-member">
                                <div class="vendido-img">
                                    <a href="#">
                                        <img src="{{URL::asset('img/mas_vendido/vendido-3.jpg')}}" alt="" />
                                    </a>
                                    <div class="vendido-social-icon text-center">
                                        <ul>
                                            <li>
                                                <a href="{{url('login')}}"> <i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vendido-content text-center">
                                    <h4>Machala a Quito</h4>
                                    <p>$15 dólares | 1 pasajero</p>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="single-vendido-member">
                                <div class="vendido-img">
                                    <a href="#">
                                        <img src="{{URL::asset('img/mas_vendido/vendido-4.jpg')}}" alt="" />
                                    </a>
                                    <div class="vendido-social-icon text-center">
                                        <ul>
                                            <li>
                                                <a href="{{url('login')}}"> <i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="vendido-content text-center">
                                    <h4>Durán a Pujilí</h4>
                                    <p>$14,80 dólares | 1 pasajero</p>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Area -->

        <!-- Start portfolio Area -->
        <div id="portfolio" class="portfolio-area area-padding fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Nuestras rutas</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Portfolio -page -->
                    <div class="awesome-project-1 fix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="awesome-menu">
                                <ul class="project-menu">
                                    <li>
                                        <a href="#" class="active" data-filter="*">Ver todas</a>
                                    </li>

                                    <li>
                                        <a href="#" data-filter=".costa">Costa</a>
                                    </li>
                                    <li>
                                        <a href="#" data-filter=".sierra">Sierra</a>
                                    </li>
                                    <li>
                                        <a href="#" data-filter=".oriente">Oriente</a>
                                    </li>
                                    <li>
                                        <a href="#" data-filter=".galapagos">Región Insular</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="awesome-project-content">
                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 oriente costa">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img src="{{URL::asset('img/portfolio/maps.jpg')}}" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery" href="{{url('login')}}">
                                                <h4>Guayaquil a Loja</h4>
                                                <span><i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 costa">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img src="{{URL::asset('img/portfolio/maps-1.jpg')}}" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery" href="{{url('login')}}">
                                                <h4>Huaquillas a Santo Domingo</h4>
                                                <span><i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 sierra">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img src="{{URL::asset('img/portfolio/maps-2.jpg')}}" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery" href="{{url('login')}}">
                                                <h4>Quito a Cuenca</h4>
                                                <span><i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 sierra">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img src="{{URL::asset('img/portfolio/maps-3.jpg')}}" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery" href="{{url('login')}}">
                                                <h4>Ambato a Cuenca</h4>
                                                <span><i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 oriente">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img src="{{URL::asset('img/portfolio/maps-4.jpg')}}" alt="" /></a>
                                    <div class="add-actions text-center text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery" href="{{url('login')}}">
                                                <h4>Morona Santiago a Napo</h4>
                                                <span><i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 oriente">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img src="{{URL::asset('img/portfolio/maps-5.jpg')}}" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery" href="{{url('login')}}">
                                                <h4>Puyo a Sucumbíos</h4>
                                                <span><i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->

                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 galapagos">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img src="{{URL::asset('img/portfolio/maps-6.jpg')}}" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="venobox" data-gall="myGallery" href="{{url('login')}}">
                                                <h4>Manta a Galápagos</h4>
                                                <span><i id="logo-social" class="fa fa-shopping-cart"></i> Comprar ahora</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- awesome-portfolio end -->

        <!-- Start Suscrive Area -->
        <div class="suscribe-area" id="suscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                        <div class="section-headline text-center">
                            <h2 id="pago-title">Plataformas de pago</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Suscrive Area -->

        <!-- our-skill-area start -->
        <div class="our-skill-area fix hidden-sm">
            <div class="test-overly"></div>
            <div class="skill-bg area-padding-2">
                <div class="container">
                    <!-- section-heading end -->
                    <div class="row">
                        <div class="skill-text">
                            <!-- single-skill start -->
                            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                <img class="wow fadeInUp" data-wow-delay="0.1s" id="pago-img" src="{{URL::asset('img/pagos/efectivo.jpg')}}" />
                            </div>
                            <!-- single-skill end -->
                            <!-- single-skill start -->
                            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                <img class="wow fadeInUp" data-wow-delay="0.2s" id="pago-img" src="{{URL::asset('img/pagos/produbanco.png')}}" />
                            </div>
                            <!-- single-skill end -->
                            <!-- single-skill start -->
                            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                <img class="wow fadeInUp" data-wow-delay="0.3s" id="pago-img" src="{{URL::asset('img/pagos/guayas.png')}}" />
                            </div>
                            <!-- single-skill end -->
                            <!-- single-skill start -->
                            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                                <img class="wow fadeInUp" data-wow-delay="0.4s" id="pago-img" src="{{URL::asset('img/pagos/paypal.png')}}" />
                            </div>
                            <!-- single-skill end -->

                            <!-- single-skill start -->
                            <div class="col-xs-12 col-sm-3 col-md-3 text-center" id="paypal">
                                <img class="wow fadeInUp" data-wow-delay="0.5s" id="pago-img" src="{{URL::asset('img/pagos/solidario.png')}}" />
                            </div>
                            <!-- single-skill end -->

                            <!-- single-skill start -->
                            <div class="col-xs-12 col-sm-3 col-md-3 text-center" id="paypal">
                                <img class="wow fadeInUp" data-wow-delay="0.6s" id="pago-img" src="{{URL::asset('img/pagos/western.png')}}" />
                            </div>
                            <!-- single-skill end -->

                            <!-- single-skill start -->
                            <div class="col-xs-12 col-sm-3 col-md-3 text-center" id="paypal">
                                <img class="wow fadeInUp" data-wow-delay="0.7s" id="pago-img" src="{{URL::asset('img/pagos/visa.png')}}" />
                            </div>
                            <!-- single-skill end -->

                            <!-- single-skill start -->
                            <div class="col-xs-12 col-sm-3 col-md-3 text-center" id="paypal">
                                <img class="wow fadeInUp" data-wow-delay="0.8s" id="pago-img" src="{{URL::asset('img/pagos/internacional.png')}}" />
                            </div>
                            <!-- single-skill end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-skill-area end -->

        <!-- Start Testimonials -->
        <div class="testimonials-area" id="aliados">
            <div class="testi-inner area-padding">
                <div class="testi-overly"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2 id="testimonials-title">Nuestros alíados</h2>
                            </div>

                            <!-- Start testimonials Start -->
                            <div class="testimonial-content text-center">
                                <!-- start testimonial carousel -->
                                <div class="testimonial-carousel">
                                    <div class="single-testi">
                                        <div class="img-container">
                                            <img id="aliados-img" src="{{URL::asset('img/aliados/loja.png')}}" alt="" />
                                        </div>

                                        <div class="testi-text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br />
                                                consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                                            </p>
                                            <h6>Cooperativa Loja</h6>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="img-container">
                                            <img id="aliados-img" src="{{URL::asset('img/aliados/panamericana.png')}}" alt="" />
                                        </div>
                                        <div class="testi-text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br />
                                                consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                                            </p>
                                            <h6>Cooperativa Panamericana</h6>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="img-container">
                                            <img id="aliados-img" src="{{URL::asset('img/aliados/rutas.jpg')}}" alt="" />
                                        </div>
                                        <div class="testi-text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue.<br />
                                                consectetur adipiscing elit. Sed pulvinar luctus est eget congue.
                                            </p>
                                            <h6>Cooperativa Rutas Orenses</h6>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                </div>
                            </div>
                            <!-- End testimonials end -->
                        </div>
                        <!-- End Right Feature -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonials -->

        <!-- Start contact Area -->
        <div id="contact" class="contact-area">
            <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Contáctenos</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-mobile"></i>
                                    <p>
                                        Celular: 0982620548 - 0994546026<br />
                                        <span>Lunes a Domingo 24:H00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-envelope-o"></i>
                                    <p>
                                        Email: flechabus2020@gmail.com<br />
                                        <span>Sitio web: www.flechabus.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        Estamos ubicados en las calles<br />
                                        <span>Av.Mariscal Sucre y Av. Matilde Álvarez</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start Google Map -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Start Map -->
                            
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15959.076647656495!2d-78.5547172!3d-0.28442025000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sec!4v1601997065177!5m2!1ses-419!2sec"
                                width="100%"
                                height="380"
                                frameborder="0"
                                style="border: 0;"
                                allowfullscreen
                            ></iframe>
                            <!-- End Map -->
                        </div>
                        <!-- End Google Map -->

                        <!-- Start  contact -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form contact-form">
                                <div id="sendmessage">Gracias por comunicarte con nosotros</div>
                                <div id="errormessage"></div>
                                <form action="" method="post" role="form" class="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombres y apelliods" data-rule="minlen:4" data-msg="Ingeese sus nombres y apellidos" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Dirección de correo electrónico" data-rule="email" data-msg="Por favor ingrese un correo válido" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Celular" data-rule="minlen:4" data-msg="Por favor ingrese un número de celular válidot" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escriba su mensaje" placeholder="Escriba su mensaje"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                                </form>
                            </div>
                        </div>
                        <!-- End Left contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->

        <!-- Start Footer bottom Area -->
        <footer id="footer">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                        <h1><img class="image-fluid-footer" src="{{URL::asset('img/header/flecha.png')}}" alt="" /></h1>
                                    </div>

                                    <p>Síguenos a través de nuestras redes sociales.</p>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Dirección y contacto</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                    <div class="footer-contacts">
                                        <p><span>Cel.:</span> 0982650548 - 0994546026</p>
                                        <p><span>Email:</span> flechabus2020@gmail.com</p>
                                        <p><span>Horario:</span> Lunes a Domingo todas las 24:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Menú de navegación</h4>
                                    <div class="flicker-img">
                                        <p><a href="">Descarga nuestra APP</a></p>
                                        <p><a href="">Guía para el turista</a></p>
                                        <p><a href="">Mapas y rutas</a></p>
                                        <p><a href="">Revisa nuestras ofertas</a></p>
                                        <p><a href="">Poíltica y privacidad</a></p>
                                        <p><a href="">Términos y condiciones</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <script src="{{URL::asset('lib/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{URL::asset('lib/venobox/venobox.min.js')}}"></script>
        <script src="{{URL::asset('lib/knob/jquery.knob.js')}}"></script>
        <script src="{{URL::asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{URL::asset('lib/parallax/parallax.js')}}"></script>
        <script src="{{URL::asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{URL::asset('lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('lib/appear/jquery.appear.js')}}"></script>
        <script src="{{URL::asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{URL::asset('js/main.js')}}"></script>
        <script src="{{URL::asset('js/array.js')}}"></script>
        <script src="{{URL::asset('js/carrito.js')}}"></script>
        <script src="{{URL::asset('js/cooperativas.js')}}"></script>

       
    </body>
</html>
