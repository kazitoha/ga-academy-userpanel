@extends('adminview/navbar')

 @section('adminpanel-navbar')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Add Teacher & Staff</h4>

                @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                <form class="custom-validation" action="{{route('staff.update')}}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf

                    <input type="hidden" name="update_id" value="{{ base64_encode($staffGetData->id) }}">

                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control form-select @error('select_category')is-invalid @enderror"
                            aria-label="Default select example" name="select_category" onchange="yesnoCheck(this);" onclick="yesnoCheck(this);"
                            >
                            <option @if($staffGetData->category == 1) selected @endif value="1">Teacher</option>
                            <option @if($staffGetData->category == 2) selected @endif value="2">Staff</option>
                        </select>
                    </div>

                    <div class="form-group" id="ifYes" style="display: none;">
                        <label>Groups</label>
                        <select class="form-control form-select @error('select_category')is-invalid @enderror"
                            aria-label="Default select example" name="group">
                            <option @if($staffGetData->group == 1) selected @endif value="1">Science</option>
                            <option @if($staffGetData->group == 2) selected @endif value="2">Business studies</option>
                            <option @if($staffGetData->group == 3) selected @endif value="3">Humanities</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control @error ('name')is-invalid @enderror" value="{{ $staffGetData->name}}" placeholder="Enter name.">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control @error ('designation')is-invalid @enderror" value="{{$staffGetData->designation}}" placeholder="Enter designation.">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email"  class="form-control @error ('email')is-invalid @enderror" value="{{$staffGetData->email}}" placeholder="Enter email">
                    </div>


                    <label>Phone</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">+88</span>
                      </div>
                      <input type="number" name="phone" value="{{$staffGetData->phone}}" class="form-control @error ('phone')is-invalid @enderror" >
                    </div>



                    <div class="form-group">
                        <label>Image</label>

                        <div>
                           <input accept="image/*" class="form-control" name="file_name" type='file' id="imgInp" /><br>
                           @if($staffGetData->file_path != null)
                            <img id="blah" src="{{asset('storage/staff_info_files/'.$staffGetData->file_path)}}" alt="your image" width="120" height="120" />
                           @elseif($staffGetData->file_path == null)
                           <input type="hidden" class="form-control" name="empty_file_name" type='text' />
                            <img id="blah" src="{{asset('storage/staff_info_files/default.png')}}" alt="your image" width="120" height="120" />
                           @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <div>
                            <textarea required class="form-control @error('about')is-invalid @enderror" name="about" rows="5" placeholder="Describe about him">{{$staffGetData->about}}</textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Update
                            </button>

                            <a href="{{ url('admin/teacher/staff/list') }}" class="btn btn-secondary waves-effect waves-light mr-1" type="submit">Back</a>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->

</div> <!-- end row -->

<script type="text/javascript">
    imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        blah.src = URL.createObjectURL(file)
      }
    }

</script>
<script type="text/javascript">
    function yesnoCheck(that) {
        if (that.value == "1") {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }
</script>

@endsection
