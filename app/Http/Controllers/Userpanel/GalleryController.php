<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery;

class GalleryController extends Controller
{
    function GalleryView(){
        $gallery_infos=gallery::all();
        return view('userview/gallery/gallery',compact('gallery_infos'));
    }

 
}
