    <div class="modal fade" id="edit-photo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                     Foto Profil Saya
                </div>
                <div class="modal-body">
                <div class="panel-body">
                	<?php if(Auth::user()->photo == 'Not Setting' || Auth::user()->photo == NULL): ?>
                	<?php else: ?>
                	<form action="/profile/resetpic/<?php echo e(Auth::user()->id); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                          <input type="hidden" name="reset" value="Not Setting">
	                         <button type="submit" class="btn btn-danger">
	                             Hapus Foto
	                         </button>
                    </form>
                    <?php endif; ?>
                    <form class="form-horizontal" method="POST" action="/profile/uploadpic/<?php echo e(Auth::user()->id); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">
                            <label for="photo" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                                <img id="showgambar" <?php if(Auth::user()->photo == 'Not Setting' || Auth::user()->photo == NULL): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e(Auth::user()->photo); ?>" <?php endif; ?> class="img-thumbnail img-responsive" width="100" height="100">
                                <?php if($errors->has('photo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('photo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">
                            <label for="photo" class="col-md-4 control-label">Upload Photo Profile</label>

                            <div class="col-md-6">

                            	<input id="photo" type="file" class="form-control" name="photo" value="<?php echo e(Auth::user()->photo); ?>">

                                <?php if($errors->has('photo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('photo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Upload
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
<!-- end modal edit profile -->    

