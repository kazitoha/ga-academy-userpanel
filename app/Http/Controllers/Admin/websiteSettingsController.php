<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\website_settings;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\news;
use App\Models\notices;
use App\Models\speech;
use Image;

class websiteSettingsController extends Controller
{

    function websiteSettingView()
    {
        $website_data = website_settings::find(1);
        if ($website_data == null) {
            $website_data = '';
        }
        $speech_infos = speech::all();
        return view('adminview.website_setting.index', compact('website_data', 'speech_infos'));
    }

    function storeSchoolName(Request $request)
    {
        $request->validate([
            'school_name' => 'required|string',
        ]);
        $website_data = website_settings::find(1);
        if (empty($website_data)) {
            website_settings::create([
                'school_name' => $request->school_name,
            ]);
        } else {
            website_settings::find(1)->update([
                'school_name' => $request->school_name,
            ]);

        }
        Artisan::call('optimize:clear');

        return back()->with('message', 'Website details updated Successfully.');
    }

    function storeSchoolInfo(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            'mobile_number' => 'required',
            'email' => 'required',
            'facebook_link' => 'required',
            'address' => 'required',
            'total_student' => 'required',
            'founded' => 'required',
        ]);
        $website_data = website_settings::find(1)->update([
            'phone_number' => $request->phone_number,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'facebook_link' => $request->facebook_link,
            'address' => $request->address,
            'total_student' => $request->total_student,
            'founded' => $request->founded,
        ]);
        Artisan::call('optimize:clear');

        return back()->with('message', 'Website details updated Successfully.');
    }

    public function storeSpeechInfo(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'title'=> 'required',
            'speech' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
        ]);

        $speechId = speech::insertGetId([
            'name' => $request->name,
            'designation' => $request->designation,
            'title'=>$request->title,
            'speech' => $request->speech,
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $extension = $request->file('image')->extension();
            $rename_image = $speechId . "." . $extension;

            Image::make($image)->save(base_path('public/storage/speech_files/' . $rename_image));
            speech::find($speechId)->update(['image' => $rename_image,]);
        }
        Artisan::call('optimize:clear');
        return back()->with('message', 'Website details updated Successfully.');

    }

    function speechDelete($id)
    {
        $speech = Speech::find($id);
        unlink(base_path('public/storage/speech_files/' . $speech->image));
        $speech->delete();
        Artisan::call('optimize:clear');
        return back()->with('error', 'Data Deleted!.');

    }
    public function DeleteAll()
    {
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

    function addSlugToOldFileSystem()
    {

        // Combine notice queries for better readability
        $headline_notices = notices::all();
        foreach ($headline_notices as $value) {
            notices::find($value->id)->update([
                'slug' => $value->title . "_" . $value->id,
            ]);
        }

        $event_datas = event::all();
        foreach ($event_datas as $value) {
            event::find($value->id)->update([
                'slug' => $value->title . "_" . $value->id,
            ]);
        }

        $news_datas = news::all();
        foreach ($news_datas as $value) {
            news::find($value->id)->update([
                'slug' => $value->title . "_" . $value->id,
            ]);
        }
    }
}
