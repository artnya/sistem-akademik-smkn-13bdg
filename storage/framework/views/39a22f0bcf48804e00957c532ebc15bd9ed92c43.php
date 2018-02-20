
<!-- modal edit kelas -->
<?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="delete<?php echo e($in->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Konfirmasi
                </div>
                <div class="modal-body">
                <div class="panel-body">
                    Anda yakin ingin menghapusnya?
                </div>
                <div class="modal-footer">
                    <a href="/kelas/delete/<?php echo e($in->id); ?>" class="btn btn-danger">Ya</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>
                </div>
            </div>
        </div>
    </div>
<!-- end modal edit kelas -->    

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
