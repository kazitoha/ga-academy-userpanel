<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bongobondhu;
use Illuminate\Http\Request;
use App\Models\GoldenJubileeIndependence;
use Image;

class IndependenceCornerController extends Controller
{
    function GoldenJubileeIndependenceCorner()
    {
        $total = GoldenJubileeIndependence::count();
        $GoldenJubileeData = GoldenJubileeIndependence::find(1);

        return view('adminview.independenceCorner.GoldenJubileeIndependenceCorner', compact('total', 'GoldenJubileeData'));
    }
    function GoldenJubileeIndependenceStore(Request $request)
    {
        $request->validate([
            'GoldenJubilee' => 'required'
        ]);
        $total = GoldenJubileeIndependence::count();
        if ($total == 0) {
            GoldenJubileeIndependence::create([
                'description' => $request->GoldenJubilee,
            ]);
        } else {
            GoldenJubileeIndependence::find(1)->update([
                'description' => $request->GoldenJubilee,
            ]);
        }
        return back()->with('message', 'সুবর্ণ জয়ন্তী কর্নার is updated.');
    }
    function Bongobondhu(Request $request)
    {
        $total = bongobondhu::count();
        $BongobondhuData = bongobondhu::find(1);
        return view('adminview.independenceCorner.Bongobondhu', compact('total', 'BongobondhuData'));
    }

    function BongobondhuStore(Request $request)
    {
        $request->validate([
            'file_name'     =>'mimes:jpeg,png,jpg,gif,svg|max:5120',
            'description' => 'required',
        ]);


        if ($request->hasFile('file_name')) {
            $main_img = $request->file_name;
            //get file extension $extension
            $extension = $main_img->extension();
            $rename_image = "1." . $extension;
            $file = Image::make($main_img)->save(base_path('public/storage/bongobondhu/' . $rename_image));
        }
        $total = bongobondhu::count();
        if ($total == 0) {
            bongobondhu::create([
                'description' => $request->description,
                'file_name' => $rename_image,
            ]);
        } else {
            bongobondhu::find(1)->update([
                'description' => $request->description,
            ]);
        }


        return back()->with('message', 'Bongobondhu Cornar is updated.');
    }
}
