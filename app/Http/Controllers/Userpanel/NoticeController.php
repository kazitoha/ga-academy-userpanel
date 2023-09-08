<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\notices;

class NoticeController extends Controller
{
    function NoticeView(){
        $notice=notices::orderBy('id','DESC')->Paginate(10);
        return view('userview/notice/notice',compact('notice'));
    }

    function NoticeSingle($slug){
        $single_notice=notices::where('slug',$slug)->get();
        $single_notice=$single_notice[0];
        $notice_paginate=notices::orderBy('id', 'desc')->paginate(10);
        return view('userview/notice/singleNotice',compact('single_notice','notice_paginate'));
    }

    function NoticeCategory($id){
        $notice=notices::where('category', $id)->Paginate(10);
        return view('userview/notice/notice',compact('notice','id'));
    }


}
