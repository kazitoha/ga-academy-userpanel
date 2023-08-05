<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use Carbon\Carbon;
use Image;

class EventController extends Controller
{
  function EventView()
  {
    return view('adminview/event/EventViewPage');
  }
  function EventStore(Request $request)
  {
    $request->validate([
      'event_name' => 'required',
      'event_date' => 'required',
      'event_image.*' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:9120',
      'about_event' => 'required',
    ]);


    $last_insert_id = event::insertGetId([
      'event_name' => $request->event_name,
      'event_date' => $request->event_date,
      'about_event' => $request->about_event,
      'created_at' => Carbon::now(),
    ]);

    $images = $request->event_image;

    if (!empty($images)) {
      foreach ($images as $key => $image) {
        $main_img = $image;
        //get file extension $extension
        $extension = $image->extension();
        $rename_image = $last_insert_id . "_" . $key . "." . $extension;
        $images_name[] = $rename_image;
        Image::make($main_img)
          ->save(base_path('public/storage/event_files/' . $rename_image));
      }
      event::find($last_insert_id)->update(['file_path' => $images_name]);
    }
    return back()->with('message', 'Event Inserted Successfully');
  }


  function EventList()
  {
    $all_events = event::orderBy('id', 'DESC')->Paginate(10);
    return view('adminview/event/EventListPage', compact('all_events'));
  }

  function SearchEvent(Request $request)
  {

    $searchinput = $request->search_data;

    $all_events = event::where('event_name', 'LIKE', '%' . $searchinput . '%')
      ->orWhere('about_event', 'LIKE', '%' . $searchinput . '%')
      ->orWhere('event_date', 'LIKE', '%' . $searchinput . '%')
      ->Paginate();

    return view('adminview/event/EventListPage', compact('all_events'));

  }

  function EditEvent($id)
  {
    $id = base64_decode($id);
    $eventGetData = event::find($id);
    return view('adminview/event/EventEditPage', compact('eventGetData'));

  }

  function UpdateEvent(Request $request)
  {
    $request->validate([
      'update_id' => 'required',
      'event_name' => 'required',
      'event_date' => 'required',
      'event_image.*' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:7120',
      'about_event' => 'required',
    ]);
    //this is for decrypting id
    $update_id = base64_decode($request->update_id);

    event::find($update_id)->update([
      'event_name' => $request->event_name,
      'event_date' => $request->event_date,
      'about_event' => $request->about_event,
      'created_at' => Carbon::now(),
    ]);


    if ($request->hasFile('event_image')) {
      $old_images_name = event::find($update_id)->file_path;
      $convert_to_array = explode(",", $old_images_name);

      foreach ($convert_to_array as $old_image) {
        $file_name = str_replace(array('[', ']', '"'), " ", $old_image);
        $path = 'public/storage/event_files/' . $file_name;
        $path = str_replace(' ', '', $path);
        if (!empty($old_image)) {
          unlink(base_path($path));
        }
      }
      $main_imgs = $request->event_image;
      //get file extension $extension
      foreach ($main_imgs as $key => $main_img) {
        $extension = $main_img->extension();
        $rename_image = $update_id . "_" . $key . "." . $extension;
        $images_name[] = $rename_image;
        Image::make($main_img)->save(base_path('public/storage/event_files/' . $rename_image));
      }
      event::find($update_id)->update(['file_path' => $images_name,]);
    }

    return back()->with('message', 'Data Update Successfully.');
  }


  function EventDelete($id)
  {
    $delete_id = base64_decode($id);
    $event_details = event::find($delete_id);
    if (!$event_details->file_path == null) {

      $old_images_name = $event_details->file_path;
      $convert_to_array = explode(",", $old_images_name);
      foreach ($convert_to_array as $old_image) {
        $file_name = str_replace(array('[', ']', '"'), " ", $old_image);
        $path = 'public/storage/event_files/' . $file_name;
        $path = str_replace(' ', '', $path);
        if (!empty($old_image)) {
          unlink(base_path($path));
        }
      }
    }
    event::find($delete_id)->delete();
    return redirect()->route('event.list')->with('error', 'Data Deleted!.');

  }


}
