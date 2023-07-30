<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\notices;
use Carbon\Carbon;
use Image;

class NoticeController extends Controller
{
    function NoticeView()
    {
        return view('adminview/notice/NoticeViewPage');
    }
    function NoticeStore(Request $request)
    {

        $request->validate(
            [
                'category'      => 'required',
                'title'         => 'required|string',
                'description'   => 'nullable',
                'image_file'     => 'nullable|array|max:3',
                'image_file.*'   => 'mimes:jpeg,png,jpg,gif,svg',
                'pdf_file'      => 'nullable|mimes:pdf',
            ],
            [
                'image_file'    => 'The Image must not have more than 3 items.',
            ]
        );

        $last_insert_id = notices::insertGetId([
            'title'         => $request->title,
            'description'   => $request->description,
            'category'      => $request->category,
            'created_at'    => Carbon::now(),
        ]);

        if ($request->hasFile('pdf_file')) {
            $main_img = $request->pdf_file;
            //get file extension $extension
            $extension = $request->file('pdf_file')->extension();
            $rename_image = $last_insert_id . "." . $extension;
            $filePath = public_path('/storage/notice_files');
            $main_img->move($filePath,  $rename_image);
        }

        if ($request->hasFile('image_file')) {
            $images_file = $request->image_file;
            $image_names = [];
            foreach ($images_file as $key => $image_file) {
                $extension = $image_file->extension();
                $rename_image = $last_insert_id . "." . $extension;
                $image_names[] = $key . "_" . $rename_image;
                Image::make($image_file)->save(base_path('public/storage/notice_files/' . $rename_image));
            }
        }

        notices::find($last_insert_id)->update(['file_path' => $image_names,]);
        return back()->with('message', 'Notice Inserted Successfully.');
    }
    function NoticeList(Request $request)
    {
        $allNotice = notices::orderBy('id', 'DESC')->paginate(10);
        return view('adminview/notice/NoticeListPage', compact('allNotice'));
    }

    function SearchNotice(Request $request)
    {
        $searchinput = $request->search_data;

        $allNotice = notices::where('title', 'LIKE', '%' . $searchinput . '%')
            ->orWhere('description', 'LIKE', '%' . $searchinput . '%')
            ->orWhere('created_at', 'LIKE', '%' . $searchinput . '%')
            ->Paginate();

        return view('adminview/notice/NoticeListPage', compact('allNotice'));
    }


    function NoticeEdit($id)
    {
        $id = base64_decode($id);
        $noticeGetData = notices::find($id);
        return view('adminview/notice/NoticeEditPage', compact('noticeGetData'));
    }

    function NoticeUpdate(Request $request)
    {
        $request->validate([
            'title'         => 'required|string',
            'description'   => 'nullable',
            'file_name'     => 'nullable|mimes:jpeg,png,jpg,gif,svg,pdf|max:5120',
            'category'      => 'required',
        ]);
        //this is for decrypting id
        $update_id = base64_decode($request->update_id);

        notices::find($update_id)->update([
            'title'   => $request->title,
            'description' => $request->description,
            'category'      => $request->category,
            'created_at' => Carbon::now(),
        ]);


        if ($request->hasFile('file_name')) {
            $old_image_name = notices::find($update_id)->file_path;
            $main_img = $request->file_name;
            //get file extension $extension
            $extension = $request->file('file_name')->extension();
            $rename_image = $update_id . "." . $extension;


            if ($extension == "pdf") {
                if (!$old_image_name == null) {
                    unlink(base_path('public/storage/notice_files/' . $old_image_name));
                }
                //1st $filepath we define the file location and then move it.
                $filePath = public_path('/storage/notice_file');
                $main_img->move($filePath,  $rename_image);
            } else {
                if (!$old_image_name == null) {
                    unlink(base_path('public/storage/notice_files/' . $old_image_name));
                }
                Image::make($main_img)->save(base_path('public/storage/notice_files/' . $rename_image));
            }
            notices::find($update_id)->update(['file_path' => $rename_image,]);
        }

        return back()->with('message', 'Data Update Successfully.');
    }


    function NoticeDelete($id)
    {
        $delete_id = base64_decode($id);
        $notices_details = notices::find($delete_id);
        if (!$notices_details->file_path == null) {
            unlink(base_path('public/storage/notice_files/' . $notices_details->file_path));
        }
        notices::find($delete_id)->delete();
        return redirect()->route('notice.list')->with('error', 'Data Deleted!.');
    }
}
