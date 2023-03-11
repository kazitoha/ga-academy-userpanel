<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    
    function AcademicCalendarView(){
       return view('userview/academic/academicCalendar');
    }

}
