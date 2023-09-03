

 <?php $__env->startSection('userview-navbar'); ?>
  <!-- ======home and banner section start======= -->
    <section id="latest-news-view-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                </div>
            </div>
        </div>
    </section>
  <!-- ======home and banner section finish======= -->

  <!-- ==========about history outline University of Dhaka start====== -->
    <section id="about-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <div class="mission-text">
                    <div class="mission-headding text-center">
                      <h2>Academic Calendar </h2>
                      <div class="under-bottom"></div>
                    </div>
                    <div class="mission-para mt-5">
                      <!-- <iframe src="<?php echo e(asset('public_asset/files/Bangladesh-Holiday-2023-Calendar.pdf')); ?>"></iframe> -->
                      <div class="container" style="text-align:center;">

                         <img 
                         height="900px" width="900px" src="<?php echo e(asset('public_asset/images/calender.jpg')); ?>">
                          
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

  <!-- ==========about history outline University of Dhaka finish========== -->

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/userview/academic/academicCalendar.blade.php ENDPATH**/ ?>