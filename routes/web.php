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

Route::get('/', function () {
    return view('userview/welcome');
});

Route::get('auth/login', function () {
    return redirect('/login');
});


Route::get('/','App\Http\Controllers\Userpanel\DashboardController@DashboardView');


Route::get('notice','App\Http\Controllers\Userpanel\NoticeController@NoticeView')->name('notice');
Route::get('single/notice/{id}','App\Http\Controllers\Userpanel\NoticeController@NoticeSingle')->name('single.notice');

Route::get('event','App\Http\Controllers\Userpanel\EventController@EventView')->name('event');
Route::get('single/event/{id}','App\Http\Controllers\Userpanel\EventController@SingleEvent')->name('single.event');

Route::post('search-event','App\Http\Controllers\Userpanel\EventController@SearchEvent')->name('search.event.userview');

Route::get('gallery','App\Http\Controllers\Userpanel\GalleryController@GalleryView')->name('gallery');

Route::get('teacher&staff','App\Http\Controllers\Userpanel\StaffController@StaffView')->name('teacher');

Route::get('select/office/{id}','App\Http\Controllers\Userpanel\StaffController@selectOffice');

Route::get('academic/calendar','App\Http\Controllers\Userpanel\AcademicController@AcademicCalendarView')->name('academic.calendar');

Route::get('honorable/guardians','App\Http\Controllers\Userpanel\HonorableGuardiansController@HonorableGuardiansView')->name('honorable.guardians');

Route::get('about/committee','App\Http\Controllers\Userpanel\CommitteeController@CommitteeView')->name('about.committee');

Route::get('history','App\Http\Controllers\Userpanel\HistoryController@historyView')->name('history');
Route::get('contact','App\Http\Controllers\Userpanel\ContactController@ContactView')->name('contact');








