<?php $__env->startSection('userview-navbar'); ?>
    <!-- ======home and banner section start welcome_message======= -->
    <section id="Notice-view-banner">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
    <!-- ======home and banner section finish welcome_message======= -->

    <!-- ===========all Notice-view-part start==================== -->

    <section id="Notice-view-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Notice-view-heading">
                        <h3>Notice Board</h3>
                        <span><a href="<?php echo e(route('notice')); ?>">Refresh<i class="fas fa-redo-alt"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="row pt-2">

            </div>
            <div class="row pt-3">
                <div class="col-lg-8" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">

                    <?php $__currentLoopData = $notice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="Notice-box">
                            <div class="Notice-item">
                                <a href="#" target="blank">
                                    <h2><?php echo e($value->title); ?></h2>
                                </a>
                                <ul>
                                    <li class="date-time"><?php echo e($value->created_at->format('d-M-Y')); ?></li>
                                    <li class="Notice-btn-item"><a
                                            href="<?php echo e(route('single.notice', base64_encode($value->id))); ?>" target="blank"
                                            class="btn-read">+ read more....</a></li>
                                </ul>
                            </div>
                            <hr>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <div class="pagination">
                        <ul class="pagination-2 ">
                            <div class="container">
                                <?php echo e($notice->links('pagination::bootstrap-4')); ?>

                            </div>
                        </ul>
                    </div>
                </div>
                <?php
                    $url = Route::current()->uri;
                ?>

                <div class="col-lg-4">
                    <div class="useful-link">
                        <h3>Category</h3>
                        <ul>
                            <li><a href="<?php echo e(url('/notice')); ?>"><b <?php if($url == 'notice'): ?> <?php $id=''; ?> style="color:red" <?php endif; ?>>All</b></li>
                            <li><a href="<?php echo e(url('select/notice/1')); ?>"><b <?php if($id == 1): ?> style="color:rgb(220, 52, 52)" <?php endif; ?>>Teacher's Notice</b></a></li>
                            <li><a href="<?php echo e(url('select/notice/2')); ?>"><b <?php if($id ==2): ?> style="color:rgb(220, 52, 52)" <?php endif; ?>>Student's Notice</b></a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ===========all latest news view finish==================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\ga-academy-userpanel\resources\views/userview/notice/notice.blade.php ENDPATH**/ ?>