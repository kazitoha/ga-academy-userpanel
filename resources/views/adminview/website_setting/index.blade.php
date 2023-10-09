@extends('adminview/navbar')

@section('adminpanel-navbar')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center><h4 class="header-title">School Name And logo</h4></center>
                    <hr>
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <form class="needs-validation" action="{{ route('store.school.website.settings') }}" method="post"
                    enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Name</label>

                                <input type="text" class="form-control @error('school_name')is-invalid @enderror"
                                    id="validationCustom01"
                                    value="@if (!empty($website_data)) {{ $website_data->school_name }} @endif"
                                    name="school_name" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Primary logo</label>
                                <input type="file" class="form-control @error('primary_logo')is-invalid @enderror"
                                    id="validationCustom01" name="primary_logo"required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Primary logo Height</label>
                                <input type="number" class="form-control @error('primary_logo_height')is-invalid @enderror"
                                    id="validationCustom01" name="primary_logo_height"
                                    value="@if (!empty($website_data)) {{ $website_data->primary_logo_height }} @endif"required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Primary logo Width</label>
                                <input type="number" class="form-control @error('primary_logo_width')is-invalid @enderror"
                                    id="validationCustom01" name="primary_logo_width"
                                    value="@if (!empty($website_data)) {{ $website_data->primary_logo_height }} @endif"required>
                            </div>

                        </div>


                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center><h4 class="header-title">School Info</h4></center>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" id="validationCustom01"
                                value="@if (!empty($website_data)) {{ $website_data->phone_number }} @endif" required>

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
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Facebook Link</label>
                            <input type="text" class="form-control" id="validationCustom01"
                                value="@if (!empty($website_data)) {{ $website_data->facebook_link }} @endif"
                                name="facebook_link" required>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Address</label>
                            <input type="text" class="form-control" id="validationCustom02" name="address"
                                value="@if (!empty($website_data)) {{ $website_data->address }} @endif" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Google Map link</label>
                            <input type="text" class="form-control" id="validationCustom01" name="google_map_link"
                                value="@if (!empty($website_data)) {{ $website_data->google_map_link }} @endif"
                                required>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="header-title">Dashboard Info</h4>
                    </center>
                    <hr>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Chairman Name</label>
                                <input type="text" class="form-control @error('chairman_name')is-invalid @enderror" id="validationCustom02" name="chairman_name"
                                    value=" @if (!empty($website_data)) {{ $website_data->chairman_name }} @endif" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"></label>
                                <label>Chairman Speech</label>
                                <textarea id="textarea" class="form-control @error('chairman_speech')is-invalid @enderror" name="chairman_speech" rows="3"
                                    placeholder="This textarea.">@if (!empty($website_data)) {{ $website_data->chairman_speech }} @endif</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Chairman Image</label>
                                <input type="file" class="form-control @error('chairman_image')is-invalid @enderror"
                                    id="validationCustom01" name="chairman_image" required>
                                    @if (!empty($website_data->chairman_image))<span class="text-danger">One image is already uploaded</span>@endif

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Head Teacher Name</label>
                                <input type="text" class="form-control @error('head_teacher_name')is-invalid @enderror" id="validationCustom02" name="head_teacher_name"
                                    value="@if (!empty($website_data)) {{ $website_data->head_teacher_name }} @endif" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"></label>
                                <label>Head Teacher Speech</label>
                                <textarea id="textarea" class="form-control @error('head_teacher_speech')is-invalid @enderror" maxlength="225" rows="3" name="head_teacher_speech"
                                    placeholder="This textarea has a limit of 225 chars.">@if (!empty($website_data)) {{ $website_data->head_teacher_speech }} @endif</textarea>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Head Teacher Image</label>
                                <input type="file"
                                    class="form-control @error('head_teacher_image')is-invalid @enderror"
                                    id="validationCustom01" name="head_teacher_image" required>
                                    @if (!empty($website_data->head_teacher_image))<span class="text-danger">One image is already uploaded</span>@endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Total Student</label>
                                <input type="text"
                                    class="form-control @error('total_student')is-invalid @enderror"
                                    id="validationCustom01" name="total_student"
                                    value="@if (!empty($website_data)) {{ $website_data->total_student }} @endif"required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Founded</label>
                                <input type="text"
                                    class="form-control @error('founded')is-invalid @enderror"
                                    id="validationCustom01" name="founded"
                                    value="@if (!empty($website_data)) {{ $website_data->founded }} @endif"required>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


        <center>
            <button class="btn btn-outline-primary btn-lg btn-block" type="submit">
                @if (!empty($website_data))
                    {{ 'Update' }}
                @else
                    {{ 'Submit' }}
                @endif
            </button>
        </center>
    </form>
 <br>
@endsection
