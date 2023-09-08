<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Carbon;

class NewsController extends Controller
{
    function NewsView()
    {
        $allNews = news::orderBy('id', 'desc')->paginate(10);
        return view('userview.news.news', compact('allNews'));
    }
    function SingleNews($slug)
    {
        $single_news = news::where('slug',$slug)->get();
        $single_news = $single_news[0];
        $news_paginate = news::paginate(10);
        return view('userview.news.singleNews', compact('single_news', 'news_paginate'));
    }
}
