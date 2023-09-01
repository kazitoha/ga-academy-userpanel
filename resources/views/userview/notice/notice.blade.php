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
                        <span><a href="{{ route('notice') }}">Refresh<i class="fas fa-redo-alt"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="row pt-2">

            </div>
            <div class="row pt-3 notice_div">
                <div class="col-lg-9" style="box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">

                    @foreach ($notice as $value)
                        <div class="Notice-box">
                            <div class="Notice-item">
                                <a href="#" target="blank">
                                    <h2>{{ $value->title }}</h2>
                                </a>
                                <ul>
                                    <li class="date-time">{{ $value->created_at->format('d-M-Y') }}</li>
                                    <li class="Notice-btn-item"><a
                                            href="{{ route('single.notice', base64_encode($value->id)) }}" target="blank"
                                            class="btn-read">+ read more....</a></li>
                                </ul>
                            </div>
                            <hr>
                        </div>
                    @endforeach


                    <div class="pagination">
                        <ul class="pagination-2 ">
                            <div class="container">
                                {{ $notice->links('pagination::bootstrap-4') }}
                            </div>
                        </ul>
                    </div>
                </div>
                @php
                    $url = Route::current()->uri;
                @endphp

                <div class="col-lg-3">
                    <div class="useful-link">
                        <h3>Category</h3>
                        <ul>
                            <li><a href="{{ url('/notice') }}"><b @if ($url == 'notice') @php $id=''; @endphp style="color:red" @endif>All</b></li>
                            <li><a href="{{ url('select/notice/1') }}"><b @if($id == 1) style="color:rgb(220, 52, 52)" @endif>Teacher's Notice</b></a></li>
                            <li><a href="{{ url('select/notice/2') }}"><b @if($id ==2) style="color:rgb(220, 52, 52)" @endif>Student's Notice</b></a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ===========all latest news view finish==================== -->
@endsection
