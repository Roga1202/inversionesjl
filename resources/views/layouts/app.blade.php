    <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @yield('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
    <header>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">

    <a class="navbar-brand" style="color: white;" href="/home"><i style='font-size:24px' class='fas'>&#xf0b1;</i> Inversiones JL</a>
    
    <a href="/" style="color: white;" id="salir"><i style='font-size:18px;' class='fas'>&#xf023;</i> Salir</a>
    </div>
 
    </nav>
    </header>

    <tbody>
    <div class="container-fluid text-center">    
    <div class="row content">
    <div class="col-sm-2 sidenav">
    <p><a href="/categoria/index" style="color: black;"><span class="glyphicon glyphicon-level-up"></span>Categorias</a></p>
    <p><a href="/cliente/index" style="color: black;"><span class="glyphicon glyphicon-user"></span>Clientes</a></p>
    <p><a href="/producto/index" style="color: black;"><span class="glyphicon glyphicon-baby-formula"></span>Productos</a></p>
    <p><a href="/factura/index" style="color: black;"><span class="glyphicon glyphicon-print"></span>Facturas</a></p>
    </div>

    <div class="col-sm-8 text-left">
    @yield('block')
    </div>
    <div class="col-sm-2 sidenav">
    <div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/country/ve"><span style="color:gray;">Hora actual en</span><br />Venezuela</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FCaracas" width="100%" height="90" frameborder="0" seamless></iframe> </div>
        <div class="well" id="logo1">
        <p id="logo">.</p>
        </div>
        </div>
        </div>
        </div>
        </div>
        </tbody>
        
        <footer class="container-fluid text-center">
        <p style="color: white;">Elaborado por <br><EM>Proyecto MARK</p>
        @yield('footer')
        </footer>
        @yield('script')
        </body>
        </html>