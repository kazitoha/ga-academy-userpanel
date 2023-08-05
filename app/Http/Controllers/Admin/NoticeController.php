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
            $rename_pdf = $last_insert_id . "." . $extension;
            $filePath = public_path('/storage/notice_files');
            $main_img->move($filePath,  $rename_pdf);
            $pdf_name[] = array($rename_pdf);
            $files_names = serialize($pdf_name);
            notices::find($last_insert_id)->update(['file_path' => $files_names,]);
            return back()->with('message', 'Notice Inserted Successfully.');
        }

        if ($request->hasFile('image_file')) {
            $images_file = $request->image_file;
            $image_names = array();
            foreach ($images_file as $key => $image_file) {
                $extension = $image_file->extension();
                $rename_image = $key . "_" . $last_insert_id . "." . $extension;
                $image_names[] = array($rename_image);
                Image::make($image_file)->save(base_path('public/storage/notice_files/' . $rename_image));
            }
            $files_names = serialize($image_names);
            notices::find($last_insert_id)->update(['file_path' => $files_names,]);
        }
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
            ->Paginate(10);

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

        //this is for decrypting id
        $update_id = base64_decode($request->update_id);

        notices::find($update_id)->update([
            'title'   => $request->title,
            'description' => $request->description,
            'category'      => $request->category,
            'created_at' => Carbon::now(),
        ]);


        if ($request->hasFile('pdf_file') || $request->hasFile('image_file')) {
            $old_files_names = divide_file_name($update_id);
            foreach ($old_files_names as $old_file_name) {
                unlink(base_path('public/storage/notice_files/' . $old_file_name[0]));
            }
        }


        if ($request->hasFile('pdf_file')) {
            $main_img = $request->pdf_file;
            //get file extension $extension
            $extension = $request->file('pdf_file')->extension();
            $rename_pdf = $update_id . "." . $extension;
            $filePath = public_path('/storage/notice_files');
            $main_img->move($filePath,  $rename_pdf);
            $pdf_name[] = array($rename_pdf);
            $files_names = serialize($pdf_name);
            notices::find($update_id)->update(['file_path' => $files_names,]);
            return back()->with('message', 'Data Update Successfully.');
        }

        if ($request->hasFile('image_file')) {
            $images_file = $request->image_file;
            $image_names = array();
            foreach ($images_file as $key => $image_file) {
                $extension = $image_file->extension();
                $rename_image = $key . "_" . $update_id . "." . $extension;
                $image_names[] = array($rename_image);
                Image::make($image_file)->save(base_path('public/storage/notice_files/' . $rename_image));
            }
            $files_names = serialize($image_names);
            notices::find($update_id)->update(['file_path' => $files_names,]);
        }
        return back()->with('message', 'Data Update Successfully.');
    }


    function NoticeDelete($id)
    {
        $delete_id = base64_decode($id);
        $notices_details = notices::find($delete_id);
        if (!$notices_details->file_path == null) {
            $old_files_names = divide_file_name($delete_id);
            foreach ($old_files_names as $old_file_name) {
                unlink(base_path('public/storage/notice_files/' . $old_file_name[0]));
            }
        }
        notices::find($delete_id)->delete();
        return redirect()->route('notice.list')->with('error', 'Data Deleted!.');
    }
}
