<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\website_settings;
use Illuminate\Http\Request;
use Image;

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
        // dd($request->all())
        $request->validate([
            'school_name'         => 'required|string',
            'primary_logo'        => 'nullable|mimes:jpeg,png,jpg,gif,svg',
            'primary_logo_height' => 'nullable|string',
            'primary_logo_width'  => 'nullable|string',
            'secondary_logo'      => 'nullable|string',
            'chairman_name'       => 'required|string',
            'chairman_speech'     => 'nullable|string',
            'chairman_image'      => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:512',
            'head_teacher_name'   => 'required|string',
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
                'chairman_name'           =>$request->chairman_name,
                'chairman_speech'         =>$request->chairman_speech,
                'head_teacher_name'       =>$request->head_teacher_name,
                'head_teacher_speech'     =>$request->head_teacher_speech,
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
                'chairman_name'           =>$request->chairman_name,
                'chairman_speech'         =>$request->chairman_speech,
                'head_teacher_name'       =>$request->head_teacher_name,
                'head_teacher_speech'     =>$request->head_teacher_speech,
                'founded'                 =>$request->founded,
                'total_student'           =>$request->total_student,
                'phone_number'            =>$request->phone_number,
                'mobile_number'           =>$request->mobile_number,
                'email'                   =>$request->email,
                'facebook_link'           =>$request->facebook_link,
                'address'                 =>$request->address,
                'google_map_link'         =>$request->google_map_link,
            ]);

            if ($request->hasFile('chairman_image')) {
                $chairman_image_name = website_settings::find(1)->chairman_image;
                $uploaded_chairman_image = $request->chairman_image;
                $extension = $request->file('chairman_image')->extension();
                $rename_image = "chairman_image." . $extension;


                if (!$chairman_image_name == null) {
                    unlink(base_path('public/storage/dashborad_files/' . $rename_image));
                }
                    Image::make($uploaded_chairman_image)->save(base_path('public/storage/dashborad_files/' . $rename_image));
                    website_settings::find(1)->update(['chairman_image' => $rename_image,]);

            }
            if ($request->hasFile('head_teacher_image')) {
                $head_teacher_image_name = website_settings::find(1)->head_teacher_image;
                $uploaded_head_teacher_image = $request->head_teacher_image;
                $extension = $request->file('head_teacher_image')->extension();
                $rename_image = "head_teacher_image." . $extension;


                if (!$head_teacher_image_name == null) {
                    unlink(base_path('public/storage/dashborad_files/' . $rename_image));
                }
                    Image::make($uploaded_head_teacher_image)->save(base_path('public/storage/dashborad_files/' . $rename_image));
                    website_settings::find(1)->update(['head_teacher_image' => $rename_image,]);
            }
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
