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

                    <form class="custom-validation" action="<?php echo e(route('staff.store')); ?>" method="post"
                        enctype="multipart/form-data" novalidate>
                        <?php echo csrf_field(); ?>


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
                                aria-label="Default select example" name="select_category" onchange="yesnoCheck(this);"
                                required>
                                <option value="" selected>>-------------------------Select Groups---------------------
                                    << /option>
                                <option value="1">Teacher</option>
                                <option value="2">Staff</option>
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
                                <option value="" selected disabled>>-------------------------Select
                                    Group---------------------<< /option>
                                <option value="1">Science</option>
                                <option value="2">Business studies</option>
                                <option value="3">Humanities</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>"
                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>"
                                placeholder="Enter name.">
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="designation" value="<?php echo e(old('designation')); ?>"
                                class="form-control <?php $__errorArgs = ['designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('designation')); ?>" placeholder="Enter designation.">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo e(old('email')); ?>"
                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>"
                                placeholder="Enter email">
                        </div>



                        <label>Phone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+88</span>
                            </div>
                            <input type="number" inputmode="numeric" name="phone" value="<?php echo e(old('phone')); ?>"
                                class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" maxlength="10">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <div>
                                <input type="file" class="form-control" name="file_name"
                                    value="<?php echo e(old('file_name')); ?>" />
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
unset($__errorArgs, $__bag); ?>" name="about" value="<?php echo e(old('about')); ?>"
                                    rows="5" placeholder="Describe about him"></textarea>
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

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/staff/StaffViewPage.blade.php ENDPATH**/ ?>