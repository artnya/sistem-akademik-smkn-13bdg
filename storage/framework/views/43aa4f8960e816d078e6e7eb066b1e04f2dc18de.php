<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Siswa</a></li>
        <li class="active">Lihat Data Siswa</li>
      </ol>
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
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Siswa Per-Kelas</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>  
        <div class="box-body">
          <form action="/siswa" method="GET" class="form-horizontal">
            <div class="row">
              <div class="col-md-6">
                <select name="search" class="form-control select2" data-width="100%" id="">
                  <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($in->id); ?>" <?php if($in->id == $cari): ?> selected <?php else: ?> <?php endif; ?>><?php echo e($in->tingkat_kelas); ?> <?php echo e($in->jurusan['nama_jurusan']); ?> <?php echo e($in->jumlah_kelas); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <div class="col-sm-4" style="">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
                <?php if(count($cari) > 0): ?>
                <a href="/siswa" class="btn btn-danger"><i class="fa fa-back"></i> Kembali</a>
                <?php endif; ?>
              </div>
            </div>
          </form>
        </div>      
      </div>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Siswa</h3>

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
          <form action="/siswa/deletechecked/<?php echo e($in->id); ?>" method="get">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div>
              <input type="submit" id="actions" value="Hapus" hidden>
          </div>
          <div class="col-md-12">
            <?php echo e($siswa->appends(Request::only('search'))->links()); ?>

          </div>
            <table <?php if(count($cari) > 0 ): ?> id="example" <?php endif; ?> class="table table-hover table-striped table-bordered table-responsive">
              <thead>
                <tr>
                  <th><input type="checkbox" name="select_all" id="select_all"></th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php if(count($siswa) > 0): ?>
                  <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td>
                        <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td><?php echo e($x->username); ?></td>
                  <td><?php echo e($x->name); ?></td>
                  <td><?php echo e($x->kelas['tingkat_kelas']); ?> <?php echo e($x->jurusan['nama_jurusan']); ?> <?php echo e($x->kelas['jumlah_kelas']); ?></td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#detail<?php echo e($x->id); ?>" class="btn text-aqua"><i class="fa fa-eye"></i></a>
                    <?php if(Auth::user()->role == '2'): ?> 
                    <a data-toggle="modal" data-target="#edit<?php echo e($x->id); ?>" class="btn text-yellow"><i class="fa fa-pencil"></i></a> 
                    <a href="/siswa/uploadpic/#<?php echo e($x->id); ?>" data-toggle="modal" data-target="#edit-photo<?php echo e($x->id); ?>" class="btn text-yellow"><i class="fa fa-upload"></i></a>
                    <a href="#" data-toggle="modal" class="btn text-red" data-target="#delete<?php echo e($x->id); ?>"><i class="fa fa-trash"></i></a>
                    <?php endif; ?>
                  </td>
                </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                  <tr>
                    <td colspan="8"><h2 class="text-center text-muted">Ooops! Data yang anda cari tidak ditemukan.</h2></td>
                  </tr>
                  <?php endif; ?>
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
          <div class="ajax-content">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="col-md-offset-5">
            <?php echo e($siswa->appends(Request::only('search'))->links()); ?>

          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

<?php echo $__env->make('siswa.detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('siswa.edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('siswa.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('siswa.upload-pic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>