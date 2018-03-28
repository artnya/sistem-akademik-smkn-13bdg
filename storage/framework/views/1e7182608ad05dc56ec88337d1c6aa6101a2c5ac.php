<?php $__env->startSection('content'); ?>
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Penginputan Nilai</h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Rekap Nilai</a></li>
        <li class="active"><a href="#">Import Nilai</a></li>
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
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Penting!</h4>
                <?php if(session('messageerror')): ?>
                 <!-- sweet alert -->
                <link rel="stylesheet" href="/css/sweetalert.css">
                <!-- sweet alert -->
                <script src="/js/sweetalert.js"></script>
                <script>
                            swal("<?php echo session('messageerror'); ?>", "", "error");
                </script>
                <?php endif; ?>
                <?php if(session('message')): ?>
                    <?php echo e(session('message')); ?>

                <?php endif; ?>
                Dalam penginputan nilai siswa harus teliti dalam mengisi form nilai dan sesuaikan dengan semester dan tahun ajaran yang akan di masukan.
        </div>

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        	<form class="form-horizontal" method="POST" action="/imported-file/progress" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('id_tahun') ? ' has-error' : ''); ?>">
                            <label for="id_tahun" class="col-md-4 control-label">Tahun Ajaran</label>
                            <div class="col-md-6">
                                <select id="id_tahun" class="form-control select2" name="id_tahun" value="<?php echo e(old('id_tahun')); ?>" required autofocus>
                                    <option disabled selected>Pilih Tahun Ajaran</option>
                                    <?php $__currentLoopData = $tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $now): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($now->tahun); ?>"><?php echo e($now->tahun); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('id_tahun')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_tahun')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('id_mapel') ? ' has-error' : ''); ?>">
                            <label for="id_mapel" class="col-md-4 control-label">Mata Pelajaran</label>
                            <div class="col-md-6">
                                <select id="id_mapel" type="text" class="form-control select2" name="id_mapel" value="<?php echo e(old('id_mapel')); ?>" required autofocus>
                                    <option disabled selected>Pilih Mapel</option>
                                    <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($x->id); ?>" <?php if($x->id == Auth::user()->id_mapel): ?> selected <?php elseif(Auth::user()->role): ?> <?php else: ?> disabled <?php endif; ?>><?php echo e($x->nama_mapel); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('id_mapel')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_mapel')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('semester') ? ' has-error' : ''); ?>">
                            <label for="semester" class="col-md-4 control-label">Semester</label>
                            <div class="col-md-6">
                                <select id="semester" type="text" class="form-control select2" name="semester" value="<?php echo e(old('semester')); ?>" required autofocus>
                                    <option disabled selected>Pilih Semester</option>
                                    <option value="1">1 (Kelas X)</option>
                                    <option value="2">2 (Kelas X)</option>
                                    <option value="3">3 (Kelas XI)</option>
                                    <option value="4">4 (Kelas XI)</option>
                                    <option value="5">5 (Kelas XII)</option>
                                    <option value="6">6 (Kelas XII)</option>
                                </select>

                                <?php if($errors->has('semester')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('semester')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('kkm') ? ' has-error' : ''); ?>">
                            <label for="kkm" class="col-md-4 control-label">KKM</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="kkm" placeholder="Masukan KKM..." required>
                                <?php if($errors->has('kkm')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kkm')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('id_kelas') ? ' has-error' : ''); ?>">
                            <label for="id_kelas" class="col-md-4 control-label">Kelas</label>
                            <div class="col-md-6">
                                <select id="id_kelas" type="text" class="form-control select2" name="id_kelas" value="<?php echo e(old('id_kelas')); ?>" required autofocus>
                                    <option disabled selected>Pilih Kelas</option>
                                    <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($x->id); ?>"><?php echo e($x->tingkat_kelas); ?> <?php echo e($x->jurusan['nama_jurusan']); ?> <?php echo e($x->jumlah_kelas); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('id_kelas')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_kelas')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('id_jurusan') ? ' has-error' : ''); ?>">
                            <label for="id_jurusan" class="col-md-4 control-label">Jurusan</label>
                            <div class="col-md-6">
                                <select id="id_jurusan" type="text" class="form-control select2" name="id_jurusan" value="<?php echo e(old('id_jurusan')); ?>" required autofocus>
                                    <option disabled selected>Pilih Jurusan Siswa</option>
                                    <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($x->id); ?>"><?php echo e($x->nama_jurusan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('id_jurusan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_jurusan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('import_nilai') ? ' has-error' : ''); ?>">
                            <label for="import_nilai" class="col-md-4 control-label">File</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="import_nilai" required title="File excel harus berisi nis, nama siswa dan nilai nilai">
                                <span class="help-block text-red">
                                    <strong>File harus berisi data nis, nama siswa, dan nilai nilai. <a href="/cara-penggunaan-excel">Pelajari lebih lanjut.</a></strong>
                                </span>
                                <?php if($errors->has('import_nilai')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('import_nilai')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-upload"></i> Import Nilai
                                </button>
                            </div>
                        </div>
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