
<?php $__env->startSection('container'); ?>
<div class="row justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-10"> <!-- Adjust column width as needed -->
        <div class="card" style="border-radius: 39px;">
            <div class="card-header">
                <h2 class="text-center">Edit</h2>
            </div>
            <div class="card-body">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('piringanhitam.update', $piringanhitam->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group">
                        <label for="nomor_regist">nomor_regist:</label>
                        <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="nomor_regist" value="<?php echo e($piringanhitam->nomor_regist); ?>">
                    </div>

                    <div class="form-group">
                        <label for="penyumbang">Penyumbang:</label>
                        <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="Tanggal Masuk"  value="<?php echo e($piringanhitam->penyumbang); ?>">
                    </div>

                    <div class="form-group">
                        <label for="tgl_masuk">tgl_masuk:</label>
                        <input type="text" id="tgl_masuk" name="tgl_masuk" class="form-control" placeholder="tgl_masuk"  value="<?php echo e($piringanhitam->tgl_masuk); ?>">
                    </div>

                    <div class="form-group">
                        <label for="cover">Cover:</label>
                        <input type="text" id="cover" name="cover" class="form-control" placeholder="Cover"  value="<?php echo e($piringanhitam->cover); ?>">
                    </div>

                    <div class="form-group">
                        <label for="lagu">lagu:</label>
                        <input type="text" id="lagu" name="lagu" class="form-control" placeholder="lagu"  value="<?php echo e($piringanhitam->lagu); ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">deskripsi:</label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="deskripsi"  value="<?php echo e($piringanhitam->deskripsi); ?>">
                    </div>

                    <div class="form-group">
                        <label for="rak">Rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="Rak"  value="<?php echo e($piringanhitam->rak); ?>">
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\meseum\resources\views/piringanhitam/edit.blade.php ENDPATH**/ ?>