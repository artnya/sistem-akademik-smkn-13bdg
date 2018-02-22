<?php $__env->startSection('title','Ajax Live Search Table Demo -'); ?>

<?php $__env->startSection('content'); ?>
<!-- end messages session pop-up -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Rekap Nilai Siswa
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Rekap Nilai Siswa</a></li>
        <li class="active">Lihat Data Rekap Nilai Siswa</li>
      </ol>
    </section>

<!-- notification session -->
<?php if(session('message')): ?>      
  <?php echo $__env->make('layouts.session', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Kelas</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<!-- search box container starts  -->
			    <div class="search">
			        <h3 class="text-center title-color">Pencarian data siswa berdasarkan kelas</h3>
			        <p>&nbsp;</p>
			        <div class="row">
			            <div class="col-lg-10 col-lg-offset-0">
			                <div class="input-group">
			                	<form action="<?php echo e(url('query')); ?>" method="GET">
			                		<?php echo e(csrf_field()); ?>

			                		<input type="text" autocomplete="off" name="q" class="form-control input-lg select2" placeholder="Enter Blog Title Here">
				                    <button class="btn btn-info btn-lg" type="submit">Cari</button>
			                	</form>
								<div class="card-panel green white-text">Hasil pencarian : <b></b></div>
									<?php $no= 1; ?>
								    <div class="row">
										<div class="col-lg-12">
											<table class="table table-border table-striped table-hover table-responsive">
												<thead>
													<tr>
														<td>No</td>
														<td>Nama Siswa</td>
														<td>Kelas</td>
														<td>Aksi</td>
													</tr>
												</thead>
												<tbody>
								   					<tr>
								   						<?php $no = 1; ?>
								   					<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								   						<td><?php echo e($no); ?></td>
								   						<td><?php echo e($data->name); ?></td>
								   						<td><?php echo e($data->kelas['tingkat_kelas']); ?> - <?php echo e($data->jurusan['nama_jurusan']); ?> - <?php echo e($data->kelas['tingkat_kelas']); ?></td>
								   						<td>a</td>
								   					</tr>	
								   					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</tbody>
											</table>
										</div>
									</div>

								</div>

			                </div>
			            </div>
			        </div>   
			    </div>  
			<!-- search box container ends  -->
			<div id="txtHint" class="title-color" style="padding-top:50px; text-align:center;" ><b>Blogs information will be listed here...</b></div>
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