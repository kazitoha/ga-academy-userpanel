@extends('userview/layout/navbar')

 @section('userview-navbar')
    <!-- ======home and banner section start======= -->
    <section id="welcome-page-banner">
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


                  <iframe class="map-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.0537444995402!2d91.4019039!3d23.0217988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753684a4dda6d49%3A0x5f77b51a97434e52!2sFeni%20G.A%20Academy%20High%20School!5e0!3m2!1sen!2sbd!4v1675526353199!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>


                
                
              </div>


        <div class="col-lg-5">
            <div class="useful-link">
                <h3>Contct information</h3>
                <ul style="color: #3a2b2be3;">
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <b>Feni Girish-Akshay Academy High School,</b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i> <b>Academy Road, Feni 3900.</b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i><b> Phone:</b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i><b> Mobile:</b></p>
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i><b> Email: gaa.feni@yahoo.com</b> </p>
                    
                </ul>
            </div>
        </div>
       </div>
      </div>
</section>


  <!-- ========== Academic part University of Dhaka finish========== -->



  @endsection