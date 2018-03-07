<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMKN 13 BANDUNG SISTEM INFORMASI AKADEMIK</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/css/all.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Sistem Akademik</b></a>
    <div class="login-logo">
        <a href="#">SMKN 13 Bandung</a>
    </div>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
      <img class="img-responsive center-block" src="<?php echo e(url('uploadgambar')); ?>/default.jpg" style="width: 70px; height: 70px;" alt="">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php echo e(route('login')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

      <div class="form-group has-feedback">
        <input type="username" name="username" class="form-control" placeholder="Username">
        <span class="fa fa-user form-control-feedback"></span>
          <?php if($errors->has('username')): ?>
              <span class="help-block">
                  <strong class="text-red"><?php echo e($errors->first('username')); ?></strong>
              </span>
          <?php endif; ?>
      </div>
      <div class="input-group input-group-md">
        <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
         <span class="input-group-btn">
            <button type="button" id="bt" class="btn btn-default btn-flat" title="Hold to show your pass"><i class="fa fa-eye"></i></button>
          </span>
      </div>
      <div class="form-group has-feedback">
          <?php if($errors->has('password')): ?>
              <span class="help-block">
                  <strong class="text-red"><?php echo e($errors->first('password')); ?></strong>
              </span>
          <?php endif; ?>
      </div>
      <div class="row">
        <div class="form-group">
          <div class="col-xs-8">
            <div class="checkbox">
              <label>
                <input type="checkbox" class="" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="<?php echo e(route('password.request')); ?>">Lupa password?</a><br>
    <a href="/register" class="text-center">Register untuk siswa</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/js/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script>
  var timeoutId = 0;
var $button = $("#bt");
var $box = $("#pass");
var $chk = $("#chk");

$button.mousedown(function() {
    timeoutId = setTimeout(function(){
        showPass('text');
    }, 50);
}).bind('mouseup', function() {
    clearTimeout(timeoutId);
    if( !( $chk.prop("checked") ) )
        showPass('password');
});

function showPass(val){
    $box.prop('type', val);
}
</script>
</body>
</html>
