<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMKN 13 BANDUNG SISTEM INFORMASI AKADEMIK</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('/css/font-awesome.min.css')); ?>">

  <link rel="stylesheet" href="/css/AdminLTE.min.css">

  <link rel="stylesheet" href="/css/all.css">

  <style>
    /* CSS used here will be applied after bootstrap.css */

      body::before { 
       background: url('<?php echo e(asset("/img/header(cadangan1).jpg")); ?>') no-repeat center center fixed; 
        content: '';
        z-index: -1;
        width: 100%;
        height: 100%;
        position:absolute; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        -webkit-filter: blur(1px);
        -moz-filter: blur(1px);
        -o-filter: blur(1px);
        -ms-filter: blur(1px);
        filter: blur(1px);
      }

      .panel-primary {
       opacity: 0.9;
       margin-top:100px;
      }
      .form-group.last {
       margin-bottom:0px;
      }
  </style>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- sweet alert -->
  <link rel="stylesheet" href="/css/sweetalert.css">
</head>
<body>
<!-- notification session -->
<?php if(session('messageerror')): ?>      
  <!-- sweet alert -->
<link rel="stylesheet" href="/css/sweetalert.css">
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
<script>
    swal("<?php echo e(session('messageerror')); ?>", "Anda telah menyalah gunakan aturan dan ketentuan. Jika  ini bukan merupakan kesalahan mohon kontak admin.", "error");
</script>
<?php endif; ?>
  <div class="container">
    <div class="row">
      <!-- Login area -->
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-primary">
                <div class="panel-heading"> <strong class="">SISTEM INFORMASI AKADEMIK SMKN 13 BANDUNG</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo e(route('login')); ?>" method="POST">
                      <?php echo e(csrf_field()); ?>

                        <div class="form-group has-feedback">
                            <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                              <input type="username" name="username" class="form-control" placeholder="Username">
                              <span class="fa fa-user form-control-feedback"></span>
                                <?php if($errors->has('username')): ?>
                                    <span class="help-block">
                                        <strong class="text-red"><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                                <span class="fa fa-lock form-control-feedback"></span>
                                  <?php if($errors->has('password')): ?>
                                      <span class="help-block">
                                          <strong class="text-red"><?php echo e($errors->first('password')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                      <input type="checkbox" class="" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Tidak terdaftar? <a href="/register" class="">Register</a><a href="<?php echo e(route('password.request')); ?>" class="">Lupa Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('/js/jquery.min.js')); ?>"></script>

<script src="<?php echo e(asset('/js/js/bootstrap.min.js')); ?>"></script>

<script src="<?php echo e(asset('/js/icheck.min.js')); ?>"></script>
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
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


<!--
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMKN 13 BANDUNG SISTEM INFORMASI AKADEMIK</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <link rel="stylesheet" href="/css/font-awesome.min.css">

  <link rel="stylesheet" href="/css/ionicons.min.css">

  <link rel="stylesheet" href="/css/AdminLTE.min.css">

  <link rel="stylesheet" href="/css/all.css">



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
          
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        
      </div>
    </form>
    

    <a href="<?php echo e(route('password.request')); ?>">Lupa password?</a><br>
    <a href="/register" class="text-center">Register untuk siswa</a>

  </div>
  
</div>



<script src="/js/jquery.min.js"></script>

<script src="/js/js/bootstrap.min.js"></script>

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
