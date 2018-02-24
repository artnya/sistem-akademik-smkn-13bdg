<?php $__env->startSection('content'); ?>
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tahun Ajaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tahun Ajaran</a></li>
        <li class="active">Lihat Data Tahun Ajaran</li>
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
          <h3 class="box-title">Tahun Ajaran</h3>

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
              <?php if(Auth()->user()->role == '2'): ?>
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Tahun Ajaran</a>
            <?php endif; ?>
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <table id="example" class="table table-bordered table-hover table-responsive">
              <thead>
                <tr>
                  <td>#</td>
                  <td>Tahun Sekarang</td>
                  <?php if(Auth()->user()->role == '2'): ?>
                  <td>Aksi</td>
                  <?php endif; ?>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $__currentLoopData = $tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td>
                      <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td><?php echo e($x->tahun); ?></td>
                  <?php if(Auth()->user()->role == '2'): ?>
                  <td>
                    <div class="btn-group">
                    <a data-toggle="modal" data-target="#edit<?php echo e($x->id); ?>" class="btn btn-default  text-yellow"><i class="fa fa-pencil"></i></a>
                    <a href="#" data-toggle="modal" class="btn btn-default text-red" data-target="#delete<?php echo e($x->id); ?>"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                  <?php endif; ?>
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

    </section>
    <!-- /.content -->
  </div>

<?php echo $__env->make('tahun-ajaran.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>