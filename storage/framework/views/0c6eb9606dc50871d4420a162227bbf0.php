<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feni Girish-Akshay Academy</title>
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('public_asset/images/logo.jpg')); ?>">
    <!-- fontawesome link---- -->
    <link rel="stylesheet" href="<?php echo e(asset('public_asset/css/all.min.css')); ?>">
    <!-- owl slider link ========= -->
    <link rel="stylesheet" href="<?php echo e(asset('public_asset/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public_asset/css/owl.theme.default.min.css')); ?>">
    <!-- venobox link------= -->
    <link rel="stylesheet" href="<?php echo e(asset('public_asset/css/venobox.min.css')); ?>">
    <!-- bootstrap link============= -->
    <link rel="stylesheet" href="<?php echo e(asset('public_asset/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin_asset/assets/css/bootstrap.min.css.map')); ?>">
    <!-- main css link-------- -->
    <link rel="stylesheet" href="<?php echo e(asset('public_asset/css/style.css')); ?>">
     <!-- responsive css strat------- -->
     <link rel="stylesheet" href="<?php echo e(asset('public_asset/css/responsive.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('public_asset/css/scroll_slider.css')); ?>">
     <!-- font awosome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <?php
       $url=Route::current()->uri;
    ?>


<!-- header part finish -->
     <!-- Navbar part start -->
  <nav class="navbar navbar-expand-lg navbar-light sticky_top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?php echo e(asset('public_asset/Untitled-2.png')); ?>" alt="" class="img-fluid" style="width: 177px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-md-right" id="navbarNavDropdown">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link  <?php if($url == '/'): ?> active <?php endif; ?>" href="<?php echo e(url('/')); ?>">Home</a>
          </li>


          <li class="nav-item">
            <a class="nav-link <?php if($url == 'notice'|| $url == 'single/notice/{id}'): ?> active <?php endif; ?>" href="<?php echo e(route('notice')); ?>">notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($url == 'news'|| $url == 'single/news/{id}'): ?> active <?php endif; ?>" href="<?php echo e(route('news')); ?>">News</a>
          </li>


          <li class="nav-item">
            <a class="nav-link <?php if($url == 'event' || $url == 'single/event/{id}'): ?> active <?php endif; ?>" href="<?php echo e(route('event')); ?>">Event</a>
          </li>




          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if($url == 'academic/calendar'||$url == 'honorable/guardians'): ?> active <?php endif; ?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                Academic
            </a>
            <li class="nav-item">
                <a class="nav-link <?php if($url == 'golden-jubilee-independence-corner'): ?> active <?php endif; ?>" href="<?php echo e(route('independence-corner')); ?>">সুবর্ণ জয়ন্তী কর্নার</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($url == 'bongobondhu/corner'): ?> active <?php endif; ?>" href="<?php echo e(route('bongobondhu-corner')); ?>">বঙ্গবন্ধু কর্নার</a>
              </li>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item <?php if($url == 'academic/calendar'): ?> active <?php endif; ?>" href="<?php echo e(route('academic.calendar')); ?>">Academic Calendar</a>
                <a class="dropdown-item <?php if($url == 'honorable/guardians'): ?> active <?php endif; ?>" href="<?php echo e(route('honorable.guardians')); ?>">Honorable Guardians</a>

            </div>
          </li>


           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if($url == 'about/committee' || $url == 'history'||$url == 'gallery'|| $url == 'contact' || $url == 'teacher&staff'): ?> active <?php endif; ?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item <?php if($url == 'teacher&staff' || $url=='select/office/{id}'): ?> active <?php endif; ?>" href="<?php echo e(route('teacher')); ?>">Teacher & Staff</a>
                <a class="dropdown-item <?php if($url == 'about/committee'): ?> active <?php endif; ?>" href="<?php echo e(route('about.committee')); ?>">About Committee</a>
                <a class="dropdown-item <?php if($url == 'history'): ?> active <?php endif; ?>" href="<?php echo e(route('history')); ?>">About School</a>
                <a class="dropdown-item <?php if($url == 'gallery'): ?> active <?php endif; ?>" href="<?php echo e(route('gallery')); ?>">gallerys</a>
                <a class="dropdown-item <?php if($url == 'contact'): ?> active <?php endif; ?>" href="<?php echo e(route('contact')); ?>">Contact</a>

            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if($url == 'about/committee' || $url == 'history'||$url == 'gallery'|| $url == 'contact'): ?> active <?php endif; ?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                Links
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item " href="https://portal.fenigaacademy.edu.bd/">Login</a>
                <a class="dropdown-item <?php if($url == 'academic/testimonial'): ?> active <?php endif; ?>" href="<?php echo e(route('academic.testimonial')); ?>">Apply For Testimonial</a>

            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar part finish -->














    <?php echo $__env->yieldContent('userview-navbar'); ?>













<!-- ===================footer part start================= -->
<footer id="footer-part" class="bg-dark text-light" >
    <div class="container">
        <div class="row">
           <div class="col-lg-3 col-md-6 pb-md-5">
                <div class="footer-top-one">
                    <h2>Essential Link</h2>
                    <div class="footer-link">
                    <ul>

                        <li class="active">
                        <a href="<?php echo e(url('notice')); ?>"><i class="fa fa-bell-o" aria-hidden="true"></i> Notice</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('event')); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Event</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('teacher&staff')); ?>"><i class="fa fa-user" aria-hidden="true"></i> About Teacher & Staff</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('gallery')); ?>"><i class="fa fa-file-image-o" aria-hidden="true"></i> Gallery</a>
                        </li>
                        <li>
                        <a href="<?php echo e(url('about/committee')); ?>"><i class="fa fa-address-card-o" aria-hidden="true"></i> About Committee</a>
                        </li>



                     </ul>
                   </div>
                </div>
           </div>

           <!-- academic -->
           <div class="col-lg-3 col-md-6 pb-md-5">
                <div class="footer-top-one">
                    <h2>Academic</h2>
                    <div class="footer-link">
                    <ul>
                      <li>
                        <a href="<?php echo e(url('history')); ?>"><i class="fa fa-history" aria-hidden="true"></i> School History</a>
                      </li>
                      <li>
                        <a href="<?php echo e(url('academic/calendar')); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Academic Calendar</a>
                      </li>
                      <li>
                        <a href="<?php echo e(url('honorable/guardians')); ?>"><i class="fa fa-users" aria-hidden="true"></i> Honorable Guardians</a>
                      </li>
                     </ul>
                   </div>
                </div>
           </div>


   <div class="col-lg-6 col-md-6">
    <div class="footer-top-one">
        <img src="<?php echo e(asset('public_asset/images/logo.jpg')); ?>" height="82" width="92" alt="">
         <h2>Address</h2>
        <div class="footer-link">
        <ul>
            <li>
                <a href="https://www.google.com/maps/place/Feni+G.A+Academy+High+School/@23.5318253,90.3112127,9z/data=!4m20!1m13!4m12!1m4!2m2!1d90.3465982!2d23.798594!4e1!1m6!1m2!1s0x3753684a4dda6d49:0x5f77b51a97434e52!2sFeni+G.A+Academy+High+School,+Feni+Road,+Feni!2m2!1d91.4019886!2d23.021804!3m5!1s0x3753684a4dda6d49:0x5f77b51a97434e52!8m2!3d23.0217988!4d91.4019039!16s%2Fg%2F1tdmndxv"><i class="fa fa-map-marker" aria-hidden="true"></i> Feni Girish-Akshay Academy High School, Academy Road, Feni 3900</a>
            </li>
            <li>
               <strong><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCGDWZxWqjsTKPPtqHrWNsZfjzPRNkrgmfRJSVKrJcTmKGvNdTHTNHrpsvnNGNfcLBPXqV"><i class="fa fa-envelope-o" aria-hidden="true"></i>   gaa.feni@yahoo.com</a></strong>
            </li>
             <li>
                <a href="https://www.facebook.com/people/Feni-Girish-Akshay-Academy-Online/100063830446203/?paipv=0&eav=AfbM8dq5z9zoX5eI3Fpt9RpmzuBO4YmYX4Jm1-gZ0bpuR4qYioiyzSbBqiESEsyi60U&_rdr" target="_blank"><strong><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</strong></a>
            </li>


         </ul>
       </div>
    </div>
    </div>
   </div>


  </div>
  <div class="footer-bottom">
  <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="footer-bottom-left ">
                <p><i class="fa fa-copyright" aria-hidden="false"></i> 2022-<?php echo date("Y");?>
 Developed and Maintained By <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwQncjStzfPxssNZPPPJrWxnGvvZwczZSPxMrTfsrGJnbvxcwfSjKMRvlxnfBQcmmzjFJWP">TeamNexio.</a></p>
            </div>
        </div>

    </div>
  </div>
 </div>
</footer>

<!-- ================footer part finish================ -->


   <!-- back to top======== -->
   <a href="#"  class="back-to-top"><i class="fas fa-chevron-up"></i></a>
</body>

<!-- jquery link js------------ -->
<script src="<?php echo e(asset('public_asset/js/jquery-1.12.4.min.js')); ?>"></script>
<!-- main js link============= -->
<script src="<?php echo e(asset('public_asset/js/main.js')); ?>"></script>
<!-- bootstrap js link============== -->
<script src="<?php echo e(asset('public_asset/js/bootstrap.min.js')); ?>"></script>
<!-- owl js link======== -->
<script src="<?php echo e(asset('public_asset/js/owl.carousel.min.js')); ?>"></script>
<!-- waypoint js link----- -->
<script src="<?php echo e(asset('public_asset/js/waypoints.min.js')); ?>"></script>
<!-- venobox js link==== -->
<script src="<?php echo e(asset('public_asset/js/venobox.min.js')); ?>"></script>
<!-- counter js strat---- -->
<script src="<?php echo e(asset('public_asset/js/jquery.counterup.min.js')); ?>"></script>
<!-- popper js link-------- -->
<script src="<?php echo e(asset('public_asset/js/popper.min.js')); ?>"></script>
<!-- ----mixitup js------------ -->
<script src="<?php echo e(asset('public_asset/js/mixitup.min.js')); ?>"></script>
<script src="<?php echo e(asset('public_asset/js/scroll_slider.js')); ?>"></script>

</html>
<?php /**PATH D:\laragon\www\local\resources\views/userview/layout/navbar.blade.php ENDPATH**/ ?>