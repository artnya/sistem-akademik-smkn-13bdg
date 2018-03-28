<?php $__env->startSection('content'); ?>
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reports Data
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Reports</a></li>
        <li class="active">Lihat Reports</li>
      </ol>
    </section>

<!-- notification session -->
<?php if(session('message')): ?>      
  <!-- sweet alert -->
<link rel="stylesheet" href="/css/sweetalert.css">
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
<script>
    swal("<?php echo session('message'); ?>", "", "success");
</script>
<?php endif; ?>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Table Informasi Reports</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="#">
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
              <!-- on development
              <a href="/reports/readAllTask" class="btn btn-success" title="Baca semua task yang tidak perlu"><i class="fa fa-check"></i> Baca semua</a>
              -->
            </div>
            <table id="example" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <td>#</td>
                  <td>No</td>
                  <td>Nama User</td>
                  <td>Alasan Pelanggaran</td>
                  <td>Status</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php if(count($viewTask) > 0): ?>
                  <?php $no = 1; ?>
                  <?php $__currentLoopData = $viewTask; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td>
                      <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td><?php echo e($no); ?></td>
                  <td><?php echo e($x->user['name']); ?></td>
                  <td>
                    <?php if($x->read_at == NULL): ?>
                    <span class="label label-danger"><?php echo e($x->reason); ?>!</span>
                    <?php else: ?>
                    <?php echo e($x->reason); ?>!
                    <?php endif; ?>
                  </td>
                  <td>
                    <?php if($x->read_at == NULL): ?>
                    <p class="text-center"><i class="fa fa-times text-grey"></i></p>
                    <?php else: ?>
                    <p class="text-center"><i class="fa fa-check text-green"></i></p>
                    <?php endif; ?>
                  </td>
                  <td>
                    <div class="btn-group">
                    <?php if($x->read_at == NULL): ?>
                    <a href="/admin/reports/read/<?php echo e($x->id); ?>" class="btn btn-default text-green"><i class="fa fa-check" title="Ceklis bila sudah di baca"></i></a>
                    <?php endif; ?>
                    <a href="#" data-toggle="modal" class="btn btn-default text-red" data-target="#delete<?php echo e($x->id); ?>"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
                  <?php $no++; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                  <td colspan="6"><h4 class="text-muted text-center">Tidak ada report untuk sekarang.</h4></td>
                  <?php endif; ?>
              </tbody>
            </table>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    </section>
    <!-- /.content -->
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>