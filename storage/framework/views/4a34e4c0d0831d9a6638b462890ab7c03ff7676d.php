
<!-- modal tambah tahun ajaran -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Tambah data tahun ajaran
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/tahun-ajaran">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('tahun') ? ' has-error' : ''); ?>">
                            <label for="tahun" class="col-md-4 control-label">Tahun Ajaran</label>

                            <div class="col-md-6">
                                <input id="tahun" type="text" class="form-control" name="tahun" required>

                                <?php if($errors->has('tahun')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tahun')); ?></strong>
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
<!-- end modal tambah tahun ajaran -->    
