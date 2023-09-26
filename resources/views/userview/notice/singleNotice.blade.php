@extends('userview/layout/navbar')

@section('userview-navbar')
    <!-- ======home and banner section start======= -->
    <section id="Notice-view-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                </div>
            </div>
        </div>
    </section>
    <!-- ======home and banner section finish======= -->

    <!-- ==========Welcome to the University of Dhaka start====== -->
    <section id="welcome-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content-welcome-left">
                        <div class="publish-content">
                            <a ahref="#">
                                <p><i class="fas fa-calendar-alt"></i> Published:
                                    {{ $single_notice->created_at->format('d-M-Y') }}</p>
                            </a>
                        </div>
                        <div class="content-heading">
                            <h2>{{ $single_notice->title }}</h2>

                            <p>{!! $single_notice->description !!}</p>
                            @if ($single_notice->file_sys_ver == 1)
                                @php
                                    $file_name = $single_notice->file_path;
                                    if (!$single_notice->file_path == null) {
                                        $file_name = $single_notice->file_path;
                                    }
                                    $file_type_explode = explode('.', $file_name);
                                    $extension = end($file_type_explode);
                                @endphp

                                @if ($extension == 'pdf')
                                    <iframe src="{{ asset('storage/notice_files/' . $single_notice->file_path) }}"
                                        width="100%" height="600px"></iframe>
                                @endif
                                @if ($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg')
                                    <img src="{{ asset('storage/notice_files/' . $single_notice->file_path) }}"
                                        alt="" style="overflow:scroll; height:auto; width:auto">
                                @endif
                            @endif


                            {{-- file system v2 --}}


                            @if ($single_notice->file_sys_ver == 2)
                                @php
                                    $file_names = unserialize($single_notice['file_path']);
                                @endphp
                                @if (!empty($file_names))
                                    @foreach ($file_names as $key => $value)
                                        @php
                                            $explode_file = explode('.', $value[0]);
                                            $extension = end($explode_file);
                                        @endphp

                                        @if ($extension == 'jpg' || $explode_file[1] == 'png' || $explode_file[1] == 'jpeg')
                                            <img src="{{ asset('storage/notice_files') }}/{{ $value[0] }}"
                                                alt=""><br>
                                        @endif

                                        @if ($extension == 'pdf')
                                            <iframe src="{{ asset('storage/notice_files') }}/{{ $value[0] }}"
                                                width="100%" height="600px"></iframe>
                                        @endif
                                    @endforeach
                                @endif
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="welcome-content-right">
                        <div class="welcome-slide" style="overflow:scroll; height:661px;">
                            <h2>NOTICE LIST</h2>

                            @foreach ($notice_paginate as $value)
                                <div class="right-slide-content text-center">
                                    <a href="{{ route('single.notice', $value->slug) }}">
                                        <h5>{{ $value->title }}</h5>
                                    </a>
                                    <span>Published: {{ $value->created_at->format('d-M-Y') }}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="all-view">
                            <a href="{{ url('notice') }}" class="view-btn" style="margin-top: 11px;">view all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========Welcome to the University of Dhaka finish========== -->
@endsection
