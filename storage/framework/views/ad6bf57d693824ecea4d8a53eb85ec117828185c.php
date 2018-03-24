<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
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
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline timeline-aqua">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    <?php echo e($today->format('l jS \\of F Y h:i:s A')); ?>

                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <?php $__currentLoopData = Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($notification->type =='App\Notifications\CommentNotification'): ?>
            <li id="retrieve">
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> <?php echo e($notification->created_at->diffForHumans()); ?></span>

                <h3 class="timeline-header"><a href="#"><?php echo e($notification->data['id']); ?></a>  <?php echo e($notification->data['data']); ?></h3>

                <div class="timeline-body">
                  <?php echo str_limit($notification->data['comment'], '45'); ?>

                </div>
                <div class="timeline-footer">
                  <a href="/home/discuss-group/comment/post/<?php echo e($notification->data['postmu']); ?>#<?php echo e($notification->data['last_row']); ?>" class="btn btn-warning btn-flat btn-xs">View comment</a>
                </div>
              </div>
            </li>
            <?php elseif($notification->type == 'App\Notifications\ReportNotification'): ?>
            <li>
              <i class="fa fa-info bg-red"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> <?php echo e($notification->created_at->diffForHumans()); ?></span>

                <h3 class="timeline-header"><a href="#"><?php echo e($notification->data['id']); ?></a>  <?php echo e($notification->data['data']); ?></h3>

                <div class="timeline-body">
                  <?php echo e($notification->data['id']); ?> has got auto report!
                </div>
                <div class="timeline-footer">
                  <a href="<?php echo e(route('notify-read-one', $notification->id)); ?>" class="btn btn-warning btn-flat btn-xs">View report</a>
                </div>
              </div>
            </li>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- END timeline item -->
            <!-- timeline item -->
            <!-- soon 
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Read more</a>
                  <a class="btn btn-danger btn-xs">Delete</a>
                </div>
              </div>
            <li>
              <i class="fa fa-user bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
              </div>
            <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
            </li>
            <li>
              <i class="fa fa-camera bg-purple"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                <div class="timeline-body">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                </div>
              </div>
            </li>
            <li>
              <i class="fa fa-video-camera bg-maroon"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>

                <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                <div class="timeline-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs"
                            frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="timeline-footer">
                  <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                </div>
              </div>
            </li>
          -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>