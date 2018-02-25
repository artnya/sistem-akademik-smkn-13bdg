<?php $__env->startSection('content'); ?>
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Saya
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Saya</a></li>
        <li class="active">Lihat Nilai Saya</li>
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
      <div class="box box-solid box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester I</h3>

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
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            <?php endif; ?>
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
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
                      <td>Edit Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php if(!$semester1->count() < 1): ?>
                    <?php $__currentLoopData = $semester1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td><?php echo e($in->mapel['nama_mapel']); ?></td>
                      <td><?php echo e($in->tugas1); ?></td>
                      <td><?php echo e($in->tugas2); ?></td>
                      <td><?php echo e($in->tugas3); ?></td>
                      <td><?php echo e($in->nilai_sikap); ?></td>
                      <td><?php echo e($in->nilai_pengetahuan); ?></td>
                      <td><?php echo e($in->uts); ?></td>
                      <td><?php echo e($in->uas); ?></td>
                      <td><?php echo e($in->mapel['kkm']); ?></td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Edit</button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <td class="text-center" colspan="12">Nilai Mata Pelajaran belum ada nilai yang di input.</td>
                    <?php endif; ?>
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

      <!-- SEMESTER II -->
      <div class="box box-solid box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester II</h3>

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
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            <?php endif; ?>
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
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
                      <td>Edit Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php if(!$semester2->count() < 1): ?>
                    <?php $__currentLoopData = $semester2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td><?php echo e($in->mapel['nama_mapel']); ?></td>
                      <td><?php echo e($in->tugas1); ?></td>
                      <td><?php echo e($in->tugas2); ?></td>
                      <td><?php echo e($in->tugas3); ?></td>
                      <td><?php echo e($in->nilai_sikap); ?></td>
                      <td><?php echo e($in->nilai_pengetahuan); ?></td>
                      <td><?php echo e($in->uts); ?></td>
                      <td><?php echo e($in->uas); ?></td>
                      <td><?php echo e($in->mapel['kkm']); ?></td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Edit</button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <td class="text-center" colspan="12">Nilai Mata Pelajaran belum ada nilai yang di input.</td>
                    <?php endif; ?>
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

      <!-- SEMESTER III -->
      <div class="box box-solid box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester III</h3>

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
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            <?php endif; ?>
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
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
                      <td>Edit Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php if(!$semester3->count() < 1): ?>
                    <?php $__currentLoopData = $semester3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $on): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td><?php echo e($on->mapel['nama_mapel']); ?></td>
                      <td><?php echo e($on->tugas1); ?></td>
                      <td><?php echo e($on->tugas2); ?></td>
                      <td><?php echo e($on->tugas3); ?></td>
                      <td><?php echo e($on->nilai_sikap); ?></td>
                      <td><?php echo e($on->nilai_pengetahuan); ?></td>
                      <td><?php echo e($on->uts); ?></td>
                      <td><?php echo e($on->uas); ?></td>
                      <td><?php echo e($on->mapel['kkm']); ?></td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Edit</button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <td class="text-center" colspan="12">Nilai Mata Pelajaran belum ada nilai yang di input.</td>
                    <?php endif; ?>
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    <!-- SEMESTER III -->
      <div class="box box-solid box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester III</h3>

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
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            <?php endif; ?>
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
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
                      <td>Edit Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php if(!$semester3->count() < 1): ?>
                    <?php $__currentLoopData = $semester3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $on): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td><?php echo e($on->mapel['nama_mapel']); ?></td>
                      <td><?php echo e($on->tugas1); ?></td>
                      <td><?php echo e($on->tugas2); ?></td>
                      <td><?php echo e($on->tugas3); ?></td>
                      <td><?php echo e($on->nilai_sikap); ?></td>
                      <td><?php echo e($on->nilai_pengetahuan); ?></td>
                      <td><?php echo e($on->uts); ?></td>
                      <td><?php echo e($on->uas); ?></td>
                      <td><?php echo e($on->mapel['kkm']); ?></td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Edit</button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <td class="text-center" colspan="12">Nilai Mata Pelajaran belum ada nilai yang di input.</td>
                    <?php endif; ?>
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    <!-- SEMESTER IV -->
      <div class="box box-solid box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester IV</h3>

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
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            <?php endif; ?>
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
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
                      <td>Edit Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php if(!$semester4->count() < 1): ?>
                    <?php $__currentLoopData = $semester4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $on): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td><?php echo e($on->mapel['nama_mapel']); ?></td>
                      <td><?php echo e($on->tugas1); ?></td>
                      <td><?php echo e($on->tugas2); ?></td>
                      <td><?php echo e($on->tugas3); ?></td>
                      <td><?php echo e($on->nilai_sikap); ?></td>
                      <td><?php echo e($on->nilai_pengetahuan); ?></td>
                      <td><?php echo e($on->uts); ?></td>
                      <td><?php echo e($on->uas); ?></td>
                      <td><?php echo e($on->mapel['kkm']); ?></td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Edit</button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <td class="text-center" colspan="12">Nilai Mata Pelajaran belum ada nilai yang di input.</td>
                    <?php endif; ?>
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    <!-- SEMESTER V -->
      <div class="box box-solid box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester V</h3>

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
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            <?php endif; ?>
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
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
                      <td>Edit Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php if(!$semester5->count() < 1): ?>
                    <?php $__currentLoopData = $semester5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $on): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td><?php echo e($on->mapel['nama_mapel']); ?></td>
                      <td><?php echo e($on->tugas1); ?></td>
                      <td><?php echo e($on->tugas2); ?></td>
                      <td><?php echo e($on->tugas3); ?></td>
                      <td><?php echo e($on->nilai_sikap); ?></td>
                      <td><?php echo e($on->nilai_pengetahuan); ?></td>
                      <td><?php echo e($on->uts); ?></td>
                      <td><?php echo e($on->uas); ?></td>
                      <td><?php echo e($on->mapel['kkm']); ?></td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Edit</button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <td class="text-center" colspan="12">Nilai Mata Pelajaran belum ada nilai yang di input.</td>
                    <?php endif; ?>
                  </tbody>
                </table>                  
                </div>
              </div>
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>

    <!-- SEMESTER VI -->
      <div class="box box-solid box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Saya Semester VI</h3>

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
            <a href="#" style="margin: 10px 10px;" data-toggle="modal" class="btn btn-success ajax" data-target="#add"><i class="fa fa-plus"></i> Tambah Nilai</a>
            <?php endif; ?>
            </div>
            <div>
              <input type="submit" id="actions" value="Hapus" hidden>
            </div>
              <div class="row">
                <div class="col-md-12">
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
                      <td>Edit Nilai</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php if(!$semester6->count() < 1): ?>
                    <?php $__currentLoopData = $semester6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $on): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td><?php echo e($on->mapel['nama_mapel']); ?></td>
                      <td><?php echo e($on->tugas1); ?></td>
                      <td><?php echo e($on->tugas2); ?></td>
                      <td><?php echo e($on->tugas3); ?></td>
                      <td><?php echo e($on->nilai_sikap); ?></td>
                      <td><?php echo e($on->nilai_pengetahuan); ?></td>
                      <td><?php echo e($on->uts); ?></td>
                      <td><?php echo e($on->uas); ?></td>
                      <td><?php echo e($on->mapel['kkm']); ?></td>
                      <td><button type="button" id="elementId" class="btn btn-xs btn-warning">Edit</button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <td class="text-center" colspan="12">Nilai Mata Pelajaran belum ada nilai yang di input.</td>
                    <?php endif; ?>
                  </tbody>
                </table>                  
                </div>
              </div>
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