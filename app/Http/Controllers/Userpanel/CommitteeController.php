<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\committee;

class CommitteeController extends Controller
{
    
    function CommitteeView(){
       $committee_info=committee::all();
       return view('userview/committee/committee',compact('committee_info'));
    }

}
