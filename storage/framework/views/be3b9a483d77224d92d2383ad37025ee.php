

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
                            <a ahref="#"><p><i class="fas fa-calendar-alt"></i> Published: <?php echo e($single_news->created_at->format('d-M-Y')); ?></p></a>
                        </div>
                        <div class="content-heading">
                            <h2><?php echo e($single_news->title); ?></h2>

                            <p><?php echo e($single_news->description); ?></p>
                            <?php if($single_news->file_path != null): ?>
                             <img src="<?php echo e(asset('storage/news_files/'.$single_news->file_path)); ?>" alt="" style="overflow:scroll; height:auto; width:auto">
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="welcome-content-right">
                        <div class="welcome-slide" style="overflow:scroll; height:661px;">
                            <h2>News LIST</h2>

                 <?php $__currentLoopData = $news_paginate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="right-slide-content text-center">
                                <a href="<?php echo e(route('single.news',base64_encode($value->id))); ?>"><h5><?php echo e($value->title); ?></h5></a>
                                <span>Published: <?php echo e($value->created_at->format('d-M-Y')); ?></span>
                            </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="all-view">
                            <a href="<?php echo e(url('news')); ?>" class="view-btn" style="margin-top: 11px;">view all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- ==========Welcome to the University of Dhaka finish========== -->



 <?php $__env->stopSection(); ?>

<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/userview/news/singleNews.blade.php ENDPATH**/ ?>