@extends('userview/layout/navbar')

 @section('userview-navbar')
 <!-- ======home and banner section start======= -->
  <div class="owl-navigation" >
    <span class="owl-nav-prev"><i class="fas fa-chevron-left"></i></span>
    <span class="owl-nav-next"><i class="fas fa-chevron-right"></i></i></span>
</div>
<section id="home-part" >

    <div class="owl-carousel owl-theme home_slider">
        <div class="bakground" style="background-image: url(public_asset/images/43.jpg); background-position:center; background-repeat: no-repeat; background-size: cover;">
       <div class="container">
         <div class="row item banner-text-box">
            <div class="col-lg-7 col-md-7 col-sm-7">
               <div class="home-content-left">
                   <h4 style="color:white; ">Welcome to the Feni Girish-Akshay Academy.</h4>
               </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">

            </div>

        </div>
    </div>

    </div>





    @foreach($banner_datas as $key=>$banner_row)


    <div class="bakground" style="background-image: url(storage/banner/{{$banner_row->file_path}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
        <div class="row item banner-text-box">
            <div class="col-lg-7 col-md-7 col-sm-7">
               <div class="home-content-left">
                   <h4 style="color:white;">{{$banner_row->banner_title}}</h4>

               </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">

            </div>

        </div>
        </div>
        </div>


    @endforeach







</section>
<!-- ======home and banner section finish======= -->
<br>

<!-- =============Vice Chancellor and pro Vice Chancellor section strat============= -->

<section id="Vice-Chancellor-part">
    <div class="owl-carousel owl-theme voice_parts">
        <div>
            <div class="container">
            <div class="row item-2">
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="voice-left-chanecllor">
                        <a href="Vice-Chancellor.html">
                        <div class="voice-images-box">
                            <img src="images/professor/prinsi.png" alt="">
                            <p>Professor Dr. Md. Akhtaruzzaman</p>
                            <h5>principle</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <a href="#"><div class="voice-right-chanecllorr">
                        <h4>Message from the principle</h4>
                        <p>ফেনী গিরিশ-অক্ষয় একাডেমি বাংলাদেশের একটি ঐতিহ্যবাহী মাধ্যমিক শিক্ষা-প্রতিষ্ঠান হিসেবে শিক্ষাপ্রসারে গুরুত্বপূর্ণ অবদান রেখে আসছে। এ প্রাচীন বিদ্যাপীঠটি ১৯১৪ খ্রিষ্টাব্দে ফেনী ইনস্টিটিউশন নামে স্থাপিত হয়। পরবর্তীতে ১৯৩৩ খ্রিষ্টাব্দে এর প্রতিষ্ঠাতা ও দাতা যথাক্রমে স্বর্গীয় গিরিশ চন্দ্র মালাকার ও অক্ষয় কুমার মজুমদার-এর নামানুসারে ফেনী গিরিশ-অক্ষয় একাডেমি নামকরণ করা হয়। প্রতিষ্ঠাকাল থেকে স্কুলটি শিক্ষায় বহুমাত্রিক সুনামের স্বাক্ষর রেখেছে।
                            বর্তমান সরকার শিক্ষাকে সর্বোচ্চ গুরুত্ব প্রদান করছে। তাই পরিপূর্ণ শিক্ষা এখন সময়ের দাবী। আধুনিক তথ্য-প্রযুক্তির যুগ বিবেচনায় শিক্ষায় আনা হয়েছে এক বৈপ্লবিক পরিবর্তন। ডিজিটাইলেজশন তারই অংশ । এই প্রক্রিয়ার সাথে সংগতিবিধান নিমিত্ত স্কুলে খোলা হচ্ছে ডাইনামিক ওভেবসাইট এবং চালু করা হচ্ছে ডিজিটাল সফট্ওয়্যার। আশা করি, সংশ্লিষ্ট সকলের সহযোগিতায় ডিজিটাল ব্যবস্থাপনায় আমাদের প্রিয় স্কুলটি হালনাগাদ থাকবে এবং সহজে ও দ্রæতভাবে সকলের নিকট শিক্ষা-সেবা পৌঁছে দিতে সক্ষম হবে। স্কুলের সর্বাঙ্গীন উন্নতিতে অকুন্ঠ ও সক্রিয় ভূমিকা রাখার জন্য ম্যানেজিং কমিটিসহ সকলের প্রতি কৃতজ্ঞতা জ্ঞাপন করছি। </p>
                            <a href="Vice-Chancellor.html" class="voice-btn">read more</a>

                        </div>
                       </a>
                </div>
              </div>
          </div>
        </div>
        <div>
            <div class="container">
            <div class="row item-2">
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="voice-left-chanecllor">
                        <a href="Vice-Chancellor.html">
                        <div class="voice-images-box">
                            <img src="images/professor/prinsi.png" alt="">
                            <p>Professor Dr. Md. Akhtaruzzaman</p>
                            <h5>principle</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <a href="#"><div class="voice-right-chanecllorr">
                        <h4>Message from the principle</h4>
                        <p>Welcome to the University of Dhaka’s website, featuring the oldest, largest and the premier multidisciplinary university of Bangladesh! 
                            Founded in 1921, The University of Dhaka has always had the mission of uplifting the educational standards of the people of the region. It was initially meant to provide tertiary education to people who didn’t have access to higher studies till then. Subsequently, it has contributed significantly to the socio-cultural and political development of what was once East Bengal and then East Pakistan, and is now Bangladesh.
                            Since its establishment, the university has been fulfilling the hopes and aspirations  ...</p>
                            <a href="Vice-Chancellor.html" class="voice-btn">read more</a>

                        </div>
                       </a>
                </div>
              </div>
          </div>
        </div>
        <div>
            <div class="container">
            <div class="row item-2">
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="voice-left-chanecllor">
                        <a href="Vice-Chancellor.html">
                        <div class="voice-images-box">
                            <img src="images/professor/prinsi.png" alt="">
                            <p>Professor Dr. Md. Akhtaruzzaman</p>
                            <h5>principle</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <a href="#"><div class="voice-right-chanecllorr">
                        <h4>Message from the principle</h4>
                        <p>Welcome to the University of Dhaka’s website, featuring the oldest, largest and the premier multidisciplinary university of Bangladesh! 
                            Founded in 1921, The University of Dhaka has always had the mission of uplifting the educational standards of the people of the region. It was initially meant to provide tertiary education to people who didn’t have access to higher studies till then. Subsequently, it has contributed significantly to the socio-cultural and political development of what was once East Bengal and then East Pakistan, and is now Bangladesh.
                            Since its establishment, the university has been fulfilling the hopes and aspirations  ...</p>
                            <a href="Vice-Chancellor.html" class="voice-btn">read more</a>

                        </div>
                       </a>
                </div>
              </div>
          </div>
        </div>

              
          </div>
    </section>

<!-- =============Vice Chancellor and pro Vice Chancellor section finsh============= -->


<!-- =====================counter part start=================== -->
        <section id="counter_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="line-header">
                            <h2>feni academy in Numbers</h2>
                            <div class="under-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 pb-md-5 pb-lg-0">
                            <div class="couter-box">
                               <i class="fas fa-university"></i>
                               <h1><span class="counter">1914</span></h1>
                               <h3>Founded</h3>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 pb-md-5 pb-lg-0">
                            <div class="couter-box">
                               <i class="fas fa-user-shield"></i>
                               <h1><span class="counter">3</span></h1>
                               <h3>Total Department</h3>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 pb-md-5 pb-lg-0">
                            <div class="couter-box">
                               <i class="fas fa-users"></i>
                               <h1><span class="counter">3000</span></h1>
                               <h3>Regular Students</h3>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 pb-md-5 pb-lg-0">
                            <div class="couter-box">
                               <i class="fas fa-school"></i>
                               <h1><span class="counter">{{$officeStaff}}</span></h1>
                               <h3>teachers</h3>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- ================counter part finish=========================== -->



<section id="feature-news-event-part">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="feature-news-event-left">
                <div class="feature-news-event-content">
                    <h3 class="float-left">FEATURED- <strong> Notices</strong></h3>
                </div>
            </div>
            <div class="owl-carousel owl-theme feature-event-news">
                @php $i=1; @endphp

                @foreach($notice_data as $value)
                    @if ($i == 5)
                        @break
                    @endif
                <div class="feature-left-images-box">
                    @if($value->file_path == null)
                     <img src="{{asset('public_asset/images/dummy_img/notice_defult.png')}}" alt="">
                    @elseif(!$value->file_path == null)
                     <img src="{{asset('storage/notice_files/'.$value->file_path)}}" alt="">
                    @endif
                    <div class="images-content-feature">
                        <a href="{{route('single.notice',base64_encode($value->id))}}"><h2>{{$i++.".".$value->title}}</h2></a>
                           <a href="{{route('single.notice',base64_encode($value->id))}}" class="welcome-btn btn-block">read more <i class="fas fa-check-circle"></i></a>
                       </div>
                    </div>
                 @endforeach

            </div>
        </div>
        <div class="col-lg-4">
            <div class="feature-right-content">
                    <div class="heading-feature text-center">
                        <h2>Last Notices</h2>
                    </div>
                </div>
            <div class="feature-event-news-rights" style="overflow: scroll; height: 410px;">



                @foreach($notice_data as $value)
                   @if (!$i == 5)
                        @break
                    @endif
                   <div class="feature-event-right-details">
                    <a href="#">
                   <div class="feature-images-right-details">
                       <a href="{{route('single.notice',base64_encode($value->id))}}"> <h4>{{$i++.".".$value->title}}</h4> </a>
                       <span><i class="fas fa-book-open"></i>  {{$value->created_at->format('d-M-Y')}}</span></a>
                   </div>
                @endforeach


                   </div>
                     <div class="all-view">
                        <a href="{{url('notice')}}" class="view-btn-student">view all <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>




<!-- ==========Facilities============= -->
<section class="pt-5 pb-3" style="color:#161515">
    <div class="container">
        <div class="col-6">
                <h3 class="mb-3"><img src="{{asset('public_asset/facilities.png')}}"></h3>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text"><i class="fa fa-arrow-right" aria-hidden="true"></i> Guide Teacher
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <!-- <h3 class="card-title"></h3> -->
                    <p class="card-text"><i class="fa fa-arrow-right" aria-hidden="true"></i> Computer Lab
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text"><i class="fa fa-arrow-right" aria-hidden="true"></i> Laboratories
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text"><i class="fa fa-arrow-right" aria-hidden="true"></i> Library
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>

    </div>
</section>
<!-- ==========Facilities finish============= -->


<!-- ==========Latest News part start============= -->
<section class="pt-5 pb-5" style="color:#161515">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Events</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-color mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-color mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">


                            @php
                                $e=0;
                            @endphp
                            @foreach($event_datas as $key=>$event_data)
                              @php $e++; @endphp
                                @if($e==1)
                                <div class="carousel-item @if($key ==0) active @endif">
                                 <div class="row">
                               @endif
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        @if(!$event_data->file_path == null)
                                         <img src="{{asset('storage/event_files/'.$event_data->file_path)}}" height="150" width="350" alt="">
                                        @elseif($event_data->file_path == null)
                                         <img src="{{asset('public_asset/default_event.png')}}" height="150" width="350" alt="">

                                        @endif
                                        <a href="">
                                        <div class="card-body" style=" height: 217px; width: auto; overflow-y: scroll; ">
                                            <h4 class="card-title"></h4>
                                            <p class="card-text">
                                               <a href="{{route('single.event', base64_encode($event_data->id))}}" style="color:black;">
                                                @php echo limit_text($event_data->event_name, 10); @endphp</p></a>
                                        </div>
                                        </a>

                                    </div>
                                </div>


                                @if($e==3)
                                  </div>
                                  </div>
                                  @php $e=0; @endphp
                                @endif
                            @endforeach







                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Latest News part finish============= -->




@endsection
