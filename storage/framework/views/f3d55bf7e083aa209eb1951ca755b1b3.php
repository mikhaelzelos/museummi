
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

                <form action="<?php echo e(route('instrumenmodern.update', $instrumenmodern->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group">
                        <label for="nomor_regist">nomor_regist:</label>
                        <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="nomor_regist" value="<?php echo e($instrumenmodern->nomor_regist); ?>">
                    </div>

                    <div class="form-group">
                        <label for="nama_instrumen">nama_instrumen:</label>
                        <input type="text" id="nama_instrumen" name="nama_instrumen" class="form-control" placeholder="nama_instrumen"  value="<?php echo e($instrumenmodern->nama_instrumen); ?>">
                    </div>

                    <div class="form-group">
                        <label for="penyumbang">penyumbang:</label>
                        <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="penyumbang"  value="<?php echo e($instrumenmodern->penyumbang); ?>">
                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="text" id="quantity" name="quantity" class="form-control" placeholder="quantity"  value="<?php echo e($instrumenmodern->quantity); ?>">
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

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\meseum\resources\views/instrumenmodern/edit.blade.php ENDPATH**/ ?>