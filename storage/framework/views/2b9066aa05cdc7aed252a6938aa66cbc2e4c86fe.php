<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>13</b>SIA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php if(Auth()->user()->role == '2'): ?>ADMIN PANEL <?php elseif(Auth()->user()->role == '3'): ?> PANEL GURU <?php else: ?> SMKN 13 BANDUNG <?php endif; ?></b> AKADEMIK
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <?php if(Auth::user()->unreadNotifications->count()): ?>
              <span class="label label-danger"><?php echo e(Auth::user()->unreadNotifications->count()); ?></span>
              <?php endif; ?>
            </a>
            <ul class="dropdown-menu">
              <?php if(Auth()->user()->unreadNotifications->count()): ?>
              <li class="header">Anda mempunyai <?php echo e(Auth()->user()->unreadNotifications->count()); ?> pemberitahuan</li>
              <?php else: ?>
              <li class="header">Pemberitahuan</li>
              <?php endif; ?>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php if(Auth()->user()->notifications->count()): ?>
                  <?php $no = 1; ?>
                  <?php $__currentLoopData = Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><a style="background-color: #d2d6de;" href="/home/timeline">(<?php echo e($no); ?>) <?php echo e($notification->data['id']); ?> <?php echo e($notification->data['data']); ?></a></li>
                  <?php $no++; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php $__currentLoopData = Auth::user()->readNotifications()->paginate(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="active"><a href="#"><?php echo e($notification->data['id']); ?> <?php echo e($notification->data['data']); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                  <li class=""><a href="#"> Tidak ada pemberitahuan apapun</a></li>
                  <?php endif; ?>
                  <?php echo e(Auth::user()->readNotifications()->paginate(10)->links()); ?> 
                </ul>
              </li>
              <li class="footer"><a href="<?php echo e(route('notify-read')); ?>">Pilih semua anggap sudah di baca </a></li>
              <?php if(Auth()->user()->readNotifications->count()): ?>
              <li class="footer"><a href="<?php echo e(route('notify-clearly')); ?>">Hapus Pemberitahuan</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img <?php if(Auth::user()->photo == 'Not Setting' || Auth::user()->photo == NULL): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e(Auth::user()->photo); ?>" <?php endif; ?> class="user-image img-circle" alt="User Image">
              <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img <?php if(Auth::user()->photo == 'Not Setting' || Auth::user()->photo == NULL): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e(Auth::user()->photo); ?>" <?php endif; ?> class="img-circle" alt="User Image">

                <p>
                  <?php echo e(Auth::user()->name); ?> - 
                  <?php if(Auth::user()->role == '2'): ?>
                    <small>Anda login sebagai Admin</small> 
                  <?php elseif(Auth::user()->role == '3'): ?>
                    <small>Anda login sebagai Guru</small> 
                  <?php elseif(Auth::user()->role == '1'): ?>
                    <small>Anda login sebagai Siswa</small> 
                  <?php endif; ?>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/profile/<?php echo e(str_slug(Auth::user()->name)); ?>" class="btn btn-default btn-flat"><i class="fa fa-user"></i>Profile</a>
                </div>
                <div class="pull-right">
                  	<a class="btn btn-default btn-flat" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                  	<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
						<?php echo e(csrf_field()); ?>

					</form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php echo $__env->make('account.notify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
