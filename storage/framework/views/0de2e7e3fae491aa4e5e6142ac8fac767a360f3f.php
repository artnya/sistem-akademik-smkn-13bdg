
<!-- modal edit mapel -->
<?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="edit<?php echo e($in->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit data Mata Pelajaran
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/mapel/update/<?php echo e($in->id); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('nama_mapel') ? ' has-error' : ''); ?>">
                            <label for="nama_mapel" class="col-md-4 control-label">Nama Mata Pelajaran</label>

                            <div class="col-md-6">
                                <input id="nama_mapel" type="text" class="form-control" name="nama_mapel" value="<?php echo e($in->nama_mapel); ?>" required>

                                <?php if($errors->has('nama_mapel')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nama_mapel')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <input type="hidden" value="Non produktif" name="type_mapel">
                        <div class="form-group<?php echo e($errors->has('kkm') ? ' has-error' : ''); ?>">
                            <label for="kkm" class="col-md-4 control-label">KKM</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="kkm" value="<?php echo e($in->kkm); ?>" required>
                                <?php if($errors->has('kkm')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kkm')); ?></strong>
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
<!-- end modal edit mapel -->    

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
