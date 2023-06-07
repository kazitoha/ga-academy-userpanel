@extends('adminview/navbar')

 @section('adminpanel-navbar')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Edit News</h4>

                <form class="custom-validation" action="{{route('news.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" name="update_id" value="{{base64_encode($newsGetData->id)}}"/>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control @error ('title')is-invalid @enderror"  placeholder="Type something" name="title" value="{{$newsGetData['title']}}" required/>
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
                            <textarea required class="form-control @error ('description')is-invalid @enderror" name="description" rows="5">{{$newsGetData->description}}</textarea>
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

</div> <!-- end row -->



@endsection
