
<!-- modal tambah Jurusan -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Tambah data Jurusan
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/jurusan/add">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('nama_jurusan') ? ' has-error' : ''); ?>">
                            <label for="nama_jurusan" class="col-md-4 control-label">Nama Jurusan</label>

                            <div class="col-md-6">
                                <input id="nama_jurusan" type="text" class="form-control" name="nama_jurusan" required>

                                <?php if($errors->has('nama_jurusan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nama_jurusan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('type_jurusan') ? ' has-error' : ''); ?>">
                            <label for="type_jurusan" class="col-md-4 control-label">Type Jurusan</label>

                            <div class="col-md-6">
                                <input type="text" name="type_jurusan" class="form-control" id="type_jurusan">
                                <?php if($errors->has('type_jurusan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('type_jurusan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary ajax">
                                    Tambah
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
<!-- end modal tambah Jurusan -->    
