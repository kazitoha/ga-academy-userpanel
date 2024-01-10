 <?php $__env->startSection('userview-navbar'); ?>





  <!-- ======home and banner section start welcome_message======= -->
  <section id="latest-news-view-banner">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>
<!-- ======home and banner section finish welcome_message======= -->

  <!-- ==========start Offices====== -->
  <section id="about-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="latest-news-heading">
                <h3>About Teacher</h3>
                <span><a href="<?php echo e(url('teacher&staff')); ?>">Refresh<i class="fas fa-redo-alt"></i></a></span>
            </div>
        </div>
    </div><br>
        <div class="row">
            <div class="col-lg-8">
                <div id="accordion">
                 <?php $__currentLoopData = $staff_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="accordion-item">
                      <div class="accordion-header <?php if(!$key == 0): ?> collapsed <?php endif; ?>" data-toggle="collapse" data-target="#collapse<?php echo e($value->id); ?>"><h3><?php echo e($value->name); ?>(<?php echo e($value->designation); ?>)</h3>
                      </div>
                      <div class="collapse <?php if($key == 0): ?> show <?php endif; ?>" id="collapse<?php echo e($value->id); ?>" data-parent="#accordion">
                        <div class="accordion-body"  style="overflow: hidden;">

                          <div class="committee-according-image">
                            <?php if(!$value->file_path==null): ?>
                            <img src="<?php echo e(asset('storage/staff_info_files/'.$value->file_path)); ?>" class="card-img-top" alt="..." style="width: 164px; height: 164px;border-radius: 6%;" >
                            <?php else: ?>
                             <img src="<?php echo e(asset('public_asset/images/dummy_img/default_staff_img.jpg')); ?>" class="card-img-top" alt="..." style="width: 164px; height: 164px;border-radius: 6%;" >
                            <?php endif; ?>
                          </div>
                          <div class="according-details">
                            <h4 class="according-details-name"><?php echo e($value->name); ?></h4>
                            <b style="color:#5c5454;">Email: <?php echo e($value->email); ?></b><br>
                            <b style="color:#5c5454;">Designation:  <?php echo e($value->designation); ?></b><br>
                            <b style="color:#5c5454;">Phone: <?php echo e($value->phone); ?></b><br>
                            <?php if($value->about != null): ?>
                            <b style="color:#5c5454;">About him: </b>
                            <p><?php echo e($value->about); ?></p>
                            <?php endif; ?>

                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                  </div>
            </div>
             <?php
               $url=Route::current()->uri;
             ?>


            <div class="col-lg-4">
              <div class="useful-link">
                  <h3>Useful links</h3>
                  <ul>
                    <li ><a href="<?php echo e(url('/notice')); ?>"><b>Notice</b></li>
                      <li ><a href="<?php echo e(url('news')); ?>"><b>News</b></a></li>
                      <li ><a href="<?php echo e(url('event')); ?>"><b>Event</b></a></li>


                  </ul>
              </div>
          </div>
        </div>
    </div>
</section>

<!-- ========== End Office ========== -->


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\ga-academy-userpanel\resources\views/userview/teacher&staff/staff.blade.php ENDPATH**/ ?>