<?php $__env->startSection('content'); ?>
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e($siswa->username); ?> <?php echo e($siswa->name); ?> - <?php echo e($siswa->kelas['tingkat_kelas']); ?> <?php echo e($siswa->jurusan['nama_jurusan']); ?> <?php echo e($siswa->kelas['jumlah_kelas']); ?>

      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Rekap Nilai Siswa</a></li>
        <li><a href="#">Cari Data Siswa</a></li>
        <li class="active">Input Nilai <?php echo e($siswa->name); ?></li>
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
        	<form class="form-horizontal" method="POST" action="/inputnilai/add">
                        <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="id_siswa" value="<?php echo e($siswa->id); ?>">
                            <input type="hidden" name="id_kelas" value="<?php echo e($siswa->id_kelas); ?>">
                            <input type="hidden" name="id_jurusan" value="<?php echo e($siswa->id_jurusan); ?>">
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
                        <div class="form-group<?php echo e($errors->has('semester') ? ' has-error' : ''); ?>">
                            <label for="semester" class="col-md-4 control-label">Semester</label>
                            <div class="col-md-6">
                                <select id="semester" type="text" class="form-control select2" name="semester" value="<?php echo e(old('semester')); ?>" required autofocus>
                                    <option disabled selected>Pilih Semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>

                                <?php if($errors->has('semester')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('semester')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('id_mapel') ? ' has-error' : ''); ?>">
                            <label for="id_mapel" class="col-md-4 control-label">Mata Pelajaran</label>

                            <div class="col-md-6">
                                <select id="id_mapel" type="text" class="form-control select2" name="id_mapel" value="<?php echo e(old('id_mapel')); ?>" required autofocus>
                                <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Auth()->user()->id_mapel == $in->id): ?>
                                    <option value="<?php echo e($in->id); ?>" selected><?php echo e($in->nama_mapel); ?></option>
                                <?php else: ?>
                                <option value="<?php echo e($in->id); ?>" disabled><?php echo e($in->nama_mapel); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('id_mapel')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_mapel')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('tugas1') ? ' has-error' : ''); ?>">
                            <label for="tugas1" class="col-md-4 control-label">Tugas 1</label>

                            <div class="col-md-6">
                                <input id="tugas1" type="number" class="form-control" name="tugas1" value="<?php echo e(old('tugas1')); ?>" required>

                                <?php if($errors->has('tugas1')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tugas1')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('tugas2') ? ' has-error' : ''); ?>">
                            <label for="tugas2" class="col-md-4 control-label">Tugas 2</label>

                            <div class="col-md-6">
                                <input id="tugas2" type="number" class="form-control" name="tugas2" value="<?php echo e(old('tugas2')); ?>" required>

                                <?php if($errors->has('tugas2')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tugas2')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('tugas3') ? ' has-error' : ''); ?>">
                            <label for="tugas3" class="col-md-4 control-label">Tugas 3</label>

                            <div class="col-md-6">
                                <input id="tugas3" type="number" class="form-control" name="tugas3" required>

                                <?php if($errors->has('tugas3')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tugas3')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nilai_sikap" class="col-md-4 control-label">Nilai Sikap</label>

                            <div class="col-md-6">
                                <input id="nilai_sikap" type="number" class="form-control" name="nilai_sikap" required>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('nilai_pengetahuan') ? ' has-error' : ''); ?>">
                            <label for="nilai_pengetahuan" class="col-md-4 control-label">Nilai Pengetahuan</label>

                            <div class="col-md-6">
                                <input id="nilai_pengetahuan" class="form-control" name="nilai_pengetahuan" required>

                                <?php if($errors->has('nilai_pengetahuan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nilai_pengetahuan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('uts') ? ' has-error' : ''); ?>">
                            <label for="uts" class="col-md-4 control-label">UTS</label>

                            <div class="col-md-6">
                                <input id="uts" class="form-control" name="uts" required>

                                <?php if($errors->has('uts')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('uts')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('uas') ? ' has-error' : ''); ?>">
                            <label for="nilai_pengetahuan" class="col-md-4 control-label">UAS</label>

                            <div class="col-md-6">
                                <input id="uas" class="form-control" name="uas" required>

                                <?php if($errors->has('uas')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('uas')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Nilai
                                </button>
                                <a class="btn btn-info" href="/rekapnilai/show/<?php echo e($siswa->id); ?>">Lihat Nilai</a>
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