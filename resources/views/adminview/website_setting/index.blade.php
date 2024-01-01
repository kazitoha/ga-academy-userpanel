@extends('adminview/navbar')

@section('adminpanel-navbar')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="header-title">School Name</h4>
                    </center>
                    <hr>
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <form class="needs-validation" action="{{ route('store.school.name') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Name</label>

                                <input type="text" class="form-control @error('school_name')is-invalid @enderror"
                                    id="validationCustom01"
                                    value="@if (!empty($website_data)) {{ $website_data->school_name }} @endif"
                                    name="school_name" required>
                            </div>
                        </div>
                        @if (!empty($website_data))
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        @else
                            <button type="submit" class="btn btn-outline-success">Save</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="header-title">School Info</h4>
                    </center>
                    <hr>
                    <form action="{{ route('store.school.info') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" id="validationCustom01"
                                    value="@if (!empty($website_data)) {{ $website_data->phone_number }} @endif"
                                    required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Mobile Number</label>
                                <input type="text" class="form-control" id="validationCustom01" name="mobile_number"
                                    value="@if (!empty($website_data)) {{ $website_data->mobile_number }} @endif"
                                    required>

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Email</label>
                                <input type="text" class="form-control" id="validationCustom01" name="email"
                                    value="@if (!empty($website_data)) {{ $website_data->email }} @endif" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Facebook Link</label>
                                <input type="text" class="form-control" id="validationCustom01"
                                    value="@if (!empty($website_data)) {{ $website_data->facebook_link }} @endif"
                                    name="facebook_link" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Address</label>
                                <input type="text" class="form-control" id="validationCustom02" name="address"
                                    value="@if (!empty($website_data)) {{ $website_data->address }} @endif" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Total Student</label>
                                <input type="text" class="form-control @error('total_student')is-invalid @enderror"
                                    id="validationCustom01" name="total_student"
                                    value="@if (!empty($website_data)) {{ $website_data->total_student }} @endif"required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Founded</label>
                                <input type="text" class="form-control @error('founded')is-invalid @enderror"
                                    id="validationCustom01" name="founded"
                                    value="@if (!empty($website_data)) {{ $website_data->founded }} @endif"required>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary">Update</button>
                    </form>

                </div>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" style="float: right" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <center>
                        <h4 class="header-title">Dashboard Speech Info</h4>

                    </center>
                    <!-- Button trigger modal -->
                    <br>
                    <hr>
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Speech</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($speech_infos as $key => $speech_info)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $speech_info->name }}</td>
                                        <td>{{ $speech_info->designation }}</td>
                                        <td>{{ $speech_info->title }}</td>
                                        <td>{{ $speech_info->speech }}</td>
                                        <td>
                                            <img src="{{asset('storage/speech_files')}}/{{$speech_info->image}}" style="width: 50px">
                                        </td>
                                        <td>
                                            <a href="{{route('speech.delete',$speech_info->id)}}" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form action="{{route('store.speech.info')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add speech</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Name</label>
                            <input type="text" class="form-control" id="validationCustom02" name="name" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Designation</label>
                            <input type="text" class="form-control" id="validationCustom02" name="designation" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Title</label>
                            <input type="text" class="form-control" id="validationCustom02" name="title" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01"></label>
                            <label>Speech</label>
                            <textarea id="textarea" class="form-control" name="speech" rows="5" maxlength="3000" placeholder="This textarea."></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Image</label>
                            <input type="file" class="form-control" id="validationCustom01" name="image" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection
