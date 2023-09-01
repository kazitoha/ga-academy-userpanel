<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndependenceCornerController extends Controller
{
    function IndependenceCornerView(){
        return view('userview.independenceCorner.index');
    }

    function BongobondhuCornerView(){
        return view('userview.independenceCorner.bongobondhu');
    }
}
