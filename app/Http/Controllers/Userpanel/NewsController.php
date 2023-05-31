<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Carbon;

class NewsController extends Controller
{
    function NoticeView()
    {
        echo Carbon::now();
        // $allNews=news::all();
        // return view('adminview/notice/NoticeListPage', compact('allNotice'));
    }
}
