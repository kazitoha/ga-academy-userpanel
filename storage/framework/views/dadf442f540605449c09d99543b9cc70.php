 <?php $__env->startSection('adminpanel-navbar'); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Add Teacher & Staff</h4>

                <?php if($errors->any()): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                <form class="custom-validation" action="<?php echo e(route('staff.update')); ?>" method="post" enctype="multipart/form-data" novalidate>
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="update_id" value="<?php echo e(base64_encode($staffGetData->id)); ?>">

                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control form-select <?php $__errorArgs = ['select_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            aria-label="Default select example" name="select_category" onchange="yesnoCheck(this);" onclick="yesnoCheck(this);"
                            >
                            <option <?php if($staffGetData->category == 1): ?> selected <?php endif; ?> value="1">Teacher</option>
                            <option <?php if($staffGetData->category == 2): ?> selected <?php endif; ?> value="2">Staff</option>
                        </select>
                    </div>

                    <div class="form-group" id="ifYes" style="display: none;">
                        <label>Groups</label>
                        <select class="form-control form-select <?php $__errorArgs = ['select_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            aria-label="Default select example" name="group">
                            <option <?php if($staffGetData->group == 1): ?> selected <?php endif; ?> value="1">Science</option>
                            <option <?php if($staffGetData->group == 2): ?> selected <?php endif; ?> value="2">Business studies</option>
                            <option <?php if($staffGetData->group == 3): ?> selected <?php endif; ?> value="3">Humanities</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($staffGetData->name); ?>" placeholder="Enter name.">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control <?php $__errorArgs = ['designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($staffGetData->designation); ?>" placeholder="Enter designation.">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email"  class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($staffGetData->email); ?>" placeholder="Enter email">
                    </div>


                    <label>Phone</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">+88</span>
                      </div>
                      <input type="number" name="phone" value="<?php echo e($staffGetData->phone); ?>" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                    </div>



                    <div class="form-group">
                        <label>Image</label>

                        <div>
                           <input accept="image/*" class="form-control" name="file_name" type='file' id="imgInp" /><br>
                           <?php if($staffGetData->file_path != null): ?>
                            <img id="blah" src="<?php echo e(asset('storage/staff_info_files/'.$staffGetData->file_path)); ?>" alt="your image" width="120" height="120" />
                           <?php elseif($staffGetData->file_path == null): ?>
                           <input type="hidden" class="form-control" name="empty_file_name" type='text' />
                            <img id="blah" src="<?php echo e(asset('storage/staff_info_files/default.png')); ?>" alt="your image" width="120" height="120" />
                           <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <div>
                            <textarea required class="form-control <?php $__errorArgs = ['about'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="about" rows="5" placeholder="Describe about him"><?php echo e($staffGetData->about); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Update
                            </button>

                            <a href="<?php echo e(url('admin/teacher/staff/list')); ?>" class="btn btn-secondary waves-effect waves-light mr-1" type="submit">Back</a>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->

</div> <!-- end row -->

<script type="text/javascript">
    imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        blah.src = URL.createObjectURL(file)
      }
    }

</script>
<script type="text/javascript">
    function yesnoCheck(that) {
        if (that.value == "1") {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/staff/StaffEditPage.blade.php ENDPATH**/ ?>