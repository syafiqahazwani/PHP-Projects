<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Backend')}}/assets/images/favicon.png">
    <title>Exploredia | Login Page</title>
    <!-- Custom CSS -->
    <link href="{{asset('Backend')}}/dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper">

        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <!-- Preloader - style you can find in spinners.css -->

        <!-- Login box.scss -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url({{asset('Backend')}}/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url({{asset('Backend')}}/assets/images/big/2.png);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="{{asset('Backend')}}/assets/images/big/icon.png" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Login Page</h2>
                        <p class="text-center">Enter your Username and Password</p>

                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="username">Username</label>
                                <input class="form-control" id="username" type="text" name="username" required=""
                                    placeholder="Username">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="password">Password</label>
                                <input class="form-control" id="password" type="password" name="password" required=""
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-block btn-dark">Login</button>
                        </div>
                        <div class="col-lg-12 text-center mt-5">
                            Don't have an account? <a href="{{ route('register') }}" class="text-danger">Sign Up</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

        <!-- Login box.scss -->
    </div>

    <!-- All Required js -->
    <script src="{{asset('Backend')}}/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('Backend')}}/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="{{asset('Backend')}}/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>

    <!-- This page plugin js -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>
