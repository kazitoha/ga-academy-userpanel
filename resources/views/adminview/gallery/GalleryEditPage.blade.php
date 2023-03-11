@extends('adminview/navbar')

 @section('adminpanel-navbar')

   <!-- Lightbox css -->
<link href="{{asset('admin_asset/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
<div class="container-fluid">


        <!-- Plugins css -->
<link href="{{asset('admin_asset/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

    

<div class="row">
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

                <h4 class="header-title d-flex justify-content-center">Edit Gallery Image</h4>

                <form class="custom-validation" action="{{route('gallery.update')}}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                  <input type="hidden" name="edit_id" value="{{base64_encode($galleryEditData->id)}}">
                <div class="form-group">
                  <select class=" form-control form-control-lg form-select  @error ('category')is-invalid @enderror" aria-label="Default select example" name="category">
                          <option selected disabled>Open this select menu</option>
                          <option value="1"@if($galleryEditData->category == 2) selected @endif >Offices</option>
                          <option value="2" @if($galleryEditData->category == 2) selected @endif>Teachers</option>
                          <option value="3" @if($galleryEditData->category == 3) selected @endif>Others</option>
                   </select>
                </div>   
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control @error ('title')is-invalid @enderror" value="{{$galleryEditData->title}}" placeholder="Enter title.">
                    </div>
              
                    <div class="form-group">
                        <label>Image</label>
                        <div>
                            <input type="file" class="form-control" name="file_name" value="" />
                        </div>
                    </div>

                 <div class="form-group">
                     <div class="col-lg-6 col-md-6">
                        <div class="gallery-box text-center card p-2">
                            <a href="{{asset('storage/gallery')}}/{{$galleryEditData->file_path}}" class="text-dark gallery-popup">
                                <div class="position-relative gallery-content">
                                    <div class="demo-img">
                                        <img src="{{asset('storage/gallery')}}/{{$galleryEditData->file_path}}" alt="" class="img-fluid mx-auto d-block rounded">
                                    </div>
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-icon">
                                            <i class="ti-zoom-in text-white"></i>
                                        </div>
                                    </div>
                                </div>
                
                                </div>
                            </a>
                        </div>
                    </div>
                </div>    


                    <div class="form-group mb-0" style="    padding: 5px;">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Submit
                            </button>
                            <a href="{{route('gallery.view')}}" class="btn btn-secondary waves-effect">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->

</div> <!-- end row --> 



@endsection