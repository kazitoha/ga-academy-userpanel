

 <?php $__env->startSection('adminpanel-navbar'); ?>
  <!-- Lightbox css -->
<link href="<?php echo e(asset('admin_asset/assets/libs/magnific-popup/magnific-popup.css')); ?>" rel="stylesheet" type="text/css" />
<div class="container-fluid">


        <!-- Plugins css -->
<link href="<?php echo e(asset('admin_asset/assets/libs/dropzone/min/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />




    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Gallery</h4>

                

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">



        <form action="<?php echo e(route('gallery.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                     <!-- showing error -->
                        <?php if($errors->all()): ?>
                              <div class="alert alert-danger">
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                        <?php endif; ?>
                     <!--end showing error -->
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="font-size-14">Select Category</h5>
                            <select class=" form-control form-control-lg form-select  <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-label="Default select example" name="category">
                                  <option selected disabled>Open this select menu</option>
                                  <option value="1">Offices</option>
                                  <option value="2">Teachers</option>
                                  <option value="3">Others</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-4 mt-md-0"><br>
                                <h5 class="font-size-14">Title</h5>
                                <input class="form-control form-control-lg <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e(old('title')); ?>" type="text" placeholder="Enter title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-4 mt-md-0"><br>
                                <h5 class="font-size-14">Select Files</h5>
                                <input class="form-control form-control-lg <?php $__errorArgs = ['file_name[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="file_name[]" type="file" multiple>
                            </div>
                        </div>

                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Send Files</button>
                    </div>

                </div>
            </div>
        </div>

      </form>

    </div>
    <div class="row">
      <?php $__currentLoopData = $galleryData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6">
            <div class="gallery-box text-center card p-2">
                <a href="<?php echo e(asset('storage/gallery')); ?>/<?php echo e($value->file_path); ?>" class="text-dark gallery-popup">
                    <div class="position-relative gallery-content">
                        <div class="demo-img">
                            <img src="<?php echo e(asset('storage/gallery')); ?>/<?php echo e($value->file_path); ?>" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-icon">
                                <i class="ti-zoom-in text-white"></i>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <h5 class="font-size-14 text-truncate mb-2"><?php echo e($value->title); ?></h5>
                        </div>
                    </div><br>
                    <div class="btn-group" role="group" aria-label="Basic example">

                      <a class="btn btn-outline-info btn-sm" href="<?php echo e(route('gallery.edit',base64_encode($value->id))); ?>">Edit</a>

                      <a class="btn btn-outline-warning btn-sm" href="<?php echo e(route('gallery.delete',base64_encode($value->id))); ?>" >Delete</a>

                    </div>
                </a>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
    <!-- end row -->

</div>








 <?php $__env->stopSection(); ?>

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/gallery/GalleryViewPage.blade.php ENDPATH**/ ?>