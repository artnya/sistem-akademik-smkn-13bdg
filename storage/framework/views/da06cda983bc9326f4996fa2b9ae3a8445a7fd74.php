<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Guru
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Guru</a></li>
        <li class="active">Lihat Data Guru</li>
      </ol>
      <?php if(session('message')): ?>      
        <script>
                 var duration = 10;
                   var msg = alertify.message('Auto-dismiss in '+ duration +' seconds.', 10, function(){ clearInterval(interval);});
                   var interval = setInterval(function(){
                      msg.setContent('Auto-dismiss in '+(--duration)+' seconds.');
                   },1000);
        </script>
      <?php endif; ?>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Guru</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form action="/guru/deletechecked/<?php echo e($in->id); ?>" method="get">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div>
              <input type="submit" id="actions" value="Hapus" hidden>
              <input type="reset" id="actions" value="Unselect all">
          </div>
            <table id="example" class="table table-stripped table-responsive">
              <thead>
                <tr>
                  <td><input type="checkbox" name="select_all" id="select_all"></td>
                  <td>NIP</td>
                  <td>Nama Guru</td>
                  <td>Kelas</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $__currentLoopData = $Guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td>
                        <input type="checkbox" name="checked[]" id="option-1">
                  </td>
                  <td><?php echo e($x->username); ?></td>
                  <td><?php echo e($x->name); ?></td>
                  <td><?php echo e($x->mapel['nama_mapel']); ?></td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#detail<?php echo e($x->id); ?>" class="btn text-aqua"><i class="fa fa-eye"></i></a> 
                    <a data-toggle="modal" data-target="#edit<?php echo e($x->id); ?>" class="btn text-yellow"><i class="fa fa-pencil"></i></a> 
                    <a data-toggle="modal" data-target="#edit-photo<?php echo e($x->id); ?>" class="btn text-yellow"><i class="fa fa-upload"></i></a>
                    <a href="#" data-toggle="modal" class="btn text-red" data-target="#delete<?php echo e($x->id); ?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </form>
          <div class="ajax-content">
          </div>
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

<?php echo $__env->make('guru.detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('guru.edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('guru.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('guru.upload-pic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>