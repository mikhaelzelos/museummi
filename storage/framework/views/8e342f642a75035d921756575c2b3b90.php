
<?php $__env->startSection('container'); ?>
<div class="row justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-10"> <!-- Adjust column width as needed -->
        <div class="card" style="border-radius: 39px;">
            <div class="card-header">
                <h2 class="text-center">Add New</h2>
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

                <form action="<?php echo e(route('memorabilia.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="nomor_regist">nomor_regist:</label>
                        <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="Nomor Regist">
                    </div>

                    <div class="form-group">
                        <label for="penyumbang">penyumbang:</label>
                        <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="Penyumbang">
                    </div>

                    <div class="form-group">
                        <label for="tgl_masuk">tgl_masuk:</label>
                        <input type="text" id="tgl_masuk" name="tgl_masuk" class="form-control" placeholder="Tanggal Masuk">
                    </div>

                    <div class="form-group">
                        <label for="Biografi">Biografi:</label>
                        <input type="text" id="Biografi" name="Biografi" class="form-control" placeholder="Biografi">
                    </div>

                    <div class="form-group">
                        <label for="foto">foto:</label>
                        <input type="text" id="foto" name="foto" class="form-control" placeholder="Foto">
                    </div>

                    <div class="form-group">
                        <label for="nama">nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">deskripsi:</label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="deskripsi">
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

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\meseum\resources\views/memorabilia/create.blade.php ENDPATH**/ ?>