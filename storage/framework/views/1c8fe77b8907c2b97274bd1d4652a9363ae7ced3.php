<?php $__env->startSection('content'); ?>
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e($siswa->user->username); ?> <?php echo e($siswa->user->name); ?> - <?php echo e($siswa->kelas['tingkat_kelas']); ?> <?php echo e($siswa->jurusan['nama_jurusan']); ?> <?php echo e($siswa->kelas['jumlah_kelas']); ?>

      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Rekap Nilai Siswa</a></li>
        <li><a href="#">Cari Data Siswa</a></li>
        <li class="active">Data Nilai <?php echo e($siswa->user->name); ?></li>
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
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('/uploadgambar/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo e($siswa->user->name); ?></h3>
              <h5 class="widget-user-desc">Siswa</h5>
            </div>
            <div class="widget-user-image">
              <img <?php if($siswa->user->photo == 'Not Setting'): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($siswa->user->photo); ?>" <?php endif; ?> class="img-circle img-responsive img-thumbnail" height="10" width="234" style="float:left;" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">NIS</h5>
                    <span class="description-text"><?php echo e($siswa->user->username); ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-offset-4">
                  <div class="description-block">
                    <h5 class="description-header">KELAS</h5>
                    <span class="description-text"><?php echo e($siswa->kelas['tingkat_kelas']); ?> <?php echo e($siswa->jurusan['nama_jurusan']); ?> <?php echo e($siswa->kelas['jumlah_kelas']); ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
      </div>
      <!-- Default box -->
      <div class="box box-solid box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Nilai <?php echo e($siswa->mapel->nama_mapel); ?> SEMESTER <?php echo e($siswa->semester); ?> KELAS <?php echo e($siswa->kelas->tingkat_kelas); ?> <?php echo e($siswa->jurusan->nama_jurusan); ?> <?php echo e($siswa->kelas->jumlah_kelas); ?></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body" id="1">
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
            <table id="rekap" class="table table-bordered table-hover table-responsive">
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
                      <form id="edit-nilai-form" action="<?php echo e(route('rekap.update', $siswa->id)); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                    <?php if(!$siswa->count() < 1): ?>
                      <td><input type="text" class="form-control" name="id_mapel" value="<?php echo e($siswa->mapel['nama_mapel']); ?>" disabled></td>
                      <td><input type="text" class="form-control" name="tugas1" value="<?php echo e($siswa->tugas1); ?>"></td>
                      <td><input type="text" class="form-control" name="tugas2" value="<?php echo e($siswa->tugas2); ?>"></td>
                      <td><input type="text" class="form-control" name="tugas3" value="<?php echo e($siswa->tugas3); ?>"></td>
                      <td><input type="text" class="form-control" name="nilai_sikap" value="<?php echo e($siswa->nilai_sikap); ?>"></td>
                      <td><input type="text" class="form-control" name="nilai_pengetahuan" value="<?php echo e($siswa->nilai_pengetahuan); ?>"></td>
                      <td><input type="text" class="form-control" name="uts" value="<?php echo e($siswa->uts); ?>"></td>
                      <td><input type="text" class="form-control" name="uas" value="<?php echo e($siswa->uas); ?>"></td>
                      <td><input type="text" class="form-control" name="rata_rata" value="<?php echo e($siswa->mapel['kkm']); ?>" disabled></td>
                    </form>
                </tr>
                <?php else: ?>
                <td class="text-center" colspan="12">Belum ada nilai yang di input.</td>
                <?php endif; ?>
              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a class="btn btn-info" onclick="event.preventDefault();
                                  document.getElementById('edit-nilai-form').submit();">
          <i class="fa fa-check"></i> Edit Nilai
        </a>
        <a href="/rekapnilai/show/<?php echo e($siswa->id_siswa); ?>" class="btn btn-warning">Kembali</a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>