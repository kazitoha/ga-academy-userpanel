    

    <?php $__env->startSection('adminpanel-navbar'); ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title d-flex justify-content-center"><b>সুবর্ণ জয়ন্তী কর্নার</b></h4>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <form class="custom-validation" action="<?php echo e(route('GoldenJubileeIndependenceCorner.store')); ?>"
                            method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-0">
                                <div>
                                    <div class="row">
                                        <div class="card">
                                            <textarea id="elm1" name="GoldenJubilee" ><?php if($total>=1): ?><?php echo e($GoldenJubileeData->description); ?><?php endif; ?></textarea>
                                        </div> <!-- end col -->
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->

        </div> <!-- end row -->



    <?php $__env->stopSection(); ?>

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/independenceCorner/GoldenJubileeIndependenceCorner.blade.php ENDPATH**/ ?>