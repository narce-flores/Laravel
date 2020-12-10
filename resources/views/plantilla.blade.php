 <!DOCTYPE html>
<html lang="es">
	<head>
		 <meta charset="UTF-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <meta http-equiv="X-UA-Compatible" content="ie=edge">
		 <title>Elecciones</title>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		 <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body>
 		<div class="container">
			 @yield('content')
		</div>
		<script src="{{ asset('js/app.js') }}" type="text/js"></script>
	</body>
</html>
@yield('page-script')
