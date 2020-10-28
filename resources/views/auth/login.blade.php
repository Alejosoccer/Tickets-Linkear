<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link href="img/log.ico" rel="icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LOGIN | VALIDACIÓN DE CREDENCIALES DE ACCESO</title>
        <link rel="stylesheet" href="css/login.css" />
    </head>
    <body>
        <div class="body">
            <div id="preloader"></div>
            <div class="body-after">
                <header>
                    <img id="imagen-logo" src="img/header/flecha-nav.png" alt="" />
                </header>

                <div class="form">
                    <ul class="tab-group">
                        <li class="tab active"><a href="{{url('login')}}">Iniciar sesión</a></li>
                        <li class="tab"><a href="{{url('register')}}">Crear cuenta</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="signup">
                            <h2 id="flex-titulo">Ingreso de credenciales</h2>
                            
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            
                            <div class="field-wrap">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingrese email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red; text-align:left">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                
                            <div class="field-wrap">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red; text-align:left">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                                <button type="submit" id="button_submit" class="button button-block">Iniciar sesión</button>
                                
                            </form>
                        </div>

                        <div id="login"></div>
                    </div>
                    <!-- tab-content -->
                </div>
                <!-- /form -->
            </div>
        </div>
        <script src="{{URL::asset('lib/jquery/jquery.min.js')}}"></script>
        <script src="js/login.js"></script>
    </body>
</html>
