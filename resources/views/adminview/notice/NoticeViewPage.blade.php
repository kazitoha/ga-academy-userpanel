@extends('adminview/navbar')

 @section('adminpanel-navbar')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Add Notice</h4>

                 @if ($errors->any())
                 <div class="alert alert-danger" role="alert">
                     @foreach ($errors->all() as $error)
                         <li>{{$error}}</li>
                     @endforeach
                 </div>
                @endif

                <form class="custom-validation" action="{{route('notice.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" maxlength="120" class="form-control @error ('title')is-invalid @enderror"  placeholder="Type something" name="title" value="{{old('title')}}" required/>
                    </div>

                    
                    <div class="form-group">
                        <label>File</label>
                        <div>
                            <input type="file" class="form-control" name="file_name" value="{{old('file_name')}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <div>
                            <textarea required class="form-control @error('description')is-invalid @enderror" name="description" value="{{old('description')}}" rows="5"></textarea>
                        </div>
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

</div> <!-- end row --> 



@endsection