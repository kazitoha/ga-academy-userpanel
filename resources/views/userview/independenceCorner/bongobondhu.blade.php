@extends('userview/layout/navbar')

 @section('userview-navbar')
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
                            <h2>বঙ্গবন্ধু কর্নার </h2>
                            <div class="under-bottom"></div>
                            <br>
                            <img src="{{asset('storage/bongobondhu/'.$bongobondhuData->file_name)}}" width="450">

                    </div>
                    <div class="mission-para mt-5">
                        {!! $bongobondhuData->description !!}
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

  <!-- ==========about history outline University of Dhaka finish========== -->

 @endsection
