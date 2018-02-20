
<!-- modal edit guru -->
<?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="edit<?php echo e($in->id); ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit data Guru
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/guru/update/<?php echo e($in->id); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">
                            <label for="photo" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                                <img id="showgambar" <?php if($in->photo == 'Not Setting' || $in->photo == NULL): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($in->photo); ?>" <?php endif; ?> class="img-thumbnail img-responsive" width="100" height="100">
                                <?php if($errors->has('photo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('photo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">NIP</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="<?php echo e($in->username); ?>" required autofocus>

                                <?php if($errors->has('username')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Nama Guru</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e($in->name); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('addres') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="<?php echo e($in->email); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('id_mapel') ? ' has-error' : ''); ?>">
                            <label for="id_mapel" class="col-md-4 control-label">Guru Mata Pelajaran</label>

                            <div class="col-md-6">
                                <select name="id_mapel" class="form-control select2" data-width="100%" id="id_mapel">
                                    <?php $__currentLoopData = $mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($x->id); ?>" <?php if(($in->id_mapel) == ($x->id)): ?> selected <?php endif; ?> ><?php echo e($x->nama_mapel); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $mapelproduktif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($z->id); ?>" <?php if(($in->id_mapel) == ($z->id)): ?> selected <?php endif; ?> ><?php echo e($z->nama_mapel); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('id_mapel')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('id_mapel')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tmp_lahir" class="col-md-4 control-label">Tempat Lahir</label>

                            <div class="col-md-6">
                                <input id="tmp_lahir" type="text" class="form-control" name="tmp_lahir" value="<?php echo e($in->tmp_lahir); ?>" required>

                                <?php if($errors->has('tmp_lahir')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tmp_lahir')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="<?php echo e($in->tgl_lahir); ?>" required>

                                <?php if($errors->has('tgl_lahir')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tgl_lahir')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <select id="jenis_kelamin" type="date" class="form-control" name="jenis_kelamin">
                                    <option value="<?php echo e($in->jenis_kelamin); ?>" selected><?php echo e($in->jenis_kelamin); ?></option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                                <?php if($errors->has('jenis_kelamin')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('jenis_kelamin')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="agama" class="col-md-4 control-label">Agama</label>

                            <div class="col-md-6">
                                <input id="agama" type="text" class="form-control" name="agama" value="<?php echo e($in->agama); ?>" required>

                                <?php if($errors->has('agama')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('agama')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="goldar" class="col-md-4 control-label">Goldar</label>

                            <div class="col-md-6">
                                <select name="goldar" class="form-control" id="goldar">
                                    <option value="<?php echo e($in->goldar); ?>" selected><?php echo e($in->goldar); ?></option>
                                    <option value="O">O</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                </select>
                                <?php if($errors->has('goldar')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('goldar')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="<?php echo e($in->alamat); ?>" required>

                                <?php if($errors->has('alamat')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('alamat')); ?></strong>
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
<!-- end modal edit guru -->    

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
