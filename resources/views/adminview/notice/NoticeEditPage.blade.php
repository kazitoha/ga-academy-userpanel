@extends('adminview/navbar')

 @section('adminpanel-navbar')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Edit Notice</h4>

                <form class="custom-validation" action="{{route('notice.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" name="update_id" value="{{base64_encode($noticeGetData->id)}}"/>
                    <div class="form-group">
                        <label>Category</label>
                        <select class=" form-control"  @error ('category')is-invalid @enderror" aria-label="Default select example" name="category">
                              <option disabled>Select Category</option>
                              <option value="1" @if($noticeGetData->category==1) selected @endif>Teacher's Notice</option>
                              <option value="2" @if($noticeGetData->category==2) selected @endif>Students Notice</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control @error ('title')is-invalid @enderror"  placeholder="Type something" name="title" value="{{$noticeGetData['title']}}" required/>
                    </div>


                    <div class="form-group">
                        <label>File</label>
                        <div>
                            <input type="file" class="form-control" name="file_name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <div>
                            <textarea class="form-control @error ('description')is-invalid @enderror" name="description" rows="5">{{$noticeGetData->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->


    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Notice Image</h4>

               {{-- <img src="{{ asset('storage/notice_files/9.jpg') }}" class="form-control" style="height: 352px"> --}}

               <div class="position-relative gallery-content">
                <div class="demo-img">
                    <img src="{{asset('storage/notice_files')}}/{{$noticeGetData->file_path}}" alt="" class="img-fluid mx-auto d-block rounded"><br>
                </div>
                <div class="gallery-overlay">
                    <div class="gallery-overlay-icon">
                        <i class="ti-zoom-in text-white"></i>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

</div> <!-- end row -->

@endsection
