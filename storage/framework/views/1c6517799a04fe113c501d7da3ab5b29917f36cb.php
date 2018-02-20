<!-- Modal SHOW -->
<?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <div class="modal fade" id="detail<?php echo e($in->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Account Detail <?php echo e($in->name); ?></h4>
          </div>
          <div class="modal-body">
          	<div>
          		<img <?php if($in->photo == '' || $in->photo == 'Not Setting'): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($in->photo); ?>" <?php endif; ?> class="img-thumbnail img-responsive" width="100" height="100">
          	</div>
          <table class="table table-striped">
                <thead>
                    <tr>
                      <th><b>Nama Pengguna :</b></th>
                      <td><?php echo e($in->name); ?></td>
                    </tr>
                    <tr>
                      <th><b>Username :</b></th>
                      <td><?php echo e($in->username); ?></td>
                    </tr>
                    <tr>
                      <th><b>Terverifikasi sebagai :</b></th>
                      <td>
                      	 <!-- back-end -->
                        <?php if($in->role == '1'): ?>
                        <small class="text-green">Terverifikasi sebagai siswa</small>
                        <?php elseif($in->role == '2'): ?>
                        <small class="text-orange">Terverifikasi sebagai Admin</small>
                        <?php elseif($in->role == '3'): ?>
                        <small class="text-blue">Terverifikasi sebagai Guru</small>
                        <?php else: ?>
                        <small class="text-red">Account di banned!</small>
                        <?php endif; ?>
                    <!-- end oef back end -->
                      </td>
                    </tr>
                    <tr>
                      <th><b>Email Pengguna :</b></th>
                      <td><?php echo e($in->email); ?></td>
                    </tr>
                </thead>
            </table>
          </div>
          <div class="modal-footer">
               <a class="btn btn-xs btn-warning" href="#" data-dismiss="modal" data-toggle="modal" data-target="#edit<?php echo e($in->id); ?>">Edit</a>
            <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- end modal SHOW -->
