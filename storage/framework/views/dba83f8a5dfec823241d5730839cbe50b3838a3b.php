<?php $__env->startSection('content'); ?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Diskusi Group
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
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#post" data-toggle="tab">Posting</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
          <!-- Box Comment -->
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <a href="/home/discuss-group/post/edit/<?php echo e($post->id); ?>" class="btn btn-box-tool" title="Edit post"><i class="fa fa-pencil"></i></a>
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
              <a href="/home/discuss-group/share/<?php echo e($post->id); ?>" class="btn btn-info btn-xs"><i class="fa fa-share"></i> Share</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($posts->links()); ?>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->

              <div class="tab-pane" id="post">
                <form class="form-horizontal" method="post" action="/timeline/add">
                  <?php echo e(csrf_field()); ?>

                  <div class="box-body pad">
                    <textarea id="editor1" name="post" rows="10" cols="80">
                                                
                    </textarea>
                  </div>
                  <button type="submit" class="btn btn-danger">Submit</button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>