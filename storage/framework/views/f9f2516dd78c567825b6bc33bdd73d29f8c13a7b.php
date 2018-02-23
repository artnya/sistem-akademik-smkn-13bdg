<!-- Modal SHOW -->
<?php $__currentLoopData = Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <div class="modal fade" id="notify<?php echo e($in->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <a href="<?php echo e(route('notify-read-one', $in->id)); ?>"><span aria-hidden="true">&times;</span></a>
            <h4 class="modal-title" id="myModalLabel">Account Detail Who accessed the unauthorized page</h4>
          </div>
          <div class="modal-body">
          <table class="table table-striped">
                <thead>
                    <tr>
                      <th><b>Nama Pengguna :</b></th>
                      <td><?php echo e($in->data['id']); ?></td>
                    </tr>
                    <tr>
                      <th><b>Kejadian Pada Saat :</b></th>
                      <td><?php echo e($in->created_at); ?></td>
                    </tr>
                </thead>
            </table>
          </div>
          <div class="modal-footer">
            <a href="<?php echo e(route('notify-read-one', $in->id)); ?>" class="btn btn-xs btn-default">Ok</a>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- end modal SHOW -->
