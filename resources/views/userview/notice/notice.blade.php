@extends('userview/layout/navbar')

 @section('userview-navbar')
   
  <!-- ======home and banner section start welcome_message======= -->
    <section id="Notice-view-banner">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
  <!-- ======home and banner section finish welcome_message======= -->

<!-- ===========all Notice-view-part start==================== -->

<section id="Notice-view-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="Notice-view-heading">
                    <h3>Notice Board</h3>
                    <span><a href="{{route('notice')}}">Refresh<i class="fas fa-redo-alt"></i></a></span>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            
          </div>
          <div class="row pt-3">
              <div class="col-lg-8" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">

              @foreach($notice as $value)  
                <div class="Notice-box">
                  <div class="Notice-item">
                   <a href="Notice-single-page.html" target="blank"> <h2>{{$value->title}}</h2></a>
                    <ul>
                      <li class="date-time">{{$value->created_at->format('d-M-Y')}}</li>
                      <li class="Notice-btn-item"><a href="{{route('single.notice',base64_encode($value->id))}}" target="blank" class="btn-read">+ read more....</a></li>
                    </ul>
                  </div>
                  <hr>
                </div>
              @endforeach 

                
                <div class="pagination">
                  <ul class="pagination-2 ">
                              <div class="container">
                              {{ $notice->links("pagination::bootstrap-4") }}
                              </div>  
                   </ul>
                </div>
              </div>


        <div class="col-lg-4">
            <div class="useful-link">
                <h3>USEFUL LINKS</h3>
                <ul>
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('event')}}">Events</a></li>
                  <li><a href="{{url('gallery')}}">Gallery</a></li>
                  <li><a href="{{url('about/committee')}}">About Committee</a></li>
                  <li><a href="{{url('history')}}">School History</a></li>
                </ul>
            </div>
        </div>
       </div>
      </div>
</section>


<!-- ===========all latest news view finish==================== -->


 @endsection