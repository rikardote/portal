<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Inventario de IP's</title>

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/toastr/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body style="background:#E2FFED">


	<header>
	    <div class="container">
	        <h1>INVENTARIO DE IP'S</h1>
	        <p>Elaborado Por: Ricardo Fuentes</p>


	    </div>


	</header>

	<div class="container">
	    <div class="row">
	        <div class="col-xl-12">
	            <article>
	            	
					@yield('content')
	            </article>
	        </div>
	    </div>
	</div>


	<footer>
	    <div class="container">
	        &copy;  {{date('Y')}} ISSSTE BAJA CALIFORNIA
	    </div>
	</footer>

	<script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	<script src="{{ asset('plugins/toastr/js/toastr.min.js') }}"></script>
	<script>
	   $('#alert').delay(2000).fadeOut(800)
	</script>
 
</body>
</html>