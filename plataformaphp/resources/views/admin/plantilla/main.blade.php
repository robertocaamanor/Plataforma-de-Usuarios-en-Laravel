<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Negocios La Roberta</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<style>
	body {
		font-family: 'Lato', Arial, Sans-serif;
	}

	h1 {
		font-weight: 300;
	}
	</style>
</head>
<body>
	@include('admin.plantilla.partials.nav')

	<section class="container">
		@include('flash::message')
		@yield('content')		
	</section>

	<footer>
		
	</footer>
<script src="{{ asset('plugins/jquery/js/jquery-2.2.1.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>