<?php $__env->startSection('adminpanel-navbar'); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title d-flex justify-content-center">Edit Notice</h4>

                    <form class="custom-validation" action="<?php echo e(route('notice.update')); ?>" method="post"
                        enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" class="form-control" name="update_id"
                            value="<?php echo e(base64_encode($noticeGetData->id)); ?>" />
                        <div class="form-group">
                            <label>Category</label>
                            <select class=" form-control" <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                aria-label="Default select example" name="category">
                                <option disabled>Select Category</option>
                                <option value="1" <?php if($noticeGetData->category == 1): ?> selected <?php endif; ?>>Teacher's Notice
                                </option>
                                <option value="2" <?php if($noticeGetData->category == 2): ?> selected <?php endif; ?>>Students Notice
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Type something" name="title" value="<?php echo e($noticeGetData['title']); ?>"
                                required />
                        </div>


                        <div class="form-group">
                            <label>File type</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" onclick="inputImg()">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Image
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" onclick="inputPdf()">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Pdf
                                </label>
                            </div>

                            <div id="img">
                                <label>Images</label>
                                <input class="form-control <?php $__errorArgs = ['image_file[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image_file[]"
                                    type="file" multiple>
                            </div>
                            <div id="pdf">
                                <label>Pdf</label>
                                <input class="form-control <?php $__errorArgs = ['pdf_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pdf_file"
                                    type="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <div>
                                <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="elm1" name="description" rows="5"><?php echo e($noticeGetData->description); ?></textarea>
                            </div>
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
                    <h4 class="header-title d-flex justify-content-center">Notice Files</h4>
                    <?php if(!empty($noticeGetData['file_path'])): ?>
                        <div class="position-relative gallery-content">
                            <div class="demo-img">
                                <?php
                                    $images = unserialize($noticeGetData['file_path']);
                                ?>

                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $explode_file = explode('.', $value[0]);
                                        $extension=end($explode_file);
                                    ?>

                                    <?php if($extension == 'jpg' || $explode_file[1] == 'png' || $explode_file[1] == 'jpeg'): ?>
                                        <img src="<?php echo e(asset('storage/notice_files')); ?>/<?php echo e($value[0]); ?>" alt=""
                                            class="img-fluid mx-auto d-block rounded"><br>
                                    <?php endif; ?>

                                    <?php if($extension == 'pdf'): ?>
                                        <iframe src="<?php echo e(asset('storage/notice_files')); ?>/<?php echo e($value[0]); ?>" width="100%"
                                            height="600px"></iframe>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php echo $__env->make('adminview/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/adminview/notice/NoticeEditPage.blade.php ENDPATH**/ ?>