@extends('userview/layout/navbar')

 @section('userview-navbar')
 




  <!-- ======home and banner section start welcome_message======= -->
  <section id="latest-news-view-banner">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>
<!-- ======home and banner section finish welcome_message======= -->

  <!-- ==========start Offices====== -->
  <section id="about-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="latest-news-heading">
                <h3>About Teacher</h3>
                <span><a href="{{ url('teacher&staff') }}">Refresh<i class="fas fa-redo-alt"></i></a></span>
            </div>
        </div>
    </div><br>
        <div class="row">
            <div class="col-lg-8">
                <div id="accordion">
                 @foreach ($staff_infos as $key=>$value)
                    <div class="accordion-item">
                      <div class="accordion-header @if(!$key == 0) collapsed @endif" data-toggle="collapse" data-target="#collapse{{ $value->id }}"><h3>{{ $value->name }}({{ $value->designation }})</h3>
                      </div>
                      <div class="collapse @if($key == 0) show @endif" id="collapse{{ $value->id }}" data-parent="#accordion">
                        <div class="accordion-body"  style="overflow: hidden;">

                          <div class="committee-according-image">
                            @if(!$value->file_path==null)
                            <img src="{{ asset('storage/staff_info_files/'.$value->file_path) }}" class="card-img-top" alt="..." style="width: 164px; height: 164px;border-radius: 25%;" >
                            @else
                             <img src="{{ asset('public_asset/images/dummy_img/default_staff_img.jpg') }}" class="card-img-top" alt="..." style="width: 164px; height: 164px;border-radius: 25%;" >
                             @endif
                          </div>  
                          <div class="according-details">
                            <h4>{{$value->name}}</h4>
                            <b style="color:#5c5454;">Email: {{$value->email}}</b><br>
                            <b style="color:#5c5454;">Designation:  {{$value->designation}}</b><br>
                            <b style="color:#5c5454;">Phone: {{$value->phone}}</b><br>
                            @if($value->about != null)
                            <b style="color:#5c5454;">About him: </b>
                            <p>{{$value->about}}</p>
                            @endif

                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach  



                  </div>
            </div>
             @php 
               $url=Route::current()->uri;
             @endphp
             

            <div class="col-lg-4">
              <div class="useful-link">
                  <h3>Teacher & Staff </h3>
                  <ul>
                    <li ><a href="{{ url('/teacher&staff') }}"><b @if($url =="teacher&staff") style="color:red" @endif>All</b></li>
                      <li ><a href="{{ url('select/office/1')}}"><b @if($id ==1) style="color:red" @endif>Teacher</b></a></li>
                      <li ><a href="{{ url('select/office/2')}}"><b @if($id==2) style="color:red" @endif>Staff</b></a></li>

                      
                  </ul>
              </div>
          </div>
        </div>
    </div>
</section>

<!-- ========== End Office ========== -->


  @endsection