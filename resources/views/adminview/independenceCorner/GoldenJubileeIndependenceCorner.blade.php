    @extends('adminview/navbar')

    @section('adminpanel-navbar')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title d-flex justify-content-center"><b>সুবর্ণ জয়ন্তী কর্নার</b></h4>

                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif

                        <form class="custom-validation" action="{{ route('GoldenJubileeIndependenceCorner.store') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-0">
                                <div>
                                    <div class="row">
                                        <div class="card">
                                            <textarea id="elm1" name="GoldenJubilee" >@if($total>=1){{$GoldenJubileeData->description}}@endif</textarea>
                                        </div> <!-- end col -->
                                    </div>
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
