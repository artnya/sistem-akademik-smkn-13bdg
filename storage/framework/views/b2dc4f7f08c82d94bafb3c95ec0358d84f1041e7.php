<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cetak Nilai <?php echo e($un->username); ?> <?php echo e($un->name); ?> </div>

                <div class="panel-body">
                    <table id="example" class="table table-striped table-hover table-responsive">
              <thead>
                <tr>
                    <th>Mata Pelajaran</th>
                    <th>Tugas 1</th>
                    <th>Tugas 2</th>
                    <th>Tugas 3</th>
                    <th>Sikap</th>
                    <th>Pengetahuan</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>KKM</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php if(!$semester->count() < 1): ?>
                <?php $__currentLoopData = $semester; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($in->mapel['nama_mapel']); ?></td>
                  <td><?php echo e($in->tugas1); ?></td>
                  <td><?php echo e($in->tugas2); ?></td>
                  <td><?php echo e($in->tugas3); ?></td>
                  <td><?php echo e($in->nilai_sikap); ?></td>
                  <td><?php echo e($in->nilai_pengetahuan); ?></td>
                  <td><?php echo e($in->uts); ?></td>
                  <td><?php echo e($in->uas); ?></td>
                  <td><?php echo e($in->mapel['kkm']); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <td class="text-center" colspan="12">Belum ada nilai yang di input.</td>
                <?php endif; ?>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>