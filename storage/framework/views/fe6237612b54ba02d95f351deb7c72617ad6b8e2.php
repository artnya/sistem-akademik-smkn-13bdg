<?php $__env->startSection('content'); ?>
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile Panel
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profil <?php echo e(Auth::user()->name); ?></li>
      </ol>
    </section>

<!-- notification session -->
<?php if(session('message')): ?>      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("<?php echo session('message'); ?>", "Pastikan nilai lengkap dan sesuai yang di inputkan!", "success");
    </script>
<?php endif; ?>

<?php if(session('messageerror')): ?>      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("<?php echo session('messageerror'); ?>", "", "success");
    </script>
<?php endif; ?>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Profile <?php echo e(Auth::user()->name); ?></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

          <section class="content">

                <div class="row">
                  <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                      <div class="box-body box-profile">
                        <a href="#edit-photo/<?php echo e(str_slug(Auth()->user()->name)); ?>" data-toggle="modal" data-target="#edit-photo">
                          <img class="profile-user-img img-responsive img-circle" <?php if(Auth::user()->photo == 'Not Setting'): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e(Auth::user()->photo); ?>" <?php endif; ?> alt="User profile picture">
                        </a>

                        <h3 class="profile-username text-center"><?php echo Auth::user()->name; ?></h3>

                        <p class="text-muted text-center">
                          <?php if(Auth()->user()->role == '1'): ?>
                            Siswa SMKN 13 Bandung
                          <?php elseif(Auth()->user()->role == '2'): ?>
                            Admin SMKN 13 Bandung
                          <?php elseif(Auth()->user()->role == '3'): ?>
                            Guru SMKN 13 Bandung
                          <?php endif; ?>
                        </p>

                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <b>
                              <?php if(Auth()->user()->role == '1'): ?>
                                Kelas
                              <?php elseif(Auth()->user()->role == '2'): ?>
                                -
                              <?php elseif(Auth()->user()->role == '3'): ?>
                                Guru
                              <?php endif; ?>
                            </b>
                            <a class="pull-right">
                              <?php if(Auth()->user()->role == '1'): ?>
                                <?php echo e(Auth::user()->kelas['tingkat_kelas']); ?> <?php echo e(Auth::user()->jurusan['nama_jurusan']); ?> <?php echo e(Auth::user()->kelas['jumlah_kelas']); ?>

                              <?php elseif(Auth()->user()->role == '2'): ?>
                                -
                              <?php elseif(Auth()->user()->role == '3'): ?>
                                <?php echo e(Auth::user()->mapel['nama_mapel']); ?>

                              <?php endif; ?>
                            </a>
                          </li>
                          <li class="list-group-item">
                            <b>Username</b>
                            <a class="pull-right">
                              <?php echo e(Auth::user()->username); ?>

                            </a>
                          </li>
                          <?php if(Auth::user()->role == '1'): ?>
                          <li class="list-group-item">
                            <b>Jurusan</b> <a class="pull-right"><?php echo e(Auth::user()->jurusan['nama_jurusan']); ?></a>
                          </li>
                          <?php endif; ?>
                        </ul>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                        <p class="text-muted">
                          B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                        <p class="text-muted">Malibu, California</p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                        <p>
                          <span class="label label-danger">UI Design</span>
                          <span class="label label-success">Coding</span>
                          <span class="label label-info">Javascript</span>
                          <span class="label label-warning">PHP</span>
                          <span class="label label-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-9">
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Post saya</a></li>
                        <li><a href="#timeline" data-toggle="tab">Beranda</a></li>
                        <li><a href="#settings" data-toggle="tab">Account</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                          <!-- Box Comment -->
                          <?php if(!$postsaya->count() < 1): ?>
                          <?php $__currentLoopData = $postsaya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div id="reload" class="box box-widget">
                            <div class="box-header with-border">
                              <div class="user-block">
                                <img class="img-circle" <?php if($post->user->photo == 'Not Setting' || $post->user->photo == ''): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($post->user->photo); ?>" <?php endif; ?> alt="User Image">
                                <span class="username"><a href="#"><?php echo e($post->user->name); ?></a></span>
                                <span id="refresh" class="description"><i class="fa fa-clock-o"></i> Posted at - <?php echo e($post->created_at->diffForHumans()); ?> </span>
                              </div>
                              <!-- /.user-block -->
                              <div class="box-tools">
                                <?php if($post->id_user == Auth::user()->id ): ?>
                                <a href="/home/timeline/post/edit/<?php echo e($post->id); ?>" class="btn btn-box-tool" data-widget="remove" title="Edit post"><i class="fa fa-pencil"></i></a>
                                <?php endif; ?>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                              <?php if($post->shared_user == NULL && $post->shared_desc == NULL): ?>
                                  <?php echo $post->post; ?>

                                <?php if(strlen(strip_tags($post->post)) > 200): ?>
                                <a href="<?php echo e(action('DiscussGroupController@show', $post->id)); ?>">Read More</a>
                                <?php endif; ?>
                              <?php else: ?>
                              <p><?php echo e($post->shared_desc); ?></p>
                              <div class="user-block">
                                <span class="username"><a href="#"><?php echo e($post->shared_user); ?></a></span>
                                <p class="description"><?php echo e($post->post); ?></p>
                              </div>
                              <?php endif; ?>

                            </div>
                            <div class="box-footer">
                              <a href="/home/discuss-group/comment/post/<?php echo e($post->id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-comment"></i> Lihat atau komentar</a>
                            </div>
                            <!-- /.box-footer -->
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?>
                          <p class="text-center text-muted">Anda belum memposting apapun.</p>
                          <?php endif; ?>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                         <!-- Box Comment -->
                          <?php $__currentLoopData = $timeline; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div id="reload" class="box box-widget">
                            <div class="box-header with-border">
                              <div class="user-block">
                                <img class="img-circle" <?php if($post->user->photo == 'Not Setting' || $post->user->photo == ''): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($post->user->photo); ?>" <?php endif; ?> alt="User Image">
                                <span class="username"><a href="#"><?php echo e($post->user->name); ?></a></span>
                                <span id="refresh" class="description"><i class="fa fa-clock-o"></i> Posted at - <?php echo e($post->created_at->diffForHumans()); ?> </span>
                              </div>
                              <!-- /.user-block -->
                              <div class="box-tools">
                                <?php if($post->id_user == Auth::user()->id ): ?>
                                <a href="/home/timeline/post/edit/<?php echo e($post->id); ?>" class="btn btn-box-tool" data-widget="remove" title="Edit post"><i class="fa fa-pencil"></i></a>
                                <?php endif; ?>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                              <?php if($post->shared_user == NULL && $post->shared_desc == NULL): ?>
                                  <?php echo $post->post; ?>

                                <?php if(strlen(strip_tags($post->post)) > 200): ?>
                                <a href="<?php echo e(action('DiscussGroupController@show', $post->id)); ?>">Read More</a>
                                <?php endif; ?>
                              <?php else: ?>
                              <p><?php echo e($post->shared_desc); ?></p>
                              <div class="user-block">
                                <span class="username"><a href="#"><?php echo e($post->shared_user); ?></a></span>
                                <p class="description"><?php echo e($post->post); ?></p>
                              </div>
                              <?php endif; ?>

                            </div>
                            <div class="box-footer">
                              <a href="/home/discuss-group/comment/post/<?php echo e($post->id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-comment"></i> Lihat atau komentar</a>
                            </div>
                            <!-- /.box-footer -->
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                          <!-- soon -->
                          <form class="form-horizontal">
                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>" required autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Username</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="<?php echo e(Auth::user()->username); ?>" required autofocus>

                                    <?php if($errors->has('username')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('username')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>" required autofocus>

                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info"><i class="fa fa-check"></i> Submit</button>
                                <a href="<?php echo e(url('/changepassword')); ?>" class="btn btn-danger"><i class="fa fa-sync"></i> Ganti Password</a>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

              </section>
              <!-- /.content -->

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>

<?php echo $__env->make('profile-user.upload-pic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>