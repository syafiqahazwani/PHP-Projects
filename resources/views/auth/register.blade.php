
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('AdminLTE-master')}}/dist/img/logo net.png">
  <title>Register</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('AdminLTE-master')}}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{asset('AdminLTE-master')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('AdminLTE-master')}}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Register WORLD</b>@404#</a>
    </div>
    <div class="card-body">
    <div class="text-center"><img src="{{asset('AdminLTE-master')}}/dist/img/hogwarts-logo.png" alt="AdminLTE Logo" width="150" height="150" class="center" class="brand-image img-circle elevation-3" style="opacity: .8"></div>
      <p class="login-box-msg">The World Of Fun</p>

      <form action="{{route('register-user')}}" method="post">
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf


        <span class="text-danger">@error('name') {{$message}} @enderror</span>
        <div class="input-group mb-3"> 
          <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <span class="text-danger">@error('email') {{$message}} @enderror</span>
        <div class="input-group mb-3">
          <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <span class="text-danger">@error('password') {{$message}} @enderror</span>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Hello <a href="">then!!!</a>
              </label>
            </div>
          </div>
        </div>
    

      <div class="social-auth-links text-center">
        <input type="submit" class="btn btn-block btn-primary">
      </div>

      <div class="form-group text-center">
            <a href="/" class="btn btn-block btn-danger">Go back
          </div></a>

    </div>
  </div>
</div>
</form>

<script src="{{asset('AdminLTE-master')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('AdminLTE-master')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('AdminLTE-master')}}/dist/js/adminlte.min.js"></script>
</body>
</html>