 <?php $__env->startSection('userview-navbar'); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>


   <!-- ======home and banner section start======= -->
    <section id="latest-news-view-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <nav aria-label="breadcrumb">

                      </nav>
                </div>
            </div>
        </div>
    </section>
  <!-- ======home and banner section finish======= -->

  <!-- ========== gallery part University of Dhaka start====== -->
    <section id="gallery-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="line-header">
                        <h2>Photo Gallery</h2>
                        <div class="under-bottom"></div>
                    </div>
                </div>
            </div>
            <div class="work-nav">
                <ul>
                    <li data-mixitup-control data-filter="all">all</li>
                    <li data-mixitup-control data-filter=".offices">offices</li>
                    <li data-mixitup-control data-filter=".teachers">Teachers</li>
                    <li data-mixitup-control data-filter=".other">others</li>


                </ul>
            </div>
            <!-- gallery--- -->
            <div class="row pt-5 gallery-filter">
              <?php $__currentLoopData = $gallery_infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                  if($value->category == 1){
                    $category = "offices";
                  }elseif($value->category == 2){
                    $category = "teachers";
                  }elseif($value->category == 3){
                    $category = "other";
                  }else{
                    $category = "all";
                  }
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mix <?php echo e($category); ?>">
                    <div class="gallery-item">
                        <img data-original="<?php echo e(asset('storage/gallery/'.$value->file_path)); ?>" alt="">
                        <div class="overlay-gallery">
                            <a class="venobox" data-gall="gallery01" href="<?php echo e(asset('storage/gallery/'.$value->file_path)); ?>"><i class="fa fa-plus"></i></a>
                            <p><?php echo e($value->title); ?></p>
                        </div>
                    </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </div>
    </section>

  <!-- ========== gallery part University of Dhaka finish========== -->

<script type="text/javascript">
    $("img").lazyload({
        effect : "fadeIn"
    });
</script>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\ga-academy-userpanel\resources\views/userview/gallery/gallery.blade.php ENDPATH**/ ?>