<?php $__env->startSection('adminpanel-navbar'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center><h4 class="header-title">School Name And logo</h4></center>
                    <hr>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <form class="needs-validation" action="<?php echo e(route('store.school.website.settings')); ?>" method="post"
                    enctype="multipart/form-data" novalidate>
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Name</label>

                                <input type="text" class="form-control <?php $__errorArgs = ['school_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="validationCustom01"
                                    value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->school_name); ?> <?php endif; ?>"
                                    name="school_name" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Primary logo</label>
                                <input type="file" class="form-control <?php $__errorArgs = ['primary_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="validationCustom01" name="primary_logo"required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Primary logo Height</label>
                                <input type="number" class="form-control <?php $__errorArgs = ['primary_logo_height'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="validationCustom01" name="primary_logo_height"
                                    value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->primary_logo_height); ?> <?php endif; ?>"required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Primary logo Width</label>
                                <input type="number" class="form-control <?php $__errorArgs = ['primary_logo_width'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="validationCustom01" name="primary_logo_width"
                                    value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->primary_logo_height); ?> <?php endif; ?>"required>
                            </div>

                        </div>


                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center><h4 class="header-title">School Info</h4></center>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" id="validationCustom01"
                                value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->phone_number); ?> <?php endif; ?>" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Mobile Number</label>
                            <input type="text" class="form-control" id="validationCustom01" name="mobile_number"
                                value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->mobile_number); ?> <?php endif; ?>"
                                required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Email</label>
                            <input type="text" class="form-control" id="validationCustom01" name="email"
                                value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->email); ?> <?php endif; ?>" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Facebook Link</label>
                            <input type="text" class="form-control" id="validationCustom01"
                                value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->facebook_link); ?> <?php endif; ?>"
                                name="facebook_link" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Address</label>
                            <input type="text" class="form-control" id="validationCustom02" name="address"
                                value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->address); ?> <?php endif; ?>" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Google Map link</label>
                            <input type="text" class="form-control" id="validationCustom01" name="google_map_link"
                                value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->google_map_link); ?> <?php endif; ?>"
                                required>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="header-title">Dashboard Info</h4>
                    </center>
                    <hr>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Chairman Name</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['chairman_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="validationCustom02" name="chairman_name"
                                    value=" <?php if(!empty($website_data)): ?> <?php echo e($website_data->chairman_name); ?> <?php endif; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"></label>
                                <label>Chairman Speech</label>
                                <textarea id="textarea" class="form-control <?php $__errorArgs = ['chairman_speech'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="chairman_speech" rows="3"
                                    placeholder="This textarea."><?php if(!empty($website_data)): ?> <?php echo e($website_data->chairman_speech); ?> <?php endif; ?></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Chairman Image</label>
                                <input type="file" class="form-control <?php $__errorArgs = ['chairman_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="validationCustom01" name="chairman_image" required>
                                    <?php if(!empty($website_data->chairman_image)): ?><span class="text-danger">One image is already uploaded</span><?php endif; ?>

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Head Teacher Name</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['head_teacher_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="validationCustom02" name="head_teacher_name"
                                    value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->head_teacher_name); ?> <?php endif; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"></label>
                                <label>Head Teacher Speech</label>
                                <textarea id="textarea" class="form-control <?php $__errorArgs = ['head_teacher_speech'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" maxlength="225" rows="3" name="head_teacher_speech"
                                    placeholder="This textarea has a limit of 225 chars."><?php if(!empty($website_data)): ?> <?php echo e($website_data->head_teacher_speech); ?> <?php endif; ?></textarea>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Head Teacher Image</label>
                                <input type="file"
                                    class="form-control <?php $__errorArgs = ['head_teacher_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="validationCustom01" name="head_teacher_image" required>
                                    <?php if(!empty($website_data->head_teacher_image)): ?><span class="text-danger">One image is already uploaded</span><?php endif; ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Total Student</label>
                                <input type="text"
                                    class="form-control <?php $__errorArgs = ['total_student'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="validationCustom01" name="total_student"
                                    value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->total_student); ?> <?php endif; ?>"required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Founded</label>
                                <input type="text"
                                    class="form-control <?php $__errorArgs = ['founded'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="validationCustom01" name="founded"
                                    value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->founded); ?> <?php endif; ?>"required>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


        <center>
            <button class="btn btn-outline-primary btn-lg btn-block" type="submit">
                <?php if(!empty($website_data)): ?>
                    <?php echo e('Update'); ?>

                <?php else: ?>
                    <?php echo e('Submit'); ?>

                <?php endif; ?>
            </button>
        </center>
    </form>
 <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\ga-academy-userpanel\resources\views/adminview/website_setting/index.blade.php ENDPATH**/ ?>