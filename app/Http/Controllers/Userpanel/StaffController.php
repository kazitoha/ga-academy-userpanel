<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\officeStaff;

class StaffController extends Controller
{
    function StaffView(){
        $id='';
        $staff_infos=officeStaff::all();
        return view('userview/staff/staff',compact('staff_infos','id'));
    }

    function selectOffice($id){
       if($id == 1)
       {
        $staff_infos=officeStaff::where('category',$id)->get();
       }else{
        $staff_infos=officeStaff::where('category',$id)->get();
       }
       return view('userview/staff/staff',compact('staff_infos','id'));
   
    }
}
