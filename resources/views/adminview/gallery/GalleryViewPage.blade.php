@extends('adminview/navbar')

 @section('adminpanel-navbar')
  <!-- Lightbox css -->
<link href="{{asset('admin_asset/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
<div class="container-fluid">


        <!-- Plugins css -->
<link href="{{asset('admin_asset/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />




    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Gallery</h4>

                {{-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apaxy</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ol>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">



        <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                     <!-- showing error -->
                        @if ($errors->all())
                              <div class="alert alert-danger">
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                              </div>
                        @endif
                     <!--end showing error -->
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="font-size-14">Select Category</h5>
                            <select class=" form-control form-control-lg form-select  @error ('category')is-invalid @enderror" aria-label="Default select example" name="category">
                                  <option selected disabled>Open this select menu</option>
                                  <option value="1">Offices</option>
                                  <option value="2">Teachers</option>
                                  <option value="3">Others</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-4 mt-md-0"><br>
                                <h5 class="font-size-14">Title</h5>
                                <input class="form-control form-control-lg @error ('title')is-invalid @enderror" name="title" value="{{old('title')}}" type="text" placeholder="Enter title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mt-4 mt-md-0"><br>
                                <h5 class="font-size-14">Select Files</h5>
                                <input class="form-control form-control-lg @error ('file_name[]')is-invalid @enderror" name="file_name[]" type="file" multiple>
                            </div>
                        </div>

                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Send Files</button>
                    </div>

                </div>
            </div>
        </div>

      </form>

    </div>
    <div class="row">
      @foreach($galleryData as $value)
        <div class="col-lg-3 col-md-6">
            <div class="gallery-box text-center card p-2">
                <a href="{{asset('storage/gallery')}}/{{$value->file_path}}" class="text-dark gallery-popup">
                    <div class="position-relative gallery-content">
                        <div class="demo-img">
                            <img src="{{asset('storage/gallery')}}/{{$value->file_path}}" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-overlay-icon">
                                <i class="ti-zoom-in text-white"></i>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <h5 class="font-size-14 text-truncate mb-2">{{$value->title}}</h5>
                        </div>
                    </div><br>
                    <div class="btn-group" role="group" aria-label="Basic example">

                      <a class="btn btn-outline-info btn-sm" href="{{route('gallery.edit',base64_encode($value->id))}}">Edit</a>

                      <a class="btn btn-outline-warning btn-sm" href="{{route('gallery.delete',base64_encode($value->id))}}" >Delete</a>

                    </div>
                </a>
            </div>
        </div>
      @endforeach


    </div>
    <!-- end row -->

</div>








 @endsection
