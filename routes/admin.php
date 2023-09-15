<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::prefix('/admin')
    ->middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {


      //delete all thinks in table for new project
      Route::get('notice', 'App\Http\Controllers\Admin\NoticeController@NoticeView')->name('notice.view');


        // dashboard

        Route::get('/', function () {
            return redirect('admin/dashboard');
        });
        Route::get('/dashboard', function () {
            return view('adminview/dashboard');
        })->name('dashboard');




        // common function
        Route::get('delete/all/table/data', 'App\Http\Controllers\Admin\websiteSettingsController@DeleteAll');



        // Notice

        Route::get('notice', 'App\Http\Controllers\Admin\NoticeController@NoticeView')->name('notice.view');

        Route::post('notice/insert', 'App\Http\Controllers\Admin\NoticeController@NoticeStore')->name('notice.store');

        Route::get('notice/list', 'App\Http\Controllers\Admin\NoticeController@NoticeList')->name('notice.list');
        Route::post('notice/search', 'App\Http\Controllers\Admin\NoticeController@SearchNotice')->name('search.notice');

        Route::get('notice/Edit/{id}', 'App\Http\Controllers\Admin\NoticeController@NoticeEdit')->name('notice.edit');
        Route::post('notice/update', 'App\Http\Controllers\Admin\NoticeController@NoticeUpdate')->name('notice.update');
        Route::get('notice/delete/{id}', 'App\Http\Controllers\Admin\NoticeController@NoticeDelete')->name('notice.delete');





        // event
        Route::get('event', 'App\Http\Controllers\Admin\EventController@EventView')->name('event.view');
        Route::post('event/store', 'App\Http\Controllers\Admin\EventController@EventStore')->name('event.store');

        Route::get('event/list', 'App\Http\Controllers\Admin\EventController@EventList')->name('event.list');

        Route::post('event/search', 'App\Http\Controllers\Admin\EventController@SearchEvent')->name('search.event');

        Route::get('edit/event/{id}', 'App\Http\Controllers\Admin\EventController@EditEvent')->name('event.edit');

        Route::post('update/event', 'App\Http\Controllers\Admin\EventController@UpdateEvent')->name('event.update');

        Route::get('delete/event/{id}', 'App\Http\Controllers\Admin\EventController@EventDelete')->name('event.delete');







        //news
        Route::get('news', 'App\Http\Controllers\Admin\NewsController@NewsView')->name('news.view');

        Route::post('news/store', 'App\Http\Controllers\Admin\NewsController@NewsStore')->name('news.store');

        Route::get('news/list', 'App\Http\Controllers\Admin\NewsController@NewsList')->name('news.list');

        Route::get('news/search', 'App\Http\Controllers\Admin\NewsController@SearchNews')->name('search.news');

        Route::get('news/edit/{id}', 'App\Http\Controllers\Admin\NewsController@NewsEdit')->name('news.edit');

        Route::post('news/update', 'App\Http\Controllers\Admin\NewsController@NewsUpdate')->name('news.update');

        Route::get('news/delete/{id}', 'App\Http\Controllers\Admin\NewsController@NewsDelete')->name('news.delete');




        //independenceCorner

        Route::get('Golden-Jubilee-Independence-Corner', 'App\Http\Controllers\Admin\IndependenceCornerController@GoldenJubileeIndependenceCorner')->name('GoldenJubileeIndependenceCorner');
        Route::post('Golden-Jubilee-Independence-Corner/store', 'App\Http\Controllers\Admin\IndependenceCornerController@GoldenJubileeIndependenceStore')->name('GoldenJubileeIndependenceCorner.store');
        //বঙ্গবন্ধু কর্নার
        Route::get('bongobondhu/corner', 'App\Http\Controllers\Admin\IndependenceCornerController@Bongobondhu')->name('bongobondhu.corner');
        Route::post('bongobondhu/store', 'App\Http\Controllers\Admin\IndependenceCornerController@BongobondhuStore')->name('bongobondhu.store');


        // office and stuff
        Route::get('teacher&staff', 'App\Http\Controllers\Admin\StaffController@StaffView')->name('staff.view');
        Route::post('teacher&staff/insert', 'App\Http\Controllers\Admin\StaffController@StaffStore')->name('staff.store');
        Route::get('teacher/staff/list', 'App\Http\Controllers\Admin\StaffController@StaffList')->name('staff.list');
        Route::post('teacher/staff/search', 'App\Http\Controllers\Admin\StaffController@SearchStaff')->name('search.staff');

        Route::get('teacher&staff/edit/{id}', 'App\Http\Controllers\Admin\StaffController@StaffEdit')->name('staff.edit');
        Route::post('teacher&staff/update', 'App\Http\Controllers\Admin\StaffController@StaffUpdate')->name('staff.update');
        Route::get('teacher&staff/delete/{id}', 'App\Http\Controllers\Admin\StaffController@StaffDelete')->name('staff.delete');



        //Committee
        Route::get('committee', 'App\Http\Controllers\Admin\CommitteeController@CommitteeView')->name('committee.view');

        Route::get('committee/list', 'App\Http\Controllers\Admin\CommitteeController@CommitteeList')->name('committee.list');
        Route::post('committee/search', 'App\Http\Controllers\Admin\CommitteeController@SearchCommittee')->name('search.committee');

        Route::post('committee/insert', 'App\Http\Controllers\Admin\CommitteeController@CommitteeStore')->name('committee.store');

        Route::get('committee/edit/{id}', 'App\Http\Controllers\Admin\CommitteeController@CommitteeEdit')->name('committee.edit');

        Route::post('committee/update', 'App\Http\Controllers\Admin\CommitteeController@CommitteeUpdate')->name('committee.update');

        Route::get('committee/delete/{id}', 'App\Http\Controllers\Admin\CommitteeController@CommitteeDelete')->name('committee.delete');








        // gallery
        Route::get('gallery', 'App\Http\Controllers\Admin\GalleryController@GalleryView')->name('gallery.view');

        Route::post('gallery/insert', 'App\Http\Controllers\Admin\GalleryController@GalleryStore')->name('gallery.store');

        Route::get('gallery/edit/{id}', 'App\Http\Controllers\Admin\GalleryController@GalleryEdit')->name('gallery.edit');

        Route::post('gallery/update', 'App\Http\Controllers\Admin\GalleryController@GalleryUpdate')->name('gallery.update');

        Route::get('gallery/delete/{id}', 'App\Http\Controllers\Admin\GalleryController@GalleryDelete')->name('gallery.delete');

        //banner
        Route::get('banner', 'App\Http\Controllers\Admin\BannerController@BannerView')->name('banner.view');
        Route::post('banner/store', 'App\Http\Controllers\Admin\BannerController@BannerStore')->name('banner.store');
        Route::get('banner/delete/{id}', 'App\Http\Controllers\Admin\BannerController@BannerDelete')->name('banner.delete');

        //website settings
        Route::get('website/settings', 'App\Http\Controllers\Admin\websiteSettingsController@websiteSettingView')->name('school.setting');
        Route::post('store/school/name/and/logo', 'App\Http\Controllers\Admin\websiteSettingsController@storeSchoolNameAndLogo')->name('store.school.website.settings');

    });
