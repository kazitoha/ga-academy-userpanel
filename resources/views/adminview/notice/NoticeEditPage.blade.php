@extends('adminview/navbar')

@section('adminpanel-navbar')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title d-flex justify-content-center">Edit Notice</h4>

                    <form class="custom-validation" action="{{ route('notice.update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" name="update_id"
                            value="{{ base64_encode($noticeGetData->id) }}" />
                        <div class="form-group">
                            <label>Category</label>
                            <select class=" form-control" @error('category')is-invalid @enderror"
                                aria-label="Default select example" name="category">
                                <option disabled>Select Category</option>
                                <option value="1" @if ($noticeGetData->category == 1) selected @endif>Teacher's Notice
                                </option>
                                <option value="2" @if ($noticeGetData->category == 2) selected @endif>Students Notice
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control @error('title')is-invalid @enderror"
                                placeholder="Type something" name="title" value="{{ $noticeGetData['title'] }}"
                                required />
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
                                <textarea class="form-control @error('description')is-invalid @enderror" name="description" rows="5">{{ $noticeGetData->description }}</textarea>
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
                    <h4 class="header-title d-flex justify-content-center">Notice Files</h4>
                    @if (!empty($noticeGetData['file_path']))
                        <div class="position-relative gallery-content">
                            <div class="demo-img">
                                @php
                                    $images = unserialize($noticeGetData['file_path']);
                                @endphp

                                @foreach ($images as $key => $value)
                                    @php
                                        $explode_file = explode('.', $value[0]);
                                        $extension=end($explode_file);
                                    @endphp

                                    @if ($extension == 'jpg' || $explode_file[1] == 'png' || $explode_file[1] == 'jpeg')
                                        <img src="{{ asset('storage/notice_files') }}/{{ $value[0] }}" alt=""
                                            class="img-fluid mx-auto d-block rounded"><br>
                                    @endif

                                    @if ($extension == 'pdf')
                                        <iframe src="{{ asset('storage/notice_files') }}/{{ $value[0] }}" width="100%"
                                            height="600px"></iframe>
                                    @endif
                                @endforeach

                            </div>
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-icon">
                                    <i class="ti-zoom-in text-white"></i>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="position-relative gallery-content">
                            <div class="demo-img">
                                <img src="{{ asset('storage/default_img/Image_not_available.png') }}" alt=""
                                    class="img-fluid mx-auto d-block rounded">
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>

    </div> <!-- end row -->


@endsection
