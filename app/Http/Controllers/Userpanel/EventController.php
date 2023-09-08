<?php

namespace App\Http\Controllers\Userpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;


class EventController extends Controller
{
    function EventView(){
        $all_event=event::orderBy('id','DESC')->Paginate(10);
        return view('userview/event/event',compact('all_event'));
    }
    function SingleEvent($slug){
      $single_event_data=event::where('slug',$slug)->get();
      $single_event_data=$single_event_data[0];
      return view('userview/event/singleEvent',compact('single_event_data'));
    }

    function SearchEvent(Request $request){
        $request->validate([
          'programName'   =>'required',
        ]);
        $searchinput=$request->programName;
        $all_event='';
      if($searchinput !=null)
      {
        $all_event=event::where('event_name','LIKE','%'.$searchinput.'%')
        ->orWhere('about_event','LIKE','%'.$searchinput.'%')
        ->orWhere('event_date','LIKE','%'.$searchinput.'%')
        ->Paginate();
      }



      return view('userview/event/event',compact('all_event'));

    }
}
