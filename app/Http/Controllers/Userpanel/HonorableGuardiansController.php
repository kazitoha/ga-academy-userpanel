<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HonorableGuardiansController extends Controller
{
    function HonorableGuardiansView(){

        return view('userview/academic/honorableguardians');

    }
}
