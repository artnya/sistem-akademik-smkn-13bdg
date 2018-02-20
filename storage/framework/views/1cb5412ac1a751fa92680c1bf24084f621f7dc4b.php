
<!-- modal edit Kelas -->
<?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="edit<?php echo e($in->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit data Kelas
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/kelas/update/<?php echo e($in->id); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('nis') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Tingkat Kelas</label>

                            <div class="col-md-6">
                                <input id="tingkat_kelas" type="text" class="form-control" name="tingkat_kelas" value="<?php echo e($in->tingkat_kelas); ?>" required>

                                <?php if($errors->has('tingkat_kelas')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tingkat_kelas')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('jumlah_kelas') ? ' has-error' : ''); ?>">
                            <label for="jumlah_kelas" class="col-md-4 control-label">Urutan Kelas Ke</label>

                            <div class="col-md-6">
                                <input type="text" name="jumlah_kelas" value="<?php echo e($in->jumlah_kelas); ?>" class="form-control" id="jumlah_kelas">
                                <?php if($errors->has('jumlah_kelas')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('jumlah_kelas')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('addres') ? ' has-error' : ''); ?>">
                            <label for="nip" class="col-md-4 control-label">Wali Kelas</label>

                            <div class="col-md-6">
                                <select id="nip" type="text" class="form-control" name="nip">
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($x->id); ?>" <?php if(($in->nip) == ($x->id)): ?> selected <?php endif; ?>> <?php echo e($x->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('nip')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nip')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('id_jurusan') ? ' has-error' : ''); ?>">
                            <label for="id_jurusan" class="col-md-4 control-label">Jurusan</label>

                            <div class="col-md-6">
                                <select name="id_jurusan" id="id_jurusan">
                                    <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $xx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($xx->id); ?>" <?php if(($in->id_jurusan) == ($xx->id)): ?> selected <?php endif; ?>><?php echo e($xx->nama_jurusan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('id_jurusan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_jurusan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                                <button type="reset" data-dismiss="modal" class="btn btn-warning">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
<!-- end modal edit Kelas -->    

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
