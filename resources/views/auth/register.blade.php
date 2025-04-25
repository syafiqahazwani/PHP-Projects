<!DOCTYPE html>
<html lang="en">

<head>
	<title>SignUp</title>

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

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="{{asset('Backend')}}/dist/assets/images/signup.png" alt="" class="img-fluid mb-4">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

						<div class="form-group mb-3">
							<input type="text" class="form-control" id="name" name="name" placeholder="Name">
						</div>
						<div class="form-group mb-3">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" id="password" name="password" required autocomplete="new-password"
                            placeholder="Password">
						</div>
                        <div class="form-group mb-4">
							<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"
                            placeholder="Password Confirmation">
						</div>

					<div class="form-group mb-3">
						<button type="submit" class="btn btn-danger btn-block mb-4">
						<i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Sign Up&nbsp;
                        </button>
                      </div>

                    <div class="form-group mb-3">
                        <a href="{{ route('login') }}" class="btn btn-outline-danger btn-block mb-4">
						<i class="fas fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Log In
                        </a>
                     </div>

                        <form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{asset('Backend')}}/dist/assets/js/plugins/bootstrap.min.js"></script>
<script src="{{asset('Backend')}}/dist/assets/js/ripple.js"></script>
<script src="{{asset('Backend')}}/dist/assets/js/pcoded.min.js"></script>

    </body>  
</html>
