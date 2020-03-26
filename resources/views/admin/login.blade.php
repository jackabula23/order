<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>來點餐</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('resources/assets/fontawesome-free/css/all.min.css')}} ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/icheck-bootstrap.min.css')}} ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('resources/assets/css/adminlte.min.css')}} ">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  {{-- 標題列旁邊的小圖示 --}}
  <link rel="icon" href="{{asset('resources/assets/images/fork.png')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">歡迎登入</p>

      <form action="" method="post">
      {{ csrf_field() }}
      @if (session('msg'))
        <p class="login-box-msg"> {{session('msg')}} </p>
      @endif
        <div class="input-group mb-3">
          <input type="text" name="user_name" class="form-control" placeholder="請輸入帳號">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="passwd" class="form-control" placeholder="請輸入密碼">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
		</div>
        <div class="input-group mb-3">
			<input type="text" name="code" class="form-control" placeholder="請輸入驗證碼">
			<div class="input-group-append">
			  <div class="input-group-text">
				<span class="fas fa-key"></span>
			  </div>
			  <img src=" {{url('admin/code')}} " alt="" onclick="this.src='{{url('admin/code')}}?'+Math.random()">
			</div>
		</div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">登入</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=" {{asset('resources/assets/js/jquery.min.js')}} "></script>
<!-- Bootstrap 4 -->
<script src=" {{asset('resources/assets/js/bootstrap.bundle.min.js')}} "></script>
<!-- AdminLTE App -->
<script src=" {{asset('resources/assets/js/adminlte.min.js')}} "></script>

</body>
</html>