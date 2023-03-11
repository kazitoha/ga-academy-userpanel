@extends('adminview/navbar')

@section('adminpanel-navbar')
@php

 use App\Models\notices;
 use App\Models\event;
 use App\Models\officeStaff;
 use App\Models\committee;
 use App\Models\gallery;

@endphp
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body" style="height: 164px;">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="font-size-14">Total Notices</h5>
                        </div>
                        <div class="avatar-xs">
                            <span class="avatar-title rounded-circle bg-primary">
                                <i class="dripicons-box"></i>
                            </span>
                        </div>
                    </div>
                    <h4 class="m-0 align-self-center">{{notices::count()}}</h4>
                    <p class="mb-0 mt-3 text-muted"> Total Count of <span class="text-success">notices.</span></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body" style="height: 164px;">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="font-size-14">Total Events</h5>
                        </div>
                        <div class="avatar-xs">
                            <span class="avatar-title rounded-circle bg-primary">
                                <i class="dripicons-briefcase"></i>
                            </span>
                        </div>
                    </div>
                    <h4 class="m-0 align-self-center">{{event::count()}}</h4>
                    <p class="mb-0 mt-3 text-muted">Total Count of <span class="text-success">events.</span> </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body" style="height: 164px;">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="font-size-14">Total Teacher & Staff</h5>
                        </div>
                        <div class="avatar-xs">
                            <span class="avatar-title rounded-circle bg-primary">
                                <i class="dripicons-briefcase"></i>
                            </span>
                        </div>
                    </div>
                    <h4 class="m-0 align-self-center">{{officeStaff::count()}}</h4>
                    <p class="mb-0 mt-3 text-muted">Total Count of <span class="text-success">teacher & staff.</span> </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body" style="height: 164px;">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="font-size-14">Total Committee Members</h5>
                        </div>
                        <div class="avatar-xs">
                            <span class="avatar-title rounded-circle bg-primary">
                                <i class="dripicons-briefcase"></i>
                            </span>
                        </div>
                    </div>
                    <h4 class="m-0 align-self-center">{{committee::count()}}</h4>
                    <p class="mb-0 mt-3 text-muted">Total Count of <span class="text-success">committee members.</span> </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="font-size-14">Total Gallery Images</h5>
                        </div>
                        <div class="avatar-xs">
                            <span class="avatar-title rounded-circle bg-primary">
                                <i class="dripicons-briefcase"></i>
                            </span>
                        </div>
                    </div>
                    <h4 class="m-0 align-self-center">{{gallery::count()}}</h4>
                    <p class="mb-0 mt-3 text-muted">Total Count of <span class="text-success">gallery images.</span> </p>
                </div>
            </div>
        </div>



    </div>



@endsection