<!-- Modal SHOW -->
<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <div class="modal fade" id="detail<?php echo e($in->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Detail <?php echo e($in->name); ?></h4>
          </div>
          <div class="modal-body"><a href="<?php echo e(url('uploadgambar')); ?>/<?php echo e($in->photo); ?>">
            <img id="showgambar" <?php if($in->photo == 'Not Setting'): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($in->photo); ?>" <?php endif; ?> class="user-image img-responsive img-thumbnail" height="300" width="234" style="float:left;"></a>
          <table class="table table-striped">
                <thead>
                    <tr>
                      <th><b>NIS</b></th>
                      <td><?php echo e($in->username); ?></td>
                    </tr>
                    <tr>
                      <th><b>Nama Siswa</b></th>
                      <td><?php echo e($in->name); ?></td>
                    </tr>
                    <tr>
                      <th><b>Email</b></th>
                      <td><?php echo e($in->email); ?></td>
                    </tr>
                    <tr>
                      <th><b>Jurusan</th>
                      <td><?php echo e($in->jurusan['nama_jurusan']); ?></td>
                    </tr>
                    <tr>
                      <th><b>Kelas</b></th>
                      <td><?php echo e($in->kelas['tingkat_kelas']); ?> - <?php echo e($in->jurusan['nama_jurusan']); ?> - <?php echo e($in->kelas['jumlah_kelas']); ?></td>
                    </tr>
                    <tr>
                      <th><b>Tempat Lahir</b></th>
                      <td><?php echo e($in->tmp_lahir); ?></td>
                    </tr>
                    <tr>
                      <th><b>Tanggal Lahir</b></th>
                      <td><?php echo e($in->tgl_lahir); ?></td>
                    </tr>
                    <tr>
                      <th><b>Agama</b></th>
                      <td><?php echo e($in->agama); ?></td>
                    </tr>
                    <tr>
                      <th><b>Goldar</b></th>
                      <td><?php echo e($in->goldar); ?></td>
                    </tr>
                    <tr>
                      <th><b>Alamat</b></th>
                      <td><?php echo e($in->alamat); ?></td>
                    </tr>
                    <tr>
                      <th><b>Nama Orang Tua</b></th>
                      <td><?php echo e($in->nama_ortu); ?></td>
                    </tr>
                </thead>
            </table>
          </div>
          <div class="modal-footer">
               <a class="btn btn-xs btn-warning" href="#" data-dismiss="modal" data-toggle="modal" data-target="#confirm-edit<?php echo e($in->id); ?>">Edit</a>
                                   <!-- Button trigger modal -->
                <a class="btn btn-xs btn-danger" href="#" data-href="siswa/deletemanual/<?php echo e($in->id); ?>" data-toggle="modal" data-target="#confirm-delete" data-confirm="Are you sure you want to delete?">Delete</a>
            <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<!-- end modal SHOW -->
