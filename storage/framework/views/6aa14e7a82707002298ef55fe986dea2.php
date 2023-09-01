

 <?php $__env->startSection('userview-navbar'); ?>
    <!-- ======home and banner section start======= -->
    <section id="event-page-banner">
        <div class="container">
            
        </div>
    </section>
  <!-- ======home and banner section finish======= -->
  <!-- ========== Academic part University of Dhaka start====== -->
    <section id="academic-part">
        <div class="container">
            <form action="<?php echo e(route('search.event.userview')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row pb-5 ">
                    <div class="col-lg-9">
                        <input type="text" placeholder="Enter program name" class="form-control" value="" name="programName" id="programName" required>
                    </div>
                    <div class="col-lg-3">
                        <button class="academic-reset" style="border-radius: 10px;">
                            <i class="fas fa-sync-alt"></i>reset filter
                       </button>
                       <p></p>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="blog-content col-lg-12 col-md-6 md-pt-5">
                    <div class="col-sm-offset-4 col-sm-4">
                        <img class="loadlater" src="images/loaderNew.gif" style="height: 50px;display: none">
                    </div>
                    <div class="content-items" id="showCourseFinder">
                        <div class="clearfix"></div>
                        <h4 class="text-center">Total <span class="badge badge-secondary"><?php echo e($all_event->count()); ?></span> Events</h4>
                    <div class="row">
                        <?php $__currentLoopData = $all_event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-item col-lg-12">
                            <div class="item">
                                <div class="info">
                                    <div class="content">
                                        <h4><?php echo e($value->event_name); ?></h4>
                                            <a href="<?php echo e(route('single.event', base64_encode($value->id))); ?>" class="btn-read">+ read more....</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                        <div class="pagination" style="text-align:center;">
                            <ul class="pagination-2">
                              <div class="container">
                              <?php echo e($all_event->links("pagination::bootstrap-4")); ?>

                              </div>  
                            </ul>
                          </div>      
                     </div>
                 </div>
                    <!-- End Blog Items -->
                </div>
            </div>
        </div>
    </section>

  <!-- ========== Academic part University of Dhaka finish========== -->



  <?php $__env->stopSection(); ?>
<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tohaeco/demo.fenigaacademy.edu.bd/resources/views/userview/event/event.blade.php ENDPATH**/ ?>