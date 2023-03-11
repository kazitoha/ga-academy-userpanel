@extends('adminview/navbar')

 @section('adminpanel-navbar')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title d-flex justify-content-center">Add Event</h4>
                
                 @if ($errors->any())
                 <div class="alert alert-danger" role="alert">
                     @foreach ($errors->all() as $error)
                         <li>{{$error}}</li>
                     @endforeach
                 </div>
                @endif

                <form class="custom-validation" action="{{route('event.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" class="form-control @error ('event_name')is-invalid @enderror"  placeholder="Type something" name="event_name" value="{{old('event_name')}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Event Date</label>
                        <input type="date" class="form-control @error ('event_date')is-invalid @enderror"  placeholder="Type something" name="event_date" value="{{old('event_date')}}" required/>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Event image</label>
                        <div>
                            <input type="file" class="form-control" name="event_image" value="{{old('event_image')}}" />
                        </div>
                    </div>
                    <div class="form-group">
                         <label>About Event</label>
                        <div>
                            <textarea required class="form-control @error('about_event')is-invalid @enderror" name="about_event" value="" rows="5">{{old('about_event')}}</textarea>
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