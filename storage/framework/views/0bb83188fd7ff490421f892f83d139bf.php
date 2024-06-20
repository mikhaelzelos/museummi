
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

                <form action="<?php echo e(route('komponen.update', $komponen->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group">
                        <label for="nama_komponen">nama_komponen:</label>
                        <input type="text" id="nama_komponen" name="nama_komponen" class="form-control" placeholder="nama_komponen" value="<?php echo e($komponen->nama_komponen); ?>">
                    </div>

                    <div class="form-group">
                        <label for="dekripsi">deskripsi:</label>
                        <input type="text" id="dekripsi" name="dekripsi" class="form-control" placeholder="dekripsi"  value="<?php echo e($komponen->dekripsi); ?>">
                    </div>

                    <div class="form-group">
                        <label for="kuantitas">kuantitas:</label>
                        <input type="text" id="kuantitas" name="kuantitas" class="form-control" placeholder="kuantitas"  value="<?php echo e($komponen->kuantitas); ?>">
                    </div>

                    <div class="form-group">
                        <label for="rak">rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="rak"  value="<?php echo e($komponen->rak); ?>">
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

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\meseum\resources\views/komponen/edit.blade.php ENDPATH**/ ?>