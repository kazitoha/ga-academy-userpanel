

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
                        <h3>News Board</h3>
                        <span><a href="<?php echo e(route('news')); ?>">Refresh<i class="fas fa-redo-alt"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="row pt-2">

            </div>
            <div class="row pt-3">
                <div class="col-lg-12" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">

                    <?php $__currentLoopData = $allNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="Notice-box">
                            <div class="Notice-item">
                                <a href="#" target="blank">
                                    <h2><?php echo e($value->title); ?></h2>
                                </a>
                                <ul>
                                    <li class="date-time"><?php echo e($value->created_at->format('d-M-Y')); ?></li>
                                    <li class="Notice-btn-item"><a
                                        href="<?php echo e(route('single.news', base64_encode($value->id))); ?>" target="blank"
                                        class="btn-read">+ read more....</a></li>
                                </ul>
                            </div>
                            <hr>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <div class="pagination">
                        <ul class="pagination-2 ">
                            <div class="container">
                                <?php echo e($allNews->links('pagination::bootstrap-4')); ?>

                            </div>
                        </ul>
                    </div>
                </div>
                

            </div>
        </div>
    </section>


    <!-- ===========all latest news view finish==================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\school-userpanel\ga-academy-userpanel\resources\views/userview/news/news.blade.php ENDPATH**/ ?>