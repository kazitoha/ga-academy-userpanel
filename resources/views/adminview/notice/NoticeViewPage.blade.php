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
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form class="custom-validation" action="{{ route('notice.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select class=" form-control" @error('category')is-invalid @enderror"
                                aria-label="Default select example" name="category">
                                <option selected disabled>Select Category</option>
                                <option value="1">Teacher's Notice</option>
                                <option value="2">Students Notice</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" maxlength="120" class="form-control @error('title')is-invalid @enderror"
                                placeholder="Type something" name="title" value="{{ old('title') }}" required />
                        </div>


                        <div class="form-group">
                            <label>File type</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" onclick="inputImg()">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Image
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" onclick="inputPdf()">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Pdf
                                </label>
                            </div>

                            <div id="img">
                                <label>Images</label>
                                <input class="form-control @error('image_file[]')is-invalid @enderror" name="image_file[]"
                                    type="file" multiple>
                            </div>
                            <div id="pdf">
                                <label>Pdf</label>
                                <input class="form-control @error('pdf_file')is-invalid @enderror" name="pdf_file"
                                    type="file">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <div>
                                <textarea class="form-control @error('description')is-invalid @enderror" name="description"
                                    value="{{ old('description') }}" rows="5"></textarea>
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
