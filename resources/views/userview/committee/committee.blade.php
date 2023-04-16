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
                    <div id="accordion">



                      @foreach($committee_info as $key=>$value)
                        <div class="accordion-item">
                      <div class="accordion-header @if(!$key == 0) collapsed @endif" data-toggle="collapse" data-target="#collapse{{ $value->id }}"><h3>{{ $value->name }}({{ $value->designation }})</h3>
                      </div>
                      <div class="collapse @if($key == 0) show @endif" id="collapse{{ $value->id }}" data-parent="#accordion" style="color:red;">
                        <div class="accordion-body"  style="overflow: hidden;">

                          <div class="committee-according-image">
                            <img src="{{ asset('storage/committee_files/'.$value->file_path) }}" class="card-img-top" alt="..." style="width:200px" >
                          </div>  
                          <div class="according-details">
                            <h4>{{$value->name}}</h4>
                            <b style="color:#5c5454;">Email: {{$value->email}}</b><br>
                            <b style="color:#5c5454;">Designation:  {{$value->designation}}</b><br>
                            <b style="color:#5c5454;">Phone: {{$value->phone}}</b><br>
                            <b style="color:#5c5454;">About him: </b>
                            <p>{{$value->about}}</p>

                          </div>
                        </div>
                      </div>
                    </div>
                      @endforeach
                        



                      </div>
                </div>
               
            </div>
        </div>
    </section>

  <!-- ==========about history outline University of Dhaka finish========== -->



  @endsection