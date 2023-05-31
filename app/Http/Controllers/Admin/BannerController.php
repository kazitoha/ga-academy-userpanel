<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banner;
use Carbon\Carbon;
use Image;


class BannerController extends Controller
{
    function BannerView(){
      $bannerData=banner::all();
      return view('adminview/banner/banner',compact('bannerData'));
    }

    function BannerStore(Request $request){
       $request->validate([
        'title'               =>'required|max:60',
        'banner_file'         =>'required|mimes:jpeg,png,jpg,gif,svg,|max:8020',
      ]);

       $last_insert_id=banner::insertGetId([
        'banner_title'=>$request->title,
        'created_at'=>Carbon::now(),
      ]);

      if($request->hasFile('banner_file')){
          $main_img=$request->banner_file;
          $extension=$request->file('banner_file')->extension();
          $rename_image=$last_insert_id.".".$extension;
          Image::make($main_img)->resize('1355','370')->save(base_path('public/storage/banner/'.$rename_image));

          banner::find($last_insert_id)->update([ 'file_path'=>$rename_image,]);
      }
       return back()->with('message','Banner Inserted Successfully.');

    }

    function BannerDelete($id){
      $delete_id=base64_decode($id);
      $banner_details=banner::find($delete_id);
      if(!$banner_details->file_path == null){
       unlink(base_path('public/storage/banner/'.$banner_details->file_path));
      }
      banner::find($delete_id)->delete();
      return back()->with('error','Banner Deleted.');
    }
}
