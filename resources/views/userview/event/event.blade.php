@extends('userview/layout/navbar')

@section('userview-navbar')
    <!-- ======home and banner section start======= -->
    <section id="event-page-banner">
        <div class="container">

        </div>
    </section>
    <!-- ========== Academic part University of Dhaka start====== -->
    <section id="academic-part">
        <div class="container">
            <form action="{{ route('search.event.userview') }}" method="post">
                @csrf
                <div class="row pb-0">
                    <div class="col-lg-9">
                        <input type="text" placeholder="Enter program name" class="form-control" value=""
                            name="programName" id="programName" required>
                    </div>
                    <div class="col-lg-3">
                        <button class="academic-reset" style="border-radius: 10px;">
                            <i class="fas fa-sync-alt"></i>reset filter
                        </button>
                        <p></p>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="blog-content col-lg-9 col-md-6 md-pt-0">
                    <div class="col-sm-offset-4 col-sm-4">
                        <img class="loadlater" src="images/loaderNew.gif" style="height: 50px;display: none">
                    </div>
                    <div class="content-items" id="showCourseFinder">
                        <div class="clearfix"></div>
                        <h4 class="text-center">Total <span class="badge badge-secondary">{{ $all_event->count() }}</span>
                            Events</h4>
                        <div class="row">
                            @foreach ($all_event as $value)
                                <div class="single-item col-lg-12">
                                    <div class="item">
                                        <div class="info">
                                            <div class="content">
                                                <h4>{{ $value->event_name }}</h4>
                                                <a href="{{ route('single.event', $value->slug) }}" class="btn-read">+ read
                                                    more....</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="pagination" style="text-align:center;">
                                <ul class="pagination-2">
                                    <div class="container">
                                        {{ $all_event->links('pagination::bootstrap-4') }}
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Items -->
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Academic part University of Dhaka finish========== -->
@endsection
