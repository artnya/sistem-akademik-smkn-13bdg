<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Accounts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Accounts Users</a></li>
        <li class="active">Data Accounts</li>
      </ol>
    </section>

<!-- notification session -->
<?php if(session('message')): ?>      
  <!-- sweet alert -->
<link rel="stylesheet" href="/css/sweetalert.css">
<!-- sweet alert -->
<script src="/js/sweetalert.js"></script>
<script>
    swal("<?php echo session('message'); ?>", "Pastikan hanya administrator yang bisa mengendalikan sistem verifikasi ini", "success");
</script>
<?php endif; ?>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Accounts</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <a href="#" data-toggle="modal" data-target="#add" class="btn btn-default text-aqua ajax"><i class="fa fa-add"></i> Tambah Akun</a> 
          <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form action="/account/deletechecked/<?php echo e($in->id); ?>">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <table id="example" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <td>#</td>
                  <td>Nama pengguna</td>
                  <td>Username</td>
                  <td>Verifikasi sebagai</td>
                  <td>Email</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $__currentLoopData = $account; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td>
                      <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td><?php echo e($x->name); ?></td>
                  <td><?php echo e($x->username); ?></td>
                  <td>
                    <!-- back-end -->
                        <?php if($x->role == '1'): ?>
                        <small class="label label-info">Terverifikasi sebagai siswa</small>
                        <?php elseif($x->role == '2'): ?>
                        <small class="label label-warning">Terverifikasi sebagai Admin</small>
                        <?php elseif($x->role == '3'): ?>
                        <small class="label label-success">Terverifikasi sebagai Guru</small>
                        <?php elseif($x->role == '4'): ?>
                        <small class="label label-danger">Account di banned!</small>
                        <?php else: ?>
                        <small class="label label-default">Belum terverifikasi!</small>
                        <?php endif; ?>
                    <!-- end oef back end -->
                  </td>
                  <td><?php echo e($x->email); ?></td>
                  <td>
                    <div class="btn-group">
                    <a href="#" data-toggle="modal" data-target="#detail<?php echo e($x->id); ?>" class="btn btn-default text-aqua ajax"><i class="fa fa-eye"></i></a> 
                    <a data-toggle="modal" data-target="#edit<?php echo e($x->id); ?>" class="btn btn-default text-yellow"><i class="fa fa-refresh"></i></a>
                    </div>
                    </td>
                </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <div class="ajax-content"></div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

<?php echo $__env->make('account.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('account.edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('account.detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>