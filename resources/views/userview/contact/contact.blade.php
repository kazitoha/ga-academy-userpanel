@extends('userview/layout/navbar')

 @section('userview-navbar')
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
                    <span><a href="{{url('contact')}}">Refresh<i class="fas fa-redo-alt"></i></a></span>
                </div>
            </div>
        </div>
        <div class="row pt-2">

          </div>
          <div class="row pt-3">
              <div class="col-lg-7" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">



                  @if(!empty(websiteSetting())){!!websiteSetting()->google_map_link!!}@endif


              </div>


        <div class="col-lg-5">
            <div class="useful-link">
                <h3>Contct information</h3>
                <ul style="color: #3a2b2be3;">
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <b> @if(!empty(websiteSetting())){{websiteSetting()->school_name}}@else {{"School Name"}}@endif</b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <b> @if(!empty(websiteSetting())){{websiteSetting()->address}}@else {{"School Address"}}@endif.</b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i><b> Phone:  @if(!empty(websiteSetting())){{websiteSetting()->phone_number}}@else {{""}}@endif</b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i><b> Mobile:  @if(!empty(websiteSetting())){{websiteSetting()->mobile_number}}@else {{""}}@endif</b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i><b> Email:  @if(!empty(websiteSetting())){{websiteSetting()->email}}@else {{"School@email.com"}}@endif</b> </p>

                </ul>
            </div>
        </div>
       </div>
      </div>
</section>


  <!-- ========== Academic part University of Dhaka finish========== -->



  @endsection
