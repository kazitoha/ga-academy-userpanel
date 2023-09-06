<?php $__env->startSection('adminpanel-navbar'); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title d-flex justify-content-center">Bongobondhu</h4>

                    <form class="custom-validation" action="<?php echo e(route('bongobondhu.store')); ?>" method="post"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <textarea id="elm1" name="description">
                                <?php if($total >= 1): ?>
                                <?php echo e($BongobondhuData->description); ?>

                                <?php endif; ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Type something" name="file_name" />
                        </div>
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->


        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title d-flex justify-content-center">Image</h4>
                    <?php if(!empty($BongobondhuData->file_name)): ?>
                        <div class="position-relative gallery-content">
                            <div class="demo-img">
                                <img src="<?php echo e(asset('storage/bongobondhu')); ?>/<?php echo e($BongobondhuData->file_name); ?>"
                                    alt="" class="img-fluid mx-auto d-block rounded"><br>
                            </div>
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-icon">
                                    <i class="ti-zoom-in text-white"></i>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="position-relative gallery-content">
                            <div class="demo-img">
                                <img src="<?php echo e(asset('storage/default_img/Image_not_available.png')); ?>" alt=""
                                    class="img-fluid mx-auto d-block rounded">
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

    </div> <!-- end row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/independenceCorner/Bongobondhu.blade.php ENDPATH**/ ?>