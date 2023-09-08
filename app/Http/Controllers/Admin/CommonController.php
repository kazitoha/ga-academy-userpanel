<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\committee;
use App\Models\event;
use App\Models\gallery;
use App\Models\news;
use App\Models\notices;
use App\Models\officeStaff;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    function AddSlug()
    {
        $allDatas = notices::all();
        foreach ($allDatas as $data) {
            $data = notices::find($data->id);
            $make_slug = str_replace(" ", "-", $data->title);
            $data->update([
                'slug' => $make_slug,
            ]);
        }




        $allDatas = event::all();
        foreach ($allDatas as $data) {
            $data = event::find($data->id);
            $make_slug = str_replace(" ", "-", $data->event_name);
            $data->update([
                'slug' => $make_slug,
            ]);
        }



        $allDatas = news::all();
        foreach ($allDatas as $data) {
            $data = news::find($data->id);
            $make_slug = str_replace(" ", "-", $data->title);
            $data->update([
                'slug' => $make_slug,
            ]);
        }

        $allDatas = gallery::all();
        foreach ($allDatas as $data) {
            $data = gallery::find($data->id);
            $make_slug = str_replace(" ", "-", $data->title);
            $data->update([
                'slug' => $make_slug,
            ]);
        }


    }
}
