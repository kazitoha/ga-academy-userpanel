<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\notices;
use App\Models\event;
use App\Models\banner;
use App\Models\officeStaff;


class DashboardController extends Controller
{
    function DashboardView()
    {
        $officeStaff = officeStaff::get()->where("category", "=", 1)->count();
        $notice_data = notices::take(10)->orderBy('id', 'DESC')->get();
        $event_datas = event::take(9)->orderBy('id', 'DESC')->get();
        $banner_datas = banner::take(3)->orderBy('id', 'DESC')->get();
        return view('userview.dashboard', compact('notice_data', 'event_datas', 'banner_datas', 'officeStaff'));
    }

    function group()
    {
        return view('userview.group');
    }
}
