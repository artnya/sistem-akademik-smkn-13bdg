
<!-- modal edit siswa -->
<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="edit<?php echo e($in->id); ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Edit data Siswa
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/siswa/update/<?php echo e($in->id); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">
                            <label for="photo" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                                <img id="showgambar" <?php if($in->photo == 'Not Setting' || $in->photo == NULL): ?> src="https://s17.postimg.org/bfpk18wcv/default.jpg" <?php else: ?> src="<?php echo e(url('uploadgambar')); ?>/<?php echo e($in->photo); ?>" <?php endif; ?> class="img-thumbnail img-responsive">
                                <?php if($errors->has('photo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('photo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">NIS</label>

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
                            <label for="name" class="col-md-4 control-label">Nama Siswa</label>

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

                        <div class="form-group<?php echo e($errors->has('id_kelas') ? ' has-error' : ''); ?>">
                            <label for="id_kelas" class="col-md-4 control-label">Kelas</label>

                            <div class="col-md-6">
                                <select name="id_kelas" class="select2" data-width="100%" id="id_kelas">
                                    <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($x->id); ?>" <?php if(($in->id_kelas) == ($x->id)): ?> selected <?php endif; ?> ><?php echo e($x->tingkat_kelas); ?> - <?php echo e($x->jurusan['nama_jurusan']); ?> - <?php echo e($x->jumlah_kelas); ?></option>
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
                                <select name="id_jurusan" class="form-control select2" data-width="100%" id="id_jurusan">
                                    <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($x->id); ?>" <?php if(($in->id_jurusan) == ($x->id)): ?> selected <?php endif; ?> ><?php echo e($x->nama_jurusan); ?></option>
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
                                    <option value="<?php echo e($in->goldar); ?>" selected disabled><?php echo e($in->goldar); ?></option>
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
                            <label for="nama_ortu" class="col-md-4 control-label">Nama Ortu</label>

                            <div class="col-md-6">
                                <input id="nama_ortu" type="text" class="form-control" name="nama_ortu" value="<?php echo e($in->nama_ortu); ?>" required>

                                <?php if($errors->has('nama_ortu')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nama_ortu')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan_ortu" class="col-md-4 control-label">Pekerjaan Ortu</label>

                            <div class="col-md-6">
                                <input id="pekerjaan_ortu" type="text" class="form-control" name="pekerjaan_ortu" value="<?php echo e($in->pekerjaan_ortu); ?>" required>

                                <?php if($errors->has('pekerjaan_ortu')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('pekerjaan_ortu')); ?></strong>
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
<!-- end modal edit siswa -->    

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
