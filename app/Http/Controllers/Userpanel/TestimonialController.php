<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use App\Models\testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;


class TestimonialController extends Controller
{
    function TestimonialView()
    {
        return view('userview/testimonial/testimonial');
    }
    function TestimonialStore(Request $request)
    {
        $year = date("Y");
        $request->validate([
            'student_name'      => 'required',
            'student_name_bd'   => 'required',
            'father_name'       => 'required',
            'father_name_bd'    => 'required',
            'mother_name'       => 'required',
            'mother_name_bd'    => 'required',
            'exam_year'         => 'required|integer|min:1930|max:' . $year,
            'group'             => 'required|min:1|max:3',
            'board_roll'        => 'required',
            'board_reg'         => 'required',
            'session'           => 'required',
            'gpa'               => 'required|min:1|max:5',
            'date_of_birth'     => 'required',
            'attachment_file'   => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:2024',


        ]);

        $last_insert_id = testimonial::insertGetId([
            'student_name' => $request->student_name,
            'student_name_bd' => $request->student_name_bd,
            'father_name' => $request->father_name,
            'father_name_bd' => $request->father_name_bd,
            'mother_name' => $request->mother_name,
            'mother_name_bd' => $request->mother_name_bd,
            'exam_name' => 2,
            'exam_year' => $request->exam_year,
            'group' => $request->group,
            'board_roll' => $request->board_roll,
            'board_reg' => $request->board_reg,
            'session' => $request->session,
            'exam_centre' => 'Feni-1',
            'exam_centre_code' => '600',
            'gpa' => $request->gpa,
            'date_of_birth' => $request->date_of_birth,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('attachment_file')) {

            $main_img = $request->attachment_file;
            //get file extension $extension
            $extension = $request->file('attachment_file')->extension();
            $rename_image = $last_insert_id . "." . $extension;

            $upload_url = base_path('public/storage/testimonial').'/'.$rename_image;
            $filename = $this->compress_image($_FILES["attachment_file"]["tmp_name"], $upload_url, 60);

            // Image::make($main_img)->save(base_path('public/storage/testimonial/' . $rename_image));

            testimonial::find($last_insert_id)->update(['attachment_file' => $rename_image,]);
        }

        return back()->with('success_msg', 'Successfully applied application for testimonial.');


        
      
    }

      function compress_image($source_url, $destination_url, $quality) {
        $info = getimagesize($source_url);
            if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source_url);
            elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($source_url);
            elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source_url);
            imagejpeg($image, $destination_url, $quality);
        return $destination_url;
    }
}
