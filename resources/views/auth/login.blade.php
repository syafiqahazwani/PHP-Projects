
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('AdminLTE-master')}}/dist/img/logo net.png">
  <title>Login</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('AdminLTE-master')}}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{asset('AdminLTE-master')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('AdminLTE-master')}}/dist/css/adminlte.min.css">
  <link rel="icon" type="image/png" img src="{{asset('AdminLTE-master')}}/dist/img/hogwarts-logo.webp">

</head>
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <div class="text-center"><strong>LOGIN WORLD</strong>@404#</a></div>   
  </div>

  <div class="card">   
    <div class="card-body login-card-body">
      
        <div class="text-center"><img src="{{asset('AdminLTE-master')}}/dist/img/hogwarts-logo.png" alt="AdminLTE Logo" width="150" height="150" class="center" class="brand-image img-circle elevation-3" style="opacity: .8"></div>

    <p class="login-box-msg">YOU KNOW YOURSELF</p>

      <form action="{{route('login-user')}}" method="post">
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf

        <span class="text-danger">@error('name') {{$message}} @enderror</span>
        <div class="input-group mb-3">
          <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="USERNAME">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <span class="text-danger">@error('password') {{$message}} @enderror</span>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="PASSWORD">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="form-group">
        <div class="checkbox">
          <input type="checkbox" name="remember" id="remember">
          <label class="form-check-label" for="remember">
            <b>Remember Me Please</b>
          </label>
        </div>
        </div>
        
          <div class="form-group text-center">
             <input type="Submit" class="btn btn-primary btn-block">
          </div></a>

          <div class="form-group text-center">
            <a href="register" class="btn btn-block btn-danger">Register Here!!!
          </div></a>
          
        </div>
      </form>
    </div>
  </div>
</div>

<script src="{{asset('AdminLTE-master')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('AdminLTE-master')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('AdminLTE-master')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
