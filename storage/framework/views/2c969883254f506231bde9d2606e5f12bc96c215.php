<!-- Modal SHOW -->
<?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <div class="modal fade" id="detail<?php echo e($in->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Kelas Detail</h4>
          </div>
          <div class="modal-body">
          <table class="table table-striped">
                <thead>
                    <tr>
                      <th><b>Tingkat Kelas</b></th>
                      <td><?php echo e($in->tingkat_kelas); ?></td>
                    </tr>
                    <tr>
                      <th><b>Urutan Kelas Ke :</b></th>
                      <td><?php echo e($in->jumlah_kelas); ?></td>
                    </tr>
                    <tr>
                      <th><b>Wali Kelas</b></th>
                      <td><?php echo e($in->user['name']); ?></td>
                    </tr>
                    <tr>
                      <th><b>Jurusan</b></th>
                      <td><?php echo e($in->jurusan['nama_jurusan']); ?></td>
                    </tr>
                </thead>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- end modal SHOW -->
