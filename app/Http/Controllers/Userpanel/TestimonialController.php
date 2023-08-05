<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use App\Models\testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    function TestimonialView(){
        return view('userview/testimonial/testimonial');
    }
    function TestimonialStore(Request $request){
      $year=date("Y");
      $request->validate([
        'student_name'      => 'required',
        'student_name_bd'   => 'required',
        'father_name'       => 'required',
        'father_name_bd'    => 'required',
        'mother_name'       => 'required',
        'mother_name_bd'    => 'required',
        'exam_name'         => 'required',
        'exam_year'         => 'required|integer|min:1930|max:'.$year,
        'group'             => 'required|integer|min:1|max:3',
        'board_roll'        => 'required',
        'board_reg'         => 'required',
        'session'           => 'required',
        'exam_centre'       => 'required',
        'exam_centre_code'  => 'required',
        'gpa'               => 'required|integer|min:1|max:5',
        'date_of_birth'     => 'required',

      ]);

      testimonial::create([
        'student_name' => $request->student_name,
        'student_name_bd' => $request->student_name_bd,
        'father_name' => $request->father_name,
        'father_name_bd' => $request->father_name_bd,
        'mother_name' => $request->mother_name,
        'mother_name_bd' => $request->mother_name_bd,
        'exam_name' => $request->exam_name,
        'exam_year' => $request->exam_year,
        'group' => $request->group,
        'board_roll' => $request->board_roll,
        'board_reg' => $request->board_reg,
        'session' => $request->session,
        'exam_centre' => $request->exam_centre,
        'exam_centre_code' => $request->exam_centre_code,
        'gpa' => $request->gpa,
        'date_of_birth' => $request->date_of_birth,
        'created_at' =>Carbon::now(),
      ]);

      return back()->with('success_msg','Successfully applied application for testimonial.');
    }
}
