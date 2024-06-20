
<?php $__env->startSection('container'); ?>
<div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-lg-8">
        <div class="card shadow-sm" style="border-radius: 15px;">
            <div class="card-header text-center">
                <h2>Edit CD</h2>
            </div>
            <div class="card-body p-4">
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

                <form action="<?php echo e(route('cd.update', $cd->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group mb-3">
                        <label for="nomor_regist">Nomor Registrasi:</label>
                        <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="Nomor Registrasi" value="<?php echo e($cd->nomor_regist); ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label for="penyumbang">Penyumbang:</label>
                        <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="Penyumbang" value="<?php echo e($cd->penyumbang); ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label for="tgl_masuk">Tanggal Masuk:</label>
                        <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" value="<?php echo e($cd->tgl_masuk); ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label for="judul">Judul:</label>
                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" value="<?php echo e($cd->judul); ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label for="lagu">Lagu:</label>
                        <input type="text" id="lagu" name="lagu" class="form-control" placeholder="Lagu" value="<?php echo e($cd->lagu); ?>">
                    </div>

                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi:</label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo e($cd->deskripsi); ?>">
                    </div>

                    <div class="form-group mb-4">
                        <label for="rak">Rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="Rak" value="<?php echo e($cd->rak); ?>">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\meseum\resources\views/cd/edit.blade.php ENDPATH**/ ?>