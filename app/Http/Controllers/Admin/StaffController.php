<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\officeStaff;
use Carbon\Carbon;
use Image;



class StaffController extends Controller
{

    function StaffView()
    {
        return view('adminview/staff/StaffViewPage');
    }



    function StaffStore(Request $request)
    {

        $request->validate([
            'select_category' => 'required|integer|max:2',
            'group'           => 'integer|max:2',
            'name'            => 'required',
            'designation'     => 'required',
            'email'           => 'nullable|email',
            'phone'           => 'nullable',
            'file_name'       => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'about'           => 'nullable',
        ]);

        $last_insert_id = officeStaff::insertGetId([
            'category'       => $request->select_category,
            'group'       => $request->group,
            'name'           => $request->name,
            'designation'    => $request->designation,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'about'          => $request->about,
            'created_at'     => Carbon::now(),
        ]);

        if ($request->hasFile('file_name')) {
            $main_img = $request->file_name;
            //get file extension $extension
            $extension = $request->file('file_name')->extension();
            $rename_image = $last_insert_id . "." . $extension;
            Image::make($main_img)->resize('1200', '1300')->save(base_path('public/storage/staff_info_files/' . $rename_image));
            officeStaff::find($last_insert_id)->update(['file_path' => $rename_image,]);
        }



        return back()->with('message', 'Data Insert Successfully.');
    }



    function StaffList()
    {

        $allstaffinfo = officeStaff::orderBy('id', 'DESC')->Paginate(10);

        return view('adminview/staff/StaffListPage', compact('allstaffinfo'));
    }



    function SearchStaff(Request $request)
    {
        $searchinput = $request->search_data;
        if ($searchinput == null) {
            return redirect()->route('staff.list');
        }


        $allstaffinfo = officeStaff::where('name', 'LIKE', '%' . $searchinput . '%')
            ->orWhere('designation', 'LIKE', '%' . $searchinput . '%')
            ->orWhere('email', 'LIKE', '%' . $searchinput . '%')
            ->orWhere('phone', 'LIKE', '%' . $searchinput . '%')
            ->orWhere('about', 'LIKE', '%' . $searchinput . '%')
            ->Paginate();
        return view('adminview/staff/StaffListPage', compact('allstaffinfo'));
    }



    function StaffEdit($id)
    {
        $id = base64_decode($id);
        $staffGetData = officeStaff::find($id);
        return view('adminview/staff/StaffEditPage', compact('staffGetData'));
    }

    function StaffUpdate(Request $request)
    {
        $request->validate(

            [
                'update_id'       => 'required',
                'select_category' => 'required|integer|max:2',
                'group'           => 'integer|max:3',
                'name'            => 'required',
                'designation'     => 'required',
                'email'           => 'nullable|email',
                'phone'           => 'nullable',
                'file_name'       => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:5120',
                'about'           => 'nullable',
            ]
        );

        // dd($request->all());
        //this is for decrypting id
        $update_id = base64_decode($request->update_id);
        officeStaff::find($update_id)->update([
            'category'       => $request->select_category,
            'group'          => $request->group,
            'name'           => $request->name,
            'designation'    => $request->designation,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'about'          => $request->about,


        ]);





        if ($request->hasFile('file_name')) {

            $old_image_name = officeStaff::find($update_id)->file_path;

            $main_img = $request->file_name;

            //get file extension $extension

            $extension = $request->file('file_name')->extension();

            $rename_image = $update_id . "." . $extension;



            if ($request->empty_file_name != null) {

                unlink(base_path('public/storage/staff_info_files/' . $old_image_name));
            }

            Image::make($main_img)->resize('1200', '1300')->save(base_path('public/storage/staff_info_files/' . $rename_image));



            officeStaff::find($update_id)->update(['file_path' => $rename_image,]);
        }



        return back()->with('message', 'Data Update Successfully.');
    }



    function StaffDelete($id)
    {
        $delete_id = base64_decode($id);
        $officeStaff_details = officeStaff::find($delete_id);
        if (!$officeStaff_details->file_path == null) {
            unlink(base_path('public/storage/staff_info_files/' . $officeStaff_details->file_path));
        }
        officeStaff::find($delete_id)->delete();
        return redirect()->route('staff.list')->with('error', 'Data Deleted.');
    }
}
