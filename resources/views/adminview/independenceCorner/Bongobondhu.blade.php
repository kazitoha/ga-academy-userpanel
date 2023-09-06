@extends('adminview/navbar')

@section('adminpanel-navbar')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title d-flex justify-content-center">Bongobondhu</h4>

                    <form class="custom-validation" action="{{ route('bongobondhu.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <textarea id="elm1" name="description">
                                @if ($total >= 1)
                                {{ $BongobondhuData->description }}
                                @endif
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control @error('file')is-invalid @enderror"
                                placeholder="Type something" name="file_name" />
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
                    <h4 class="header-title d-flex justify-content-center">Image</h4>
                    @if (!empty($BongobondhuData->file_name))
                        <div class="position-relative gallery-content">
                            <div class="demo-img">
                                <img src="{{ asset('storage/bongobondhu') }}/{{ $BongobondhuData->file_name }}"
                                    alt="" class="img-fluid mx-auto d-block rounded"><br>
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
