@extends('adminview/navbar')

 @section('adminpanel-navbar')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Edit Committee Member</h4>
                 <!-- showing error -->
            @if ($errors->all())
              <div class="card">
                <div class="card-header">
                  <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                  </div>
                </div>
              </div>
            @endif
         <!--end showing error -->

                <form class="custom-validation" action="{{route('committee.update')}}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf

                    <input type="hidden" name="update_id" value="{{ base64_encode($committeeGetData->id) }}">

        

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control @error ('name')is-invalid @enderror" value="{{ $committeeGetData->name}}" placeholder="Enter name.">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control @error ('designation')is-invalid @enderror" value="{{$committeeGetData->designation}}" placeholder="Enter designation.">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email"  class="form-control @error ('email')is-invalid @enderror" value="{{$committeeGetData->email}}" placeholder="Enter email">
                    </div>

                    
                    <label>Phone</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">+88</span>
                      </div>
                      <input type="number" name="phone" value="{{$committeeGetData->phone}}" class="form-control @error ('phone')is-invalid @enderror" maxlength="10">
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <div>
                            <input type="file" class="form-control" name="file_name" value="{{old('file_name')}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <div>
                            <textarea required class="form-control @error('about')is-invalid @enderror" name="about" rows="5" placeholder="Describe about him">{{$committeeGetData->about}}</textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Update
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->

</div> <!-- end row --> 



@endsection