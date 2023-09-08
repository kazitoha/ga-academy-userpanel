<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\news;
use Carbon\Carbon;
use Image;

class NewsController extends Controller
{
    function NewsView()
    {
        return view('adminview.news.NewsViewPage');
    }
    function NewsStore(Request $request)
    {
        //   dd($request->all());
        $request->validate([
            'title'         => 'required|string|unique:news',
            'description'   => 'nullable',
            'file_name'     => 'nullable|mimes:jpeg,png,jpg,gif,svg,pdf|max:5120',
        ]);
        $last_insert_id = news::insertGetId([
            'title'         => $request->title,
            'description'   => $request->description,
            'slug'          => Str::slug($request->title),
            'created_at'    => Carbon::now(),
        ]);


        if ($request->hasFile('file_name')) {
            $main_img = $request->file_name;
            //get file extension $extension
            $extension = $request->file('file_name')->extension();
            $rename_image = $last_insert_id . "." . $extension;

            if ($extension == "pdf") {   //1st $filepath we define the file location and then move it.
                $filePath = public_path('/storage/news_files');
                $main_img->move($filePath,  $rename_image);
            } else {
                Image::make($main_img)->save(base_path('public/storage/news_files/' . $rename_image));
            }
            news::find($last_insert_id)->update(['file_path' => $rename_image,]);
        }
        return back()->with('message', 'News Inserted Successfully.');
    }
    function NewsList()
    {
        $allNews = news::orderBy('id', 'DESC')->paginate(10);
        return view('adminview.news.NewListPage', compact('allNews'));
    }
    function SearchNews(Request $request)
    {
        $searchinput = $request->search_data;

        $allNotice = news::where('title', 'LIKE', '%' . $searchinput . '%')
            ->orWhere('description', 'LIKE', '%' . $searchinput . '%')
            ->orWhere('created_at', 'LIKE', '%' . $searchinput . '%')
            ->Paginate();

        return view('adminview.news.NewListPage', compact('allNotice'));
    }
    function NewsEdit($id)
    {
        $id = base64_decode($id);
        $newsGetData = news::find($id);
        return view('adminview.news.NewsEditPage', compact('newsGetData'));
    }
    function NewsUpdate(Request $request)
    {
        $request->validate([
            'title'         => 'required|string',
            'description'   => 'nullable',
            'file_name'     => 'nullable|mimes:jpeg,png,jpg,gif,svg,pdf|max:5120',
        ]);
        //this is for decrypting id
        $update_id = base64_decode($request->update_id);

        news::find($update_id)->update([
            'title'       => $request->title,
            'description' => $request->description,
            'slug'        => Str::slug($request->title),
            'created_at'  => Carbon::now(),
        ]);


        if ($request->hasFile('file_name')) {
            $old_image_name = news::find($update_id)->file_path;
            $main_img = $request->file_name;
            //get file extension $extension
            $extension = $request->file('file_name')->extension();
            $rename_image = $update_id . "." . $extension;


            if ($extension == "pdf") {
                if (!$old_image_name == null) {
                    unlink(base_path('public/storage/news_files/' . $old_image_name));
                }
                //1st $filepath we define the file location and then move it.
                $filePath = public_path('/storage/notice_file');
                $main_img->move($filePath,  $rename_image);
            } else {
                if (!$old_image_name == null) {
                    unlink(base_path('public/storage/news_files/' . $old_image_name));
                }
                Image::make($main_img)->save(base_path('public/storage/news_files/' . $rename_image));
            }
            news::find($update_id)->update(['file_path' => $rename_image,]);
        }

        return back()->with('message', 'Data Update Successfully.');
    }
    function NewsDelete($id)
    {
        $delete_id = base64_decode($id);
        $news_details = news::find($delete_id);
        if (!$news_details->file_path == null) {
            unlink(base_path('public/storage/news_files/' . $news_details->file_path));
        }
        $news_details->delete();
        return redirect()->route('news.list')->with('error', 'Data Deleted!.');
    }
}
