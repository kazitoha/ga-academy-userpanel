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
                    <div id="accordion">



                      <?php $__currentLoopData = $committee_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordion-item">
                      <div class="accordion-header <?php if(!$key == 0): ?> collapsed <?php endif; ?>" data-toggle="collapse" data-target="#collapse<?php echo e($value->id); ?>"><h3><?php echo e($value->name); ?>(<?php echo e($value->designation); ?>)</h3>
                      </div>
                      <div class="collapse <?php if($key == 0): ?> show <?php endif; ?>" id="collapse<?php echo e($value->id); ?>" data-parent="#accordion" style="color:red;">
                        <div class="accordion-body"  style="overflow: hidden;">

                          <div class="committee-according-image">
                            <img src="<?php echo e(asset('storage/committee_files/'.$value->file_path)); ?>" class="card-img-top" alt="..." style="width:200px" >
                          </div>  
                          <div class="according-details">
                            <h4><?php echo e($value->name); ?></h4>
                            <b style="color:#5c5454;">Email: <?php echo e($value->email); ?></b><br>
                            <b style="color:#5c5454;">Designation:  <?php echo e($value->designation); ?></b><br>
                            <b style="color:#5c5454;">Phone: <?php echo e($value->phone); ?></b><br>
                            <b style="color:#5c5454;">About him: </b>
                            <p><?php echo e($value->about); ?></p>

                          </div>
                        </div>
                      </div>
                    </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        



                      </div>
                </div>
               
            </div>
        </div>
    </section>

  <!-- ==========about history outline University of Dhaka finish========== -->



  <?php $__env->stopSection(); ?>
<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\ga-academy-userpanel\resources\views/userview/committee/committee.blade.php ENDPATH**/ ?>