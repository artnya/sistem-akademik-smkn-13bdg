<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mata Pelajaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mata Pelajaran Users</a></li>
        <li class="active">Data Mata Pelajaran</li>
      </ol>
    </section>

<!-- notification session -->
<?php if(session('message')): ?>      
  <script>alert('<?php echo e(session('message')); ?>');</script>
<?php endif; ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Mata Pelajaran Umum</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <?php if(Auth()->user()->role == '2'): ?>
              <a href="#" data-toggle="modal" data-target="#add" class="btn btn-default text-aqua ajax"><i class="fa fa-plus"></i></a> 
              <?php endif; ?>
              <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <form action="/mapel/deletechecked/<?php echo e($in->id); ?>">
                <?php echo e(csrf_field()); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div>
                  <input type="submit" id="actions" value="Hapus" hidden>
                </div>
                <table id="example" class="table table-bordered table-hover table-responsive">
                  <thead>
                    <tr>
                      <td><input type="checkbox" name="select_all" id="select_all"></td>
                      <td>Nama Mata Pelajaran</td>
                      <td>Type Mata Pelajaran</td>
                      <td>KKM</td>
                      <?php if(Auth()->user()->role == '2'): ?>
                      <td>Aksi</td>
                      <?php endif; ?>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td>
                          <input type="checkbox" name="checkeditems[]" id="option-1">
                      </td>
                      <td><?php echo e($x->nama_mapel); ?></td>
                      <td><?php echo e($x->type_mapel); ?></td>
                      <td>
                        <?php if($x->kkm == NULL): ?>
                          <span class="text-red">KKM belum di atur</span>
                        <?php else: ?>
                          <?php echo e($x->kkm); ?>

                        <?php endif; ?>
                      </td>
                      <?php if(Auth()->user()->role == '2'): ?>
                      <td>
                        <div class="btn-group">
                        <a data-toggle="modal" data-target="#edit<?php echo e($x->id); ?>" class="btn btn-default text-yellow"><i class="fa fa-pencil"></i></a>
                        <a data-toggle="modal" data-target="#delete<?php echo e($x->id); ?>" class="btn btn-default text-yellow"><i class="fa fa-trash"></i></a>
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
        </div>
      </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

<?php echo $__env->make('mapel.edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('mapel.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('mapel.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>