<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feni Girish-Akshay Academy High School</title>
    @laravelPWA
    <link rel="icon" type="image/x-icon" href="{{asset('public_asset/images/logo.jpg')}}">
    <!-- fontawesome link---- -->
    <link rel="stylesheet" href="{{asset('public_asset/css/all.min.css')}}">
    <!-- owl slider link ========= -->
    <link rel="stylesheet" href="{{asset('public_asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public_asset/css/owl.theme.default.min.css')}}">
    <!-- venobox link------= -->
    <link rel="stylesheet" href="{{asset('public_asset/css/venobox.min.css')}}">
    <!-- bootstrap link============= -->
    <link rel="stylesheet" href="{{asset('public_asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_asset/assets/css/bootstrap.min.css.map')}}">
    <!-- main css link-------- -->
    <link rel="stylesheet" href="{{asset('public_asset/css/style.css')}}">
     <!-- responsive css strat------- -->
     <link rel="stylesheet" href="{{asset('public_asset/css/responsive.css')}}">
     <link rel="stylesheet" href="{{asset('public_asset/css/scroll_slider.css')}}">
     <!-- font awosome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    @php
       $url=Route::current()->uri;
    @endphp


<!-- header part finish -->
     <!-- Navbar part start -->
  <nav class="navbar navbar-expand-lg navbar-light sticky_top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{asset('public_asset/images/logo.jpg')}}" alt="" class="img-fluid" style="width: 79px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link  @if($url == '/') active @endif" href="{{url('/')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link @if($url == 'notice'|| $url == 'single/notice/{id}') active @endif" href="{{route('notice')}}">notice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($url == 'news'|| $url == 'single/news/{id}') active @endif" href="{{route('news')}}">News</a>
          </li>

          <li class="nav-item">
            <a class="nav-link @if($url == 'event' || $url == 'single/event/{id}') active @endif" href="{{route('event')}}">Event</a>
          </li>

          <li class="nav-item">
            <a class="nav-link @if($url == 'teacher&staff' || $url=='select/office/{id}') active @endif" href="{{route('teacher')}}">Teacher & Staff</a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle @if($url == 'academic/calendar'||$url == 'honorable/guardians') active @endif" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                Academic
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item @if($url == 'academic/calendar') active @endif" href="{{route('academic.calendar')}}">Academic Calendar</a>
                <a class="dropdown-item @if($url == 'honorable/guardians') active @endif" href="{{route('honorable.guardians')}}">Honorable Guardians</a>

            </div>
          </li>


           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle @if($url == 'about/committee' || $url == 'history'||$url == 'gallery'|| $url == 'contact') active @endif" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                About
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item @if($url == 'about/committee') active @endif" href="{{route('about.committee')}}">About Committee</a>
                <a class="dropdown-item @if($url == 'history') active @endif" href="{{route('history')}}">About School</a>
                <a class="dropdown-item @if($url == 'gallery') active @endif" href="{{route('gallery')}}">gallerys</a>
                <a class="dropdown-item @if($url == 'contact') active @endif" href="{{route('contact')}}">Contact</a>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://user.fenigaacademy.edu.bd/login">Login</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar part finish -->














    @yield('userview-navbar')













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
                        <a href="{{url('notice')}}"><i class="fa fa-bell-o" aria-hidden="true"></i> Notice</a>
                        </li>
                        <li>
                        <a href="{{url('event')}}"><i class="fa fa-calendar" aria-hidden="true"></i> Event</a>
                        </li>
                        <li>
                        <a href="{{url('teacher&staff')}}"><i class="fa fa-user" aria-hidden="true"></i> About Teacher & Staff</a>
                        </li>
                        <li>
                        <a href="{{url('gallery')}}"><i class="fa fa-file-image-o" aria-hidden="true"></i> Gallery</a>
                        </li>
                        <li>
                        <a href="{{url('about/committee')}}"><i class="fa fa-address-card-o" aria-hidden="true"></i> About Committee</a>
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
                        <a href="{{url('history')}}"><i class="fa fa-history" aria-hidden="true"></i> School History</a>
                      </li>
                      <li>
                        <a href="{{url('academic/calendar')}}"><i class="fa fa-calendar" aria-hidden="true"></i> Academic Calendar</a>
                      </li>
                      <li>
                        <a href="{{url('honorable/guardians')}}"><i class="fa fa-users" aria-hidden="true"></i> Honorable Guardians</a>
                      </li>
                     </ul>
                   </div>
                </div>
           </div>


   <div class="col-lg-6 col-md-6">
    <div class="footer-top-one">
        <img src="{{asset('public_asset/images/logo.jpg')}}" height="82" width="92" alt="">
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
<script src="{{asset('public_asset/js/jquery-1.12.4.min.js')}}"></script>
<!-- main js link============= -->
<script src="{{asset('public_asset/js/main.js')}}"></script>
<!-- bootstrap js link============== -->
<script src="{{asset('public_asset/js/bootstrap.min.js')}}"></script>
<!-- owl js link======== -->
<script src="{{asset('public_asset/js/owl.carousel.min.js')}}"></script>
<!-- waypoint js link----- -->
<script src="{{asset('public_asset/js/waypoints.min.js')}}"></script>
<!-- venobox js link==== -->
<script src="{{asset('public_asset/js/venobox.min.js')}}"></script>
<!-- counter js strat---- -->
<script src="{{asset('public_asset/js/jquery.counterup.min.js')}}"></script>
<!-- popper js link-------- -->
<script src="{{asset('public_asset/js/popper.min.js')}}"></script>
<!-- ----mixitup js------------ -->
<script src="{{asset('public_asset/js/mixitup.min.js')}}"></script>
<script src="{{asset('public_asset/js/scroll_slider.js')}}"></script>

</html>
