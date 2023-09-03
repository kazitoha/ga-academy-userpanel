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

                    <form class="custom-validation" action="{{ route('staff.store') }}" method="post"
                        enctype="multipart/form-data" novalidate>
                        @csrf


                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control form-select @error('select_category')is-invalid @enderror"
                                aria-label="Default select example" name="select_category" onchange="yesnoCheck(this);"
                                required>
                                <option value="" selected>>-------------------------Select Groups---------------------
                                    << /option>
                                <option value="1">Teacher</option>
                                <option value="2">Staff</option>
                            </select>
                        </div>

                        <div class="form-group" id="ifYes" style="display: none;">
                            <label>Groups</label>
                            <select class="form-control form-select @error('select_category')is-invalid @enderror"
                                aria-label="Default select example" name="group">
                                <option value="" selected disabled>>-------------------------Select
                                    Group---------------------<< /option>
                                <option value="1">Science</option>
                                <option value="2">Business studies</option>
                                <option value="3">Humanities</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control @error('name')is-invalid @enderror" value="{{ old('name') }}"
                                placeholder="Enter name.">
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="designation" value="{{ old('designation') }}"
                                class="form-control @error('designation')is-invalid @enderror"
                                value="{{ old('designation') }}" placeholder="Enter designation.">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email')is-invalid @enderror" value="{{ old('email') }}"
                                placeholder="Enter email">
                        </div>



                        <label>Phone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+88</span>
                            </div>
                            <input type="number" inputmode="numeric" name="phone" value="{{ old('phone') }}"
                                class="form-control @error('phone')is-invalid @enderror" maxlength="10">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <div>
                                <input type="file" class="form-control" name="file_name"
                                    value="{{ old('file_name') }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>About</label>
                            <div>
                                <textarea required class="form-control @error('about')is-invalid @enderror" name="about" value="{{ old('about') }}"
                                    rows="5" placeholder="Describe about him"></textarea>
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
