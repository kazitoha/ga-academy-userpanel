<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\committee;
use Carbon\Carbon;
use Image;

class CommitteeController extends Controller
{
    function CommitteeView(){
      return view('adminview/committee/CommitteeViewPage');
    }

     function CommitteeStore(Request $request){

      $request->validate([
        'name'            =>'required',
        'email'           =>'nullable|email',
        'phone'           =>'required|size:11',
        'designation'     =>'required',
        'file_name'       =>'nullable|mimes:jpeg,png,jpg,gif,svg|max:5120',
        'about'           =>'nullable',
      ]);


     $last_insert_id =committee::insertGetId([
         'name'           =>$request->name,
         'email'          =>$request->email,
         'phone'          =>$request->phone,
         'designation'    =>$request->designation,
         'about'          =>$request->about,
         'created_at'     =>Carbon::now(),
        ]);

      if($request->hasFile('file_name'))
      {
        $main_img=$request->file_name;
        //get file extension $extension
        $extension = $request->file('file_name')->extension();
        $rename_image=$last_insert_id . "." . $extension;

        Image::make($main_img)->resize('1200','1300')->save(base_path('public/storage/committee_files/'.$rename_image));

        committee::find($last_insert_id)->update([ 'file_path'=>$rename_image,]);
      }

        return back()->with('message','Data Insert Successfully.');

    }

     function CommitteeList(){
       $CommitteeList=committee::orderBy('id','DESC')->Paginate(10);
       return view('adminview/committee/CommitteeListPage',compact('CommitteeList'));
    }
    function SearchCommittee(Request $request){

        $searchinput=$request->search_data;

        $CommitteeList=committee::where('name','LIKE','%'.$searchinput.'%')
        ->orWhere('email','LIKE','%'.$searchinput.'%')
        ->orWhere('phone','LIKE','%'.$searchinput.'%')
        ->orWhere('designation','LIKE','%'.$searchinput.'%')
        ->orWhere('about','LIKE','%'.$searchinput.'%')
        ->orWhere('created_at','LIKE','%'.$searchinput.'%')
        ->Paginate();

      return view('adminview/committee/CommitteeListPage',compact('CommitteeList'));

    }
    function CommitteeEdit($id){
      $id=base64_decode($id);
      $committeeGetData=committee::find($id);
      return view('adminview/committee/CommitteeEditPage',compact('committeeGetData'));
    }
    function CommitteeUpdate(Request $request){

        $request->validate(
      [
        'update_id'       =>'required',
        'name'            =>'required',
        'designation'     =>'required',
        'email'           =>'nullable|email',
        'phone'           =>'required|integer',
        'file_name'       =>'nullable|mimes:jpeg,png,jpg,gif,svg|max:5120',
        'about'           =>'nullable',
      ]);
        //this is for decrypting id
        $update_id=base64_decode($request->update_id);

        committee::find($update_id)->update([
         'category'       =>$request->select_category,
         'name'           =>$request->name,
         'designation'    =>$request->designation,
         'email'          =>$request->email,
         'phone'          =>$request->phone,
         'about'          =>$request->about,
      ]);


      if($request->hasFile('file_name'))
      {
        $old_image_name=officeStaff::find($update_id)->file_path;
        $main_img=$request->file_name;
        //get file extension $extension
        $extension = $request->file('file_name')->extension();
        $rename_image=$update_id . "." . $extension;


         unlink(base_path('public/storage/committee_files/'.$old_image_name));
         Image::make($main_img)->resize('1200','1300')->save(base_path('public/storage/committee_files/'.$rename_image));

        committee::find($update_id)->update([ 'file_path'=>$rename_image,]);
      }

      return back()->with('message','Data Update Successfully.');
    }


    function CommitteeDelete($id){
      $delete_id=base64_decode($id);
      $committee_details=committee::find($delete_id);
      if(!$committee_details->file_path == null){
       unlink(base_path('public/storage/committee_files/'.$committee_details->file_path));
      }
      committee::find($delete_id)->delete();
      return redirect()->route('committee.list')->with('error','Data Deleted!.');
    }
}
