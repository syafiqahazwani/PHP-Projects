<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('Backend')}}/dist/assets/images/digitama.png" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('Backend')}}/dist/assets/css/style.css">

</head>
<body class="">
	<!-- [ Pre-loader ] -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] -->
	@include('Backend_Studio.Body_Back.sidebar')

	@include('Backend_Studio.Body_Back.header')


    @yield('user')

    <!-- Required Js -->
    <script src="{{asset('Backend')}}/assets/js/vendor-all.min.js"></script>
    <script src="{{asset('Backend')}}/dist/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset('Backend')}}/dist/assets/js/ripple.js"></script>
    <script src="{{asset('Backend')}}/dist/assets/js/pcoded.min.js"></script>

    </body> 
</html>
