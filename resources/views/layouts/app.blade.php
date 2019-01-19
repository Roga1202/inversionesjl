<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        @yield('head')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#">Logo</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/home">Inicio</a></li>
                            <li><a href="productos.html">Productos</a></li>
                            <li><a href="clientes.html">Clientes</a></li>
                            <li><a href="contacto.html">Contacto</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sección</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <tbody><div class="container-fluid text-center">    
                <div class="row content">
                    <div class="col-sm-2 sidenav">
                        <p><a href="/categoria/crear" style="color: black;"><i class="material-icons" style="color:black">add_shopping_cart</i> Agregar Categoria</a></p>
                        <p><a href="/cliente/crear" style="color: black;"><i class="material-icons" style="color:black">supervisor_account</i> Agregar cliente </a></p>
                        <p><a href="addproducto.html" style="color: black;"><i class="material-icons" style="color:black">redeem</i> Agregar producto</a></p>
                        <p><a href="addproducto.html" style="color: black;"><i class="material-icons" style="color:black">assignment</i> Hacer Factura</a></p>
                    </div>
                    <div class="col-sm-8 text-left">
                        @yield('block')
                    </div>
                    <div class="col-sm-2 sidenav">
                        <div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/country/ve"><span style="color:gray;">Hora actual en</span><br />Venezuela</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FCaracas" width="100%" height="90" frameborder="0" seamless></iframe> </div>
                            <div class="well">
                                <p>otra cosa que se pueda añadir si es necesario</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </tbody>

        <footer class="container-fluid text-center">
            <p> <a href="https://www.instagram.com/tomate.agencia/" style="color: white;"> Elaborado por Tomate Agencia +</p></a>
            @yield('footer')
        </footer>
        @yield('footer')
    </body>
</html>