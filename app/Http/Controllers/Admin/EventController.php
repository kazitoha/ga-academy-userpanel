<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use Carbon\Carbon;
use Image;

class EventController extends Controller
{
    function EventView(){
     return view('adminview/event/EventViewPage');
    }
    function EventStore(Request $request){
       $request->validate([
        'event_name'  =>'required',
        'event_date'  =>'required',
        'event_image' =>'nullable|mimes:jpeg,png,jpg,gif,svg|max:7120',
        'about_event' =>'required',
     ]);

     $last_insert_id=event::insertGetId([
        'event_name'      =>$request->event_name,
        'event_date'      =>$request->event_date,
        'about_event'     =>$request->about_event,
        'created_at'      =>Carbon::now(),
        ]);

     if($request->hasFile('event_image'))
      {
        $main_img=$request->event_image;
        //get file extension $extension
        $extension = $request->file('event_image')->extension();
        $rename_image=$last_insert_id . "." . $extension;

        if($extension == "pdf")
        {   //1st $filepath we define the file location and then move it.
            $filePath = public_path('/storage/event_files');
            $main_img->move( $filePath,  $rename_image );
        }
        else
        {

        $file=Image::make($main_img)
              ->save(base_path('public/storage/event_files/'.$rename_image));
        
        }
        event::find($last_insert_id)->update([ 'file_path'=>$rename_image,]);
      }
       return back()->with('message','Event Inserted Successfully');
    }

    function EventList(){
     $all_events=event::orderBy('id','DESC')->Paginate(10);
     return view('adminview/event/EventListPage',compact('all_events'));
    }

    function SearchEvent(Request $request){

        $searchinput=$request->search_data;

        $all_events=event::where('event_name','LIKE','%'.$searchinput.'%')
        ->orWhere('about_event','LIKE','%'.$searchinput.'%')
        ->orWhere('event_date','LIKE','%'.$searchinput.'%')
        ->Paginate();

      return view('adminview/event/EventListPage',compact('all_events'));

    }

    function EditEvent($id){
        $id=base64_decode($id);
        $eventGetData=event::find($id);
        return view('adminview/event/EventEditPage',compact('eventGetData'));

    }

    function UpdateEvent(Request $request){
        $request->validate([
        'update_id'   =>'required',
        'event_name'  =>'required',
        'event_date'  =>'required',
        'event_image' =>'nullable|mimes:jpeg,png,jpg,gif,svg|max:7120',
        'about_event' =>'required',
     ]);
        //this is for decrypting id  
        $update_id=base64_decode($request->update_id);

        event::find($update_id)->update([
        'event_name'      =>$request->event_name,
        'event_date'      =>$request->event_date,
        'about_event'     =>$request->about_event,
        'created_at'      =>Carbon::now(),
      ]);
   

      if($request->hasFile('event_image'))
      {
        $old_image_name=event::find($update_id)->file_path;
        $main_img=$request->event_image;
        //get file extension $extension
        $extension = $request->file('event_image')->extension();
        $rename_image=$update_id . "." . $extension;
        if($old_image_name){
         unlink(base_path('public/storage/notice_files/'.$old_image_name));
        }

            
         Image::make($main_img)->resize('1200','1300')->save(base_path('public/storage/event_files/'.$rename_image));
        
        event::find($update_id)->update([ 'file_path'=>$rename_image,]); 
      }

      return back()->with('message','Data Update Successfully.');
    }


    function EventDelete($id){
        $delete_id=base64_decode($id);
        $event_details=event::find($delete_id);
        if(!$event_details->file_path == null){
           unlink(base_path('public/storage/event_files/'.$event_details->file_path));
        }
        event::find($delete_id)->delete();
        return redirect()->route('event.list')->with('error','Data Deleted!.');

    }


}
