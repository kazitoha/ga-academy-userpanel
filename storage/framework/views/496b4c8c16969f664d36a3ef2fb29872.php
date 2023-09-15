 <?php $__env->startSection('userview-navbar'); ?>
    <!-- ======home and banner section start======= -->
    <section id="latest-news-view-banner">
        <div class="container">

        </div>
    </section>
  <!-- ======home and banner section finish======= -->
  <!-- ========== Academic part University of Dhaka start====== -->

<section id="Notice-view-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="Notice-view-heading">
                    <h3>Contact Board</h3>
                    <span><a href="<?php echo e(url('contact')); ?>">Refresh<i class="fas fa-redo-alt"></i></a></span>
                </div>
            </div>
        </div>
        <div class="row pt-2">

          </div>
          <div class="row pt-3">
              <div class="col-lg-7" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">



                  <?php if(!empty(websiteSetting())): ?><?php echo websiteSetting()->google_map_link; ?><?php endif; ?>


              </div>


        <div class="col-lg-5">
            <div class="useful-link">
                <h3>Contct information</h3>
                <ul style="color: #3a2b2be3;">
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <b> <?php if(!empty(websiteSetting())): ?><?php echo e(websiteSetting()->school_name); ?><?php else: ?> <?php echo e("School Name"); ?><?php endif; ?></b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <b> <?php if(!empty(websiteSetting())): ?><?php echo e(websiteSetting()->address); ?><?php else: ?> <?php echo e("School Address"); ?><?php endif; ?>.</b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i><b> Phone:  <?php if(!empty(websiteSetting())): ?><?php echo e(websiteSetting()->phone_number); ?><?php else: ?> <?php echo e(""); ?><?php endif; ?></b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i><b> Mobile:  <?php if(!empty(websiteSetting())): ?><?php echo e(websiteSetting()->mobile_number); ?><?php else: ?> <?php echo e(""); ?><?php endif; ?></b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i><b> Email:  <?php if(!empty(websiteSetting())): ?><?php echo e(websiteSetting()->email); ?><?php else: ?> <?php echo e("School@email.com"); ?><?php endif; ?></b> </p>

                </ul>
            </div>
        </div>
       </div>
      </div>
</section>


  <!-- ========== Academic part University of Dhaka finish========== -->



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/userview/contact/contact.blade.php ENDPATH**/ ?>