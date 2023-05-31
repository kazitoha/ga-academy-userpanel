 @extends('userview/layout/navbar')

 @section('userview-navbar')
  <!-- ======home and banner section start======= -->
    <section id="event-page-banner">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
  <!-- ======home and banner section finish======= -->

  <!-- ========== Academic part University of Dhaka start====== -->
    <section id="academic-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                   <div class="warpper pt-5">
                        <input class="radio" id="one" name="group" type="radio" checked>
                        <input class="radio" id="two" name="group" type="radio">
                        <input class="radio" id="three" name="group" type="radio">
                        <div class="tabs">
                        <label class="tab" id="one-tab" for="one">overview</label>
                        <label class="tab" id="two-tab" for="two">Image of that event</label>

                     </div>
                        <div class="panels">
                        <div class="panel" id="one-panel">
                            <div class="tabs-item">
                                <h3>{{$single_event_data->event_name}}</h3>

                                <h3 style="text-align:center; color: #d76b38;">Publication date: {{$single_event_data->event_date}}</h3>
                                <p>{{$single_event_data->about_event}}</p>

                            </div>
                        </div>
                        <div class="panel" id="two-panel">
                            <h3>Event Images</h3>
                             <div id="accordion">
                               @php
                               $get_the_file_name_in_array = explode(",", $single_event_data->file_path);

                              @endphp
                              @foreach($get_the_file_name_in_array as $value)
                               @php
                                      $file_name = str_replace(array('[', ']', '"'), " ", $value);
                                      $path = 'storage/event_files/'.$file_name;
                                      $path = str_replace(' ', '', $path);
                               @endphp

                                    <a class="venobox" data-gall="gallery01" href="{{asset($path)}}">
                                      <img src="{{asset($path)}}" style="height: 150px; width: 250px; padding: 5px;">
                                    </a>
                            @endforeach


                             </div>

                        </div>

                      </div>
                   </div>
                </div>
                <div class="col-lg-3">

                </div>
            </div>
        </div>
    </section>

  <!-- ========== Academic part University of Dhaka finish========== -->
@endsection
