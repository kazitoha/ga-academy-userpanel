

 <?php $__env->startSection('adminpanel-navbar'); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Add Banner</h4>

                <?php if($errors->any()): ?>
                 <div class="alert alert-danger" role="alert">
                     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><?php echo e($error); ?></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>
                <?php endif; ?>

                <form class="custom-validation" action="<?php echo e(route('banner.store')); ?>" method="post" enctype="multipart/form-data" novalidate>
                    <?php echo csrf_field(); ?>
                    
            
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('title')); ?>" placeholder="Enter banner title.">
                        <p style="color:red">The title must not be greater than 60 characters.</p>
                    </div>

                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="banner_file" class="form-control <?php $__errorArgs = ['banner_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('banner_file')); ?>" >
                    </div>
                    
                    <div class="form-group mb-0">
                        <div>
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




    <div class="row">
      <?php $__currentLoopData = $bannerData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6">
            <div class="gallery-box text-center card p-2">
                <a href="<?php echo e(asset('storage/banner')); ?>/<?php echo e($value->file_path); ?>" class="text-dark gallery-popup">
                    <div class="position-relative gallery-content">
                        <div class="demo-img">
                            <img src="<?php echo e(asset('storage/banner')); ?>/<?php echo e($value->file_path); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-icon">
                                <i class="ti-zoom-in text-white"></i>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <h5 class="font-size-14 text-truncate mb-2"><?php echo e($value->banner_title); ?></h5>
                        </div>
                    </div><br>
                    <div class="btn-group" role="group" aria-label="Basic example">

                      <!-- <a class="btn btn-outline-info btn-sm" href="">Edit</a> -->

                      <a class="btn btn-outline-warning btn-sm" href="<?php echo e(route('banner.delete',base64_encode($value->id))); ?>" >Delete</a>

                    </div>
                </a>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  


    </div>
    <!-- end row -->



</div> <!-- end row --> 








<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/banner/banner.blade.php ENDPATH**/ ?>