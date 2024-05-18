<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Backend')}}/assets/images/favicon.png">
    <title> @yield('title') </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('Frontend')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('Frontend')}}/css/style.css" type="text/css">
</head>

<body>

    @include('Frontend.Body.header_front')

    @yield('content')

    @include('Frontend.Body.footer_front')

    <!-- Js Plugins -->
    <script src="{{asset('Frontend')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('Frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('Frontend')}}/js/jquery.slicknav.js"></script>
    <script src="{{asset('Frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('Frontend')}}/js/main.js"></script>
</body>

</html>
