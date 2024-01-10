<?php $__env->startSection('adminpanel-navbar'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="header-title">School Name</h4>
                    </center>
                    <hr>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                    <form class="needs-validation" action="<?php echo e(route('store.school.name')); ?>" method="post"
                        enctype="multipart/form-data">
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
                        </div>
                        <?php if(!empty($website_data)): ?>
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        <?php else: ?>
                            <button type="submit" class="btn btn-outline-success">Save</button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="header-title">School Info</h4>
                    </center>
                    <hr>
                    <form action="<?php echo e(route('store.school.info')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" id="validationCustom01"
                                    value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->phone_number); ?> <?php endif; ?>"
                                    required>

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
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Facebook Link</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->facebook_link); ?> <?php endif; ?>"
                                    name="facebook_link" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Address</label>
                                <input type="text" class="form-control" id="validationCustom02" name="address"
                                    value="<?php if(!empty($website_data)): ?> <?php echo e($website_data->address); ?> <?php endif; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Total Student</label>
                                <input type="text" class="form-control <?php $__errorArgs = ['total_student'];
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
                                <input type="text" class="form-control <?php $__errorArgs = ['founded'];
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
                        <button class="btn btn-outline-primary">Update</button>
                    </form>

                </div>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" style="float: right" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <center>
                        <h4 class="header-title">Dashboard Speech Info</h4>

                    </center>
                    <!-- Button trigger modal -->
                    <br>
                    <hr>
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Speech</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $speech_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $speech_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($key + 1); ?></th>
                                        <td><?php echo e($speech_info->name); ?></td>
                                        <td><?php echo e($speech_info->designation); ?></td>
                                        <td><?php echo e($speech_info->title); ?></td>
                                        <td><?php echo e($speech_info->speech); ?></td>
                                        <td>
                                            <img src="<?php echo e(asset('storage/speech_files')); ?>/<?php echo e($speech_info->image); ?>" style="width: 50px">
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('speech.delete',$speech_info->id)); ?>" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form action="<?php echo e(route('store.speech.info')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add speech</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Name</label>
                            <input type="text" class="form-control" id="validationCustom02" name="name" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Designation</label>
                            <input type="text" class="form-control" id="validationCustom02" name="designation" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Title</label>
                            <input type="text" class="form-control" id="validationCustom02" name="title" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01"></label>
                            <label>Speech</label>
                            <textarea id="textarea" class="form-control" name="speech" rows="5" maxlength="3000" placeholder="This textarea."></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Image</label>
                            <input type="file" class="form-control" id="validationCustom01" name="image" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\ga-academy-userpanel\resources\views/adminview/website_setting/index.blade.php ENDPATH**/ ?>