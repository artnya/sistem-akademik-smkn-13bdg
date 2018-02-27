<?php $__env->startSection('content'); ?>
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Input / Rekap Nilai Siswa
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Input & Rekap Nilai Siswa</a></li>
        <li class="active">Lihat Data Siswa</li>
      </ol>
    </section>

<!-- notification session -->
<?php if(session('message')): ?>      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("<?php echo session('message'); ?>", "Pastikan nilai lengkap dan sesuai yang di inputkan!", "success");
    </script>
<?php endif; ?>

<?php if(session('messageerror')): ?>      
      <!-- sweet alert -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- sweet alert -->
    <script src="/js/sweetalert.js"></script>
    <script>
        swal("<?php echo session('messageerror'); ?>", "", "success");
    </script>
<?php endif; ?>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Siswa yang akan di input / rekap nilai</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form action="/rekapnilai/deletechecked/<?php echo e($in->id); ?>">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <table id="example" class="display table table-stripped table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td>
                      <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td><?php echo e($x->username); ?></td>
                  <td><?php echo e($x->name); ?></td>
                  <td><?php echo e($x->kelas['tingkat_kelas']); ?> <?php echo e($x->jurusan['nama_jurusan']); ?> <?php echo e($x->kelas['jumlah_kelas']); ?></td>
                  <td>
                    <div class="btn-group">
                    <a href="inputnilai/siswa/<?php echo e($x->id); ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Input Nilai</a>
                    <a href="/rekapnilai/lihat-nilai/<?php echo e($x->id); ?>/<?php echo e(str_slug($x->name)); ?>" class="btn btn-info"><i class="fa fa-check"></i> Rekapitulasi Nilai</a>
                    </div>
                    </td>
                </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>