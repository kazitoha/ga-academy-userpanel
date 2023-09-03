<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\officeStaff;

class TeacherStaffController extends Controller
{
    function StaffView()
    {
        $staff_infos = officeStaff::where('category', 2)->get();
        return view('userview/teacher&staff/staff', compact('staff_infos'));
    }

    function selectTeacher($id)
    {
        if (!$id == null) {
            $teachers = officeStaff::where('category', 1)->where('group', $id)->get();
        }
        if (empty($teachers)) {
            $teachers = '';
        }

        return view('userview/teacher&staff/teacher', compact('teachers', 'id'));
    }

    function teachers()
    {
        $id = '';
        $teachers = officeStaff::where('category', 1)->get();
        return view('userview/teacher&staff/teacher', compact('teachers', 'id'));
    }
}
