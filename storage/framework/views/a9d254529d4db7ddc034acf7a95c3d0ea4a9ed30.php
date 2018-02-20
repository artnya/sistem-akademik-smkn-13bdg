<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Verifikasi telah di kirim.</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="#">
                        <?php echo e(csrf_field()); ?>


                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-info"></i> Berhasil!</h4>
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
                        <!-- sweet alert -->
                        <link rel="stylesheet" href="/css/sweetalert.css">
                        <!-- sweet alert -->
                        <script src="/js/sweetalert.js"></script>
                        <script>
                            swal("<?php echo session('message'); ?>", "", "success");
                        </script>
                        <?php endif; ?>
                      </div>
                        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <label for="nis" class="col-md-4 control-label">Username (NIS/NIP Anda)</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="<?php echo e(Auth()->user()->username); ?>" disabled required>

                                <?php if($errors->has('username')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(Auth()->user()->email); ?>" disabled required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('id_kelas') ? ' has-error' : ''); ?>">
                            <label for="id_kelas" class="col-md-4 control-label">Kelas</label>

                            <div class="col-md-6">
                                <select id="id_kelas" class="form-control select2" name="id_kelas" value="<?php echo e(old('id_kelas')); ?>" disabled required>
                                    <option selected disabled>---PILIH KELAS---</option>
                                    <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($in->id); ?>" <?php if((Auth()->user()->id_kelas) == ($in->id)): ?> selected <?php endif; ?>><?php echo e($in->tingkat_kelas); ?> - <?php echo e($in->jumlah_kelas); ?></option>
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
                                <select id="id_jurusan" class="form-control select2" name="id_jurusan" value="<?php echo e(old('id_jurusan')); ?>" disabled required>
                                    <option selected disabled>---PILIH JURUSAN---</option>
                                    <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $on): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($on->id); ?>" <?php if((Auth()->user()->id_jurusan) == ($on->id)): ?> selected <?php endif; ?>><?php echo e($on->nama_jurusan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('id_jurusan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_jurusan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <input type="hidden" value="5" name="role">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" disabled>
                                    Tunggu konfirmasi...
                                </button>
                                <a class="btn btn-primary" href="/changepassword">Ganti Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>