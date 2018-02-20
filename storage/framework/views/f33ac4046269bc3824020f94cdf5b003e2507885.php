<?php $__env->startSection('content'); ?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Timeline
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- =========================================================== -->

      <div class="row center-block">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-user-md"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Guru</span>
              <span class="info-box-number"><?php echo e($gurucount); ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo e($gurucount); ?>%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Siswa</span>
              <span class="info-box-number"><?php echo e($siswascount); ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo e($siswascount); ?>%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Semua Akun</span>
              <span class="info-box-number"><?php echo e($allcount); ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo e($allcount); ?>%"></div>
              </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Akun yang baru terdaftar sekarang</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger"><?php echo e($siswa->count()); ?> <?php if($siswa->count() > 1): ?> New Account(s) <?php else: ?> New Account <?php endif; ?></span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                      <img 
                            <?php if($in->photo == 'Not Setting' || $in->photo == NULL): ?> 
                              src="https://s17.postimg.org/bfpk18wcv/default.jpg" 
                            <?php else: ?> 
                              src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($in->photo); ?>" 
                            <?php endif; ?> 
                            class="img-thumbnail" width="45" height="30" title="<?php echo e($in->name); ?>'s photo profile">
                      <a data-toggle="modal" data-target="#detail<?php echo e($in->id); ?>" class="users-list-name" href="#"><?php echo e($in->name); ?></a>
                      <span class="users-list-date"><?php echo e(date('D-M-Y', strtotime($in->created_at))); ?></span>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>

        <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-solid box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Panel Request Verifikasi akun</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger"><?php echo e($accs->count()); ?> <?php if($accs->count() > 1): ?> <?php echo e($accs->count()); ?> New Account(s) <?php elseif($accs->count() == 1): ?> New Account  <?php else: ?> No account requested <?php endif; ?></span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <?php $__currentLoopData = $accs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                      <img 
                            <?php if($in->photo == 'Not Setting' || $in->photo == NULL): ?> 
                              src="https://s17.postimg.org/bfpk18wcv/default.jpg" 
                            <?php else: ?> 
                              src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($in->photo); ?>" 
                            <?php endif; ?> 
                            class="img-thumbnail" width="45" height="30" title="<?php echo e($in->name); ?>'s photo profile">
                      <a data-toggle="modal" data-target="#edit<?php echo e($in->id); ?>" class="users-list-name" href="#"><?php echo e($in->name); ?></a>
                      <span class="users-list-date"><?php echo e(date('D-M-Y', strtotime($in->created_at))); ?></span>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php echo $__env->make('siswa.detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('account.edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>