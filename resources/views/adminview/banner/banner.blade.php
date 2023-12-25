@extends('adminview/navbar')

@section('adminpanel-navbar')
<div class="row">
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title d-flex justify-content-center">Add Banner</h4>

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif

            <form class="custom-validation" action="{{route('banner.store')}}" method="post" enctype="multipart/form-data" novalidate>
                @csrf


                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control @error ('title')is-invalid @enderror" value="{{old('title')}}" placeholder="Enter banner title.">
                    <p style="color:red">The title must not be greater than 60 characters.</p>
                </div>

                <div class="form-group">
                    <label>File</label>
                    <input type="file" name="banner_file" class="form-control @error ('banner_file')is-invalid @enderror" value="{{old('banner_file')}}" >
                </div>

                <div class="form-group mb-0">
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                            Submit
                        </button>
                        <button type="reset" class="btn btn-secondary waves-effect">
                            Cancel
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div> <!-- end col -->




<div class="row">
    @foreach($bannerData as $value)
    <div class="col-lg-3 col-md-6">
        <div class="gallery-box text-center card p-2">
            <a href="{{asset('storage/banner')}}/{{$value->file_path}}" class="text-dark gallery-popup">
                <div class="position-relative gallery-content">
                    <div class="demo-img">
                        <img src="{{asset('storage/banner')}}/{{$value->file_path}}" alt="" class="img-fluid mx-auto d-block rounded">
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-icon">
                            <i class="ti-zoom-in text-white"></i>
                        </div>
                    </div>
                    <div class="overlay-content">
                        <h5 class="font-size-14 text-truncate mb-2">{{$value->banner_title}}</h5>
                    </div>
                </div><br>
                <div class="btn-group" role="group" aria-label="Basic example">

                    <!-- <a class="btn btn-outline-info btn-sm" href="">Edit</a> -->

                    <a class="btn btn-outline-warning btn-sm" href="{{route('banner.delete',base64_encode($value->id))}}" >Delete</a>

                </div>
            </a>
        </div>
    </div>
    @endforeach


</div>
<!-- end row -->



</div> <!-- end row -->








@endsection
