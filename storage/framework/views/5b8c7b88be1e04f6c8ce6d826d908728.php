

 <?php $__env->startSection('adminpanel-navbar'); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Add News</h4>

                 <?php if($errors->any()): ?>
                 <div class="alert alert-danger" role="alert">
                     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><?php echo e($error); ?></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>
                <?php endif; ?>

                <form class="custom-validation" action="<?php echo e(route('news.store')); ?>" method="post" enctype="multipart/form-data" >
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" maxlength="120" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Type something" name="title" value="<?php echo e(old('title')); ?>" required/>
                    </div>


                    <div class="form-group">
                        <label>File</label>
                        <div>
                            <input type="file" class="form-control" name="file_name" value="<?php echo e(old('file_name')); ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <div>
                            <textarea required class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" value="<?php echo e(old('description')); ?>" rows="5"></textarea>
                        </div>
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

</div> <!-- end row -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/news/NewsViewPage.blade.php ENDPATH**/ ?>