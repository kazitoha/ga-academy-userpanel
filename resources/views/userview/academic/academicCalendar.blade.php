@extends('userview/layout/navbar')

 @section('userview-navbar')
  <!-- ======home and banner section start======= -->
    <section id="welcome-page-banner">
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
                      <!-- <iframe src="{{asset('public_asset/files/Bangladesh-Holiday-2023-Calendar.pdf')}}"></iframe> -->
                      <div class="container" style="text-align:center;">

                         <img 
                         height="900px" width="900px" src="{{asset('public_asset/images/calender.jpg')}}">
                          
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

  <!-- ==========about history outline University of Dhaka finish========== -->

 @endsection