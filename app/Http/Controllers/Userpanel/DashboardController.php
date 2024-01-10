<?php

namespace App\Http\Controllers\Userpanel;

use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\notices;
use App\Models\event;
use App\Models\banner;
use App\Models\officeStaff;
use App\Models\news;
use App\Models\speech;


class DashboardController extends Controller
{


    function DashboardView()
    {
        // Use concise syntax for querying
        $officeStaff = $this->getOfficeStaffData();
        // Combine notice queries for better readability
        $headline_notices = notices::where('headline_status', 1)->orderBy('id', 'DESC')->take(10)->select('title', 'slug')->get();
        $notice_data = notices::orderBy('id', 'DESC')->take(10)->get();
        // Use compact() with multiple variables for cleaner code
        $event_datas = event::orderBy('id', 'DESC')->take(10)->get();
        $news_datas = news::orderBy('id', 'DESC')->take(10)->get();
        $banner_datas = $this->getBannerData();
        $speech_datas = $this->getSpeechData();


        return view('userview.dashboard', compact('notice_data', 'event_datas', 'news_datas', 'banner_datas', 'speech_datas', 'officeStaff', 'headline_notices'));
    }

    private function getBannerData()
    {
        if (env('APP_DEBUG') == false) {
            return Cache::remember('banner_datas', now()->addHours(244), function () {
                return banner::orderBy('id', 'DESC')->take(3)->get();
            });
        } else {
            return banner::orderBy('id', 'DESC')->take(3)->get();
        }
    }
    private function getOfficeStaffData(){

        if (env('APP_DEBUG') == false) {
            return Cache::remember('officeStaff', now()->addHours(244), function () {
                return officeStaff::where("category", 1)->count();
            });
        } else {
             return officeStaff::where("category", 1)->count();
        }

    }
    private function getSpeechData()
    {
        if (env('APP_DEBUG') == false) {
            return Cache::remember('speech_datas', now()->addHours(244), function () {
                return speech::orderBy('id', 'DESC')->take(3)->get();
            });
        } else {
            return speech::orderBy('id', 'DESC')->take(3)->get();
        }
    }

    function group()
    {
        return view('userview.group');
    }
    function SiteMap()
    {
        $notice_datas = notices::orderBy('id', 'DESC')->get();
        $event_datas = event::orderBy('id', 'DESC')->get();
        $news_datas = news::orderBy('id', 'DESC')->get();
        return response()->view('userview.sitemap', [
            'notice_datas' => $notice_datas,
            'event_datas' => $event_datas,
            'news_datas' => $news_datas,
        ])->header('Content-Type', 'text/xml');
        // return view('userview.sitemap', compact('notice_datas', 'event_datas'));
    }
}
