<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use App\Models\bongobondhu;
use App\Models\GoldenJubileeIndependence;
use Illuminate\Http\Request;

class IndependenceCornerController extends Controller
{
    function IndependenceCornerView(){
        $GoldenJubileeData = GoldenJubileeIndependence::find(1);
        return view('userview.independenceCorner.GoldenJubileeIndependenceCorner',compact('GoldenJubileeData'));
    }

    function BongobondhuCornerView(){
        $bongobondhuData = bongobondhu::find(1);
        return view('userview.independenceCorner.bongobondhu',compact('bongobondhuData'));
    }
}
