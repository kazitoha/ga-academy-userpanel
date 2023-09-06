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
                    <img src="<?php echo e(asset('public_asset/images/bd50_mujib100.jpg')); ?>">
                    <div class="mission-text">
                        <br>
                        <div class="mission-headding text-center">
                            <h2>স্বাধীনতার সুবর্ণ জয়ন্তী </h2>
                            <div class="under-bottom"></div>
                        </div>
                        <div class="mission-para mt-5">
                          <?php echo $GoldenJubileeData->description; ?>

                        </div>
                        <div
                            style="caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); box-sizing: inherit; margin: 0px; padding: 5px 10px; background-color: rgb(238, 238, 238); border: 1px solid rgb(204, 204, 204);">
                            <iframe frameborder="0" height="400" scrolling="no"
                                src="https://www.youtube.com/embed/Pze7rdtdWwo" title="YouTube video player"
                                width="100%"></iframe>

                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ==========about history outline University of Dhaka finish========== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userview/layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\local\resources\views/userview/independenceCorner/GoldenJubileeIndependenceCorner.blade.php ENDPATH**/ ?>