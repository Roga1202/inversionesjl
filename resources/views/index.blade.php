<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<title>Bienvenido a Inversiones JL</title>
		<link rel="stylesheet" href="{{ asset('assets/css/estilos.css') }}">
	</head>
	
	<body>
		<header>
			<h1 id="titulo"> Inversiones JL</h1>
		</header>
		<section>
			<div class="container-fluid text-center bg2" id="opcion">
				<h2> Bienvenidos <i class="material-icons">&#xe87e;</i> <br> Si desea anexar un pedido inicie sección dando click en el boton<h2>
				<a href="inicio.html" style="color: black;"><button type="submit" name="iniciar_seccion" value="enviar" style="color: black; border-color: black;" class="btn btn-default" style=" border:4px solid black;">Iniciar Sección</button></a>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br>
		</section>
		<footer class="container-fluid text-center">
			<p><a href="https://www.instagram.com/tomate.agencia/" style="color: white;"> Elaborado por Tomate Agencia +</p></a>
		</footer>
	</body>
</html>