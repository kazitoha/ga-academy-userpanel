

 <?php $__env->startSection('adminpanel-navbar'); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Add Event</h4>
                
                 <?php if($errors->any()): ?>
                 <div class="alert alert-danger" role="alert">
                     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><?php echo e($error); ?></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>
                <?php endif; ?>

                <form class="custom-validation" action="<?php echo e(route('event.store')); ?>" method="post" enctype="multipart/form-data" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['event_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Type something" name="event_name" value="<?php echo e(old('event_name')); ?>" required/>
                    </div>
                    <div class="form-group">
                        <label>Event Date</label>
                        <input type="date" class="form-control <?php $__errorArgs = ['event_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Type something" name="event_date" value="<?php echo e(old('event_date')); ?>" required/>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Event image</label>
                        <div>
                            <input type="file" class="form-control" name="event_image[]"   value="<?php echo e(old('event_image')); ?>" multiple/>
                        </div>
                    </div>
                    <div class="form-group">
                         <label>About Event</label>
                        <div>
                            <textarea required class="form-control <?php $__errorArgs = ['about_event'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="about_event" value="" rows="5"><?php echo e(old('about_event')); ?></textarea>
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
<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/event/EventViewPage.blade.php ENDPATH**/ ?>