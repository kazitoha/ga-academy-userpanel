<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery;
use Carbon\Carbon;
use Image;

class GalleryController extends Controller
{

    function GalleryView(){

     $galleryData=gallery::orderBy('id','DESC')->get();
      return view('adminview/gallery/GalleryViewPage',compact('galleryData'));
    }

    function GalleryStore(Request $request){
      $request->validate([
        'category'      =>'required|string',
        'title'         =>'required|string',
        'file_name.*'   =>'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:1220',
      ]);
      if(!$request->hasFile('file_name')){
         return back();
      }
      if($request->hasFile('file_name'))
      {
        $files=$request->file_name;
        foreach($files as $value)
        {
          $last_insert_id =gallery::insertGetId([
             'category'      =>$request->category,
             'title'         =>$request->title,
             'created_at'    =>Carbon::now(),
          ]);
    
          $main_img=$value;
           //get file extension $extension
          $extension = $main_img->extension();
          $rename_image=$last_insert_id . "." . $extension;
          $file=Image::make($main_img)->resize('800','533')->save(base_path('public/storage/gallery/'.$rename_image));
            
            gallery::find($last_insert_id)->update([ 'file_path'=>$rename_image,]);
            
        }
        return back()->with('message','Data Insert Successfully.');
      }


    }

    function GalleryEdit($id){
      $id=base64_decode($id);
      $galleryEditData=gallery::find($id);
      return view('adminview/gallery/GalleryEditPage',compact('galleryEditData'));

    }

    function GalleryUpdate(Request $request){

     $request->validate([
        'category'      =>'required|string',
        'title'         =>'required|string',
        'file_name'     =>'mimes:jpeg,png,jpg,gif,svg,pdf|max:5120',
      ]);

      $update_id=base64_decode($request->edit_id);
      gallery::find($update_id)->update([
            'category'=>$request->category,
            'title'   =>$request->title,
       ]);

     if($request->hasFile('file_name'))
      { 
        
        $old_image_name=gallery::find($update_id)->file_path;
        $main_img=$request->file_name;
        //get file extension $extension
        $extension = $request->file('file_name')->extension();
        $rename_image=$update_id . "." . $extension;
    
         unlink(base_path('public/storage/gallery/'.$old_image_name));
         Image::make($main_img)->resize('800','533')->save(base_path('public/storage/gallery/'.$rename_image));

        gallery::find($update_id)->update([ 'file_path'=>$rename_image,]); 
      }
      redirect()->route('gallery.view')->send()->with('message','Data Updated Successfully.');
    }


    function GalleryDelete($id){
      $delete_id=base64_decode($id);
      $gallery_details=gallery::find($delete_id);
        if(!$gallery_details->file_path == null){
           unlink(base_path('public/storage/gallery/'.$gallery_details->file_path));
        }
      gallery::find($delete_id)->delete();
      return back()->with('error','Image Deleted.');
    }
} 
