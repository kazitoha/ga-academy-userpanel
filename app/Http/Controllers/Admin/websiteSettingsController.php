<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\website_settings;
use App\Models\banner;
use App\Models\gallery;
use App\Models\notices;
use App\Models\news;
use App\Models\event;
use App\Models\committee;
use App\Models\officeStaff;
use App\Models\testimonial;
use Illuminate\Support\Facades\DB;

class websiteSettingsController extends Controller
{
    function websiteSettingView(){
        $website_data=website_settings::find(1);
        if($website_data == null){
            $website_data='';
        }
        return view('adminview.website_setting.index',compact('website_data'));
    }

    function storeSchoolNameAndLogo(Request $request){
        $request->validate([
            'school_name'         => 'required|string',
            'primary_logo'        => 'nullable|mimes:jpeg,png,jpg,gif,svg',
            'primary_logo_height' => 'nullable|string',
            'primary_logo_width'  => 'nullable|string',
            'secondary_logo'      => 'nullable|string',
            'chairman_speech'     => 'nullable|string',
            'chairman_image'      => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:512',
            'head_teacher_speech' => 'nullable|string',
            'head_teacher_image	' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:512',
            'founded'             => 'required|string',
            'total_student'       => 'required|string',
            'phone_number'        => 'nullable|string',
            'mobile_number'       => 'required|string',
            'email'               => 'required|string',
            'facebook_link'       => 'nullable|string',
            'address'             => 'required|string',
            'google_map_link'     => 'nullable|string',

        ]);
        $website_data=website_settings::find(1);
        if(empty($website_data)){
            website_settings::create([
                'school_name'             =>$request->school_name,
                'primary_logo'            =>$request->primary_logo,
                'primary_logo_height'     =>$request->primary_logo_height,
                'primary_logo_width'      =>$request->primary_logo_width,
                'secondary_logo'          =>$request->secondary_logo,
                'chairman_speech'         =>$request->chairman_speech,
                'chairman_image'          =>$request->chairman_image,
                'head_teacher_speech'     =>$request->head_teacher_speech,
                'head_teacher_image'      =>$request->head_teacher_image,
                'founded'                 =>$request->founded,
                'total_student'           =>$request->total_student,
                'phone_number'            =>$request->phone_number,
                'mobile_number'           =>$request->mobile_number,
                'email'                   =>$request->email,
                'facebook_link'           =>$request->facebook_link,
                'address'                 =>$request->address,
                'google_map_link'         =>$request->google_map_link,
            ]);
        }else{

            // dd($request->all());
            website_settings::find(1)->update([
                'school_name'             =>$request->school_name,
                'primary_logo'            =>$request->primary_logo,
                'primary_logo_height'     =>$request->primary_logo_height,
                'primary_logo_width'      =>$request->primary_logo_width,
                'secondary_logo'          =>$request->secondary_logo,
                'chairman_speech'         =>$request->chairman_speech,
                'chairman_image'          =>$request->chairman_image,
                'head_teacher_speech'     =>$request->head_teacher_speech,
                'head_teacher_image'      =>$request->head_teacher_image,
                'founded'                 =>$request->founded,
                'total_student'           =>$request->total_student,
                'phone_number'            =>$request->phone_number,
                'mobile_number'           =>$request->mobile_number,
                'email'                   =>$request->email,
                'facebook_link'           =>$request->facebook_link,
                'address'                 =>$request->address,
                'google_map_link'         =>$request->google_map_link,
            ]);
        }


        return back()->with('message', 'Website details updateds Successfully.');

    }

    public function DeleteAll(){
        DB::table('website_settings')->truncate();
        DB::table('banners')->truncate();
        DB::table('gallery')->truncate();
        DB::table('notices')->truncate();
        DB::table('news')->truncate();
        DB::table('events')->truncate();
        DB::table('committees')->truncate();
        DB::table('office_staff')->truncate();
        DB::table('testimonials')->truncate();

        return back()->with('error', 'All table is data is deleted!.');

    }
}
