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
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Posting</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" <?php if($post->user['photo'] == 'Not Setting' || $post->user['photo'] == ''): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($post->user['photo']); ?>" <?php endif; ?> alt="User Image">
                <span class="username"><a href="#"><?php echo e($post->user['name']); ?></a></span>
                <span class="description">Posted at - <?php echo e($post->created_at->diffForHumans()); ?> </span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <?php if($post->id_user == Auth::user()->id ): ?>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Edit post">
                  <i class="fa fa-pencil"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Delete post">
                  <i class="fa fa-trash"></i></a>
                <?php endif; ?>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- <img class="img-responsive pad" src="../dist/img/photo2.png" alt="Photo"> -->
              <?php if($post->shared_user == NULL && $post->shared_desc == NULL): ?>
              <p><?php echo e($post->post); ?></p>
              <?php else: ?>
              <p><?php echo e($post->shared_desc); ?></p>
              <div class="user-block">
                <span class="username"><a href="#"><?php echo e($post->shared_user); ?></a></span>
                <p class="description"><?php echo e($post->post); ?></p>
              </div>
              <?php endif; ?>
              <a href="/home/comments/post/share/<?php echo e($post->id); ?>" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</a>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted text-blue"><i class="fa fa-comment"></i> <?php echo e($comment->count()); ?> Comment</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <?php $__empty_1 = true; $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" 
                <?php if($wa->user['photo'] == 'Not Setting' || $wa->user['photo'] == NULL): ?> 
                  src="https://s17.postimg.org/bfpk18wcv/default.jpg" 
                <?php elseif(Auth::user()->id == ''): ?> 
                  src="https://s17.postimg.org/bfpk18wcv/default.jpg"
                <?php else: ?>
                  src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($wa->user['photo']); ?>"
                 <?php endif; ?> alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        <?php echo e($wa->user->name); ?>

                        <span class="text-muted pull-right"><?php echo e($wa->created_at->diffForHumans()); ?></span>
                      </span><!-- /.username -->
                   <?php echo e($wa->body); ?>

                </div>
                <!-- /.comment-text -->
              </div>
              <hr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <p>This post has no comments</p>
               <?php endif; ?>
              <!-- /.box-comment -->
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <?php if(Auth::check()): ?>
              <form method="POST" action="/home/comments/store/<?php echo e($post->id); ?>">
                <?php echo e(csrf_field()); ?>

                <img class="img-responsive img-circle img-sm" <?php if($post->user['photo'] == 'Not Setting' || Auth::user()->photo == ''): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e(Auth::user()->photo); ?>" <?php endif; ?> alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                  <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                  <input type="text" class="form-control input-sm" name="body" placeholder="Press enter to post comment">
                  <input type="submit" class="form-control input-sm btn-warning" value="Comment">
                </div>
              </form>
              <?php endif; ?>
            </div>
            <!-- /.box-footer -->
          </div>
              </div>
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