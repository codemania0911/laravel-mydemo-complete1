<!DOCTYPE html>
<html class="no-js">

<head>
	<title>Diet Plan</title>
	<meta charset="utf-8">
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" class="color-switcher-link">
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" class="color-switcher-link">
	<script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>

</head>

<body class="ds">

    @yield('content')

    <script src="{{ asset('assets/js/compressed.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>
    
    @yield('ExtraJavascript')

</body>

</html>