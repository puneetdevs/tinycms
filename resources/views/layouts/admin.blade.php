<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
	
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/font-awesome.css" rel="stylesheet">
	<link href="/css/theme.css" rel="stylesheet">
	<link href="/css/magnific-popup.css" rel="stylesheet">
	<link href="/css/bootstrap-datepicker3.css" rel="stylesheet">
	<link href="/css/theme-custom.css" rel="stylesheet">
	<link href="/css/default.css" rel="stylesheet">
	
	<!-- Head Libs -->
	<script src="/js/modernizr.js"></script>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.browser.mobile.js"></script>
    <!--<script src="/js/bootstrap.js"></script>-->
    <script src="/js/nanoscroller.js"></script>
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/jquery.magnific-popup.js"></script>
    <script src="/js/jquery-placeholder.js"></script>
    <script src="/js/theme.js"></script>
    <script src="/js/theme.custom.js"></script>
    <script src="/js/theme.init.js"></script>
	
</body>
</html>
