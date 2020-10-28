
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>FILTRAR BÚSQUEDA | FLECHA BUS</title>
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
        
        <div class="modal-carrito" id="modal-carrito">
            <div class="modal-flex-carrito">
                <div class="flex-contenido" id="flex-car">
                    <div class="flex-header">
                        <span id="close_carrito"><i class="fa fa-close"></i></span>
                    </div>

                    <div class="section-headline comprar-head text-center">
                        <h2 id="flex-titulo">Mi carrito de compras</h2>
                    </div>

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
                                        @foreach ($ticket as $item)
                                       
                                        <div class="detalle-pedido col-md-12 col-sm-12" >
                                            <hr class="division-carrito" />
                                            <div class="col-md-6 col-sm-6">
                                            <p> Boletos N°{{$item->bus}} asiento N° {{$item->asiento}} desde {{$item->origen}} a {{$item->destino}} - {{$item->empresa}}</p>
                                            </div>
                
                                            <div class="col-md-4 col-sm-4">
                                                <p>{{$item->precio}} dólares</p>
                                            </div>
                
                                            <div class="col-md-2 col-sm-2">
                                                <p class="text-center">

                                                    <form action="{{url('delete/boleto/'.$item->asiento.'/'.$item->empresa)}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger-outline" type="submit"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                
                                                </p>
                                            </div>

                                        </div>
                                        @endforeach    
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
                        <form class="animated fadeIn" action=" " id="form-modal">
                            <div class="form-group">
                                <label for="origen"><i class="fa fa-map-marker"></i> Origen</label>
                                <select class="form-control" id="origen">
                                    <option disabled>Selecciona una opción</option>
                                    @foreach ($cooperatives as $item)
                                    <option value="{{$item->origen}}">{{$item->origen}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="destino"><i class="fa fa-map-marker"></i> Destino</label>
                                <select class="form-control" id="destino">
                                    <option disabled>Selecciona una opción</option>
                                    @foreach ($cooperatives as $item)
                                    <option value="{{$item->destino}}">{{$item->destino}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="fecha"><i class="fa fa-calendar"></i> Fecha de salida</label>
                                <input type="date" class="form-control" />
                            </div>

                            <button class="form-btn" type="submit">Verificar disponibilidad</button>
                        </form>

                        <form class="animated fadeIn" action=" " id="form-filter">
                            <div class="form-group">
                                <label for="origen"><i class="fa fa-map-marker"></i> Cooperativa</label>
                                <select class="form-control" id="cooperativa">
                                    <option disabled>Selecciona una opción</option>
                                    @foreach ($cooperatives as $item)
                                    <option value="{{$item->empresa}}">{{$item->empresa}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="fecha"><i class="fa fa-calendar"></i> Fecha de salida</label>
                                <input type="date" class="form-control" />
                            </div>

                            <button class="form-btn" type="submit">Verificar disponibilidad</button>
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
                                                <li><a id="drop" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">Cerrar sesión</a>
             
             
                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                             @csrf
                                                         </form>
                                         
                                                     </li>
                                            </ul>
                                        </li>

                                        <li id="lista">
                                            <a id="item-button" class="page-scroll carrito" id="shopping">
                                                <i id="icon-shop" class="fa fa-shopping-cart green"></i><sup><span class="badge badge-danger">{{$contador}}</span></sup>
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


        
        <!-- Start About area -->
        <div id="about" class="about-area area-padding compra_id">
            <div class="container">
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <button type="button" id="btn-default"><span id="number">1</span>&nbsp; SELECIONA LOS BOLETOS A COMPRAR</button>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <button type="button" id="btn-default" disabled><span id="number">2</span>&nbsp; SELECCIONA TUS ASIENTOS &nbsp;&nbsp;</button>
                        </div>

                        <div class="col-md-4 col-sm-43 col-xs-12">
                            <button type="button" id="btn-default" disabled><span id="number">3</span>&nbsp; REALIZA EL PAGO CORRESPONDIENTE</button>
                        </div>
                    </div>

                   

                    <div class="col-md-12 col-sm-12 col-xs-12" id="table_responsive">
                        <div class="section-headline text-center">
                            <h2 id="table_title">Resultado de la búsqueda</h2>
                        </div>

                        <div class="table-responsive" style="font-size: 16px;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Empresa</th>
                                        <th class="text-center" scope="col">Nombre</th>
                                        <th class="text-center" scope="col">Origen</th>
                                        <th class="text-center" scope="col">Destino</th>
                                        <th class="text-center" scope="col">Tipo</th>
                                        <th class="text-center" scope="col">Turno</th>
                                        <th class="text-center" scope="col">Fecha</th>
                                        <th class="text-center" scope="col">Hora</th>
                                        <th class="text-center" scope="col">Precio</th>
                                        <th class="text-center" scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bodyt" id="tbofy">
                                    @foreach ($query as $item)
                                    <tr>
                                        <td class="text-center"><img width="80" src="https://i.pinimg.com/236x/b6/40/97/b6409714aa3a1edc1b28b038036c615d--project-board.jpg" alt=""></td>
                                    <td class="text-center">{{$item->empresa}}</td>
                                        <td class="text-center">{{$item->origen}}</td>
                                        <td class="text-center">{{$item->destino}}</td>
                                        <td class="text-center">{{$item->tipo}}</td>
                                        <td class="text-center">{{$item->turno}}</td>
                                        <td class="text-center">{{$item->fecha}}</td>
                                        <td class="text-center">{{$item->hora}}</td>
                                        <td class="text-center">{{$item->precio}}</td>
                                        @if($item->estado === 'Y' )
                                            <td class="text-center">
                                                <a class="btn btn-info" href="{{url('select/'.$item->id.'/'.$item->origen.'/'.$item->destino .'/'.$item->fecha)}}"><i class="fa fa-mouse-pointer"></i> Seleccionar</a>
                                            </td>
                                        @else

                                            <td class="text-center">
                                                <a class="btn btn-info" href="#" disabled><i class="fa fa-mouse-pointer"></i> Seleccionar</a>
                                            </td>
                                        @endif
                                        
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About area -->

        <section>
            <div class="container">
                <h1>&nbsp;</h1>
            </div>
        </section>

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

    <a href="{{url('home')}}" class="back-to-top"><i class="fa fa-undo"></i></a>

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

            var sites = {!! json_encode($ticket) !!};

            var sumar = 0;
            for(let item of sites) {

                var precio = parseInt(item.precio);
                sumar+=precio;
               $('#total-valor').html('$ ' + sumar);

            } 

        </script>
        <script src="{{URL::asset('js/carrito.js')}}"></script>
    </body>
</html>
