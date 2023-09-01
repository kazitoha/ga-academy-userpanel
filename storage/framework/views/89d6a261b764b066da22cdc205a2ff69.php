

<?php $__env->startSection('userview-navbar'); ?>
    <!-- ======home and banner section start======= -->
    <section id="Notice-view-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                </div>
            </div>
        </div>
    </section>
    <!-- ======home and banner section finish======= -->

    <!-- ==========Welcome to the University of Dhaka start====== -->
    <section id="welcome-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-welcome-left">
                        <div class="publish-content">
                            <a ahref="#">
                                <p><i class="fas fa-calendar-alt"></i> Published:
                                    <?php echo e($single_notice->created_at->format('d-M-Y')); ?></p>
                            </a>
                        </div>
                        <div class="content-heading">
                            <h2><?php echo e($single_notice->title); ?></h2>

                            <p><?php echo $single_notice->description ?></p>
                            <?php if($single_notice->file_sys_ver == 1): ?>
                                <?php
                                    $file_name = $single_notice->file_path;
                                    if (!$single_notice->file_path == null) {
                                        $file_name = $single_notice->file_path;
                                    }
                                    $file_type_explode = explode('.', $file_name);
                                    $extension = end($file_type_explode);
                                ?>

                                <?php if($extension == 'pdf'): ?>
                                    <iframe src="<?php echo e(asset('storage/notice_files/' . $single_notice->file_path)); ?>"
                                        width="100%" height="600px"></iframe>
                                <?php endif; ?>
                                <?php if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg'): ?>
                                    <img src="<?php echo e(asset('storage/notice_files/' . $single_notice->file_path)); ?>"
                                        alt="" style="overflow:scroll; height:auto; width:auto">
                                <?php endif; ?>
                            <?php endif; ?>


                            


                            <?php if($single_notice->file_sys_ver == 2): ?>
                                <?php
                                    $file_names = unserialize($single_notice['file_path']);
                                ?>
                                <?php if(!empty($file_names)): ?>
                                    <?php $__currentLoopData = $file_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $explode_file = explode('.', $value[0]);
                                            $extension = end($explode_file);
                                        ?>

                                        <?php if($extension == 'jpg' || $explode_file[1] == 'png' || $explode_file[1] == 'jpeg'): ?>
                                            <img src="<?php echo e(asset('storage/notice_files')); ?>/<?php echo e($value[0]); ?>"
                                                alt=""><br>
                                        <?php endif; ?>

                                        <?php if($extension == 'pdf'): ?>
                                            <iframe src="<?php echo e(asset('storage/notice_files')); ?>/<?php echo e($value[0]); ?>"
                                                width="100%" height="600px"></iframe>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="welcome-content-right">
                        <div class="welcome-slide" style="overflow:scroll; height:661px;">
                            <h2>NOTICE LIST</h2>

                            <?php $__currentLoopData = $notice_paginate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="right-slide-content text-center">
                                    <a href="<?php echo e(route('single.notice', base64_encode($value->id))); ?>">
                                        <h5><?php echo e($value->title); ?></h5>
                                    </a>
                                    <span>Published: <?php echo e($value->created_at->format('d-M-Y')); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="all-view">
                            <a href="<?php echo e(url('notice')); ?>" class="view-btn" style="margin-top: 11px;">view all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========Welcome to the University of Dhaka finish========== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tohaeco/demo.fenigaacademy.edu.bd/resources/views/userview/notice/singleNotice.blade.php ENDPATH**/ ?>