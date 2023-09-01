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
Route::get('register', function () {
    return redirect('/');
});
Route::get('public/register', function () {
    return redirect('/');
});

//dashboard
Route::get('/', 'App\Http\Controllers\Userpanel\DashboardController@DashboardView');

//notice
Route::get('notice', 'App\Http\Controllers\Userpanel\NoticeController@NoticeView')->name('notice');
Route::get('single/notice/{id}', 'App\Http\Controllers\Userpanel\NoticeController@NoticeSingle')->name('single.notice');
Route::get('select/notice/{id}', 'App\Http\Controllers\Userpanel\NoticeController@NoticeCategory');

//news
Route::get('news', 'App\Http\Controllers\Userpanel\NewsController@NewsView')->name('news');
Route::get('single/news/{id}', 'App\Http\Controllers\Userpanel\NewsController@SingleNews')->name('single.news');

//event
Route::get('event', 'App\Http\Controllers\Userpanel\EventController@EventView')->name('event');
Route::get('single/event/{id}', 'App\Http\Controllers\Userpanel\EventController@SingleEvent')->name('single.event');
Route::post('search-event', 'App\Http\Controllers\Userpanel\EventController@SearchEvent')->name('search.event.userview');

//gallery
Route::get('gallery', 'App\Http\Controllers\Userpanel\GalleryController@GalleryView')->name('gallery');
//সুবর্ণ জয়ন্তী কর্নার
Route::get('golden-jubilee-independence-corner', 'App\Http\Controllers\Userpanel\IndependenceCornerController@IndependenceCornerView')->name('independence-corner');
Route::get('bongobondhu/corner', 'App\Http\Controllers\Userpanel\IndependenceCornerController@BongobondhuCornerView')->name('bongobondhu-corner');
//teacher&staff
Route::get('teacher&staff', 'App\Http\Controllers\Userpanel\StaffController@StaffView')->name('teacher');
Route::get('select/office/{id}', 'App\Http\Controllers\Userpanel\StaffController@selectOffice');
//testimonial
Route::get('academic/testimonial', 'App\Http\Controllers\Userpanel\TestimonialController@TestimonialView')->name('academic.testimonial');
Route::get('academic/apply/testimonial', 'App\Http\Controllers\Userpanel\TestimonialController@TestimonialStore')->name('apply.for.testimonial');
//calendar
Route::get('academic/calendar', 'App\Http\Controllers\Userpanel\AcademicController@AcademicCalendarView')->name('academic.calendar');


//guardians
Route::get('honorable/guardians', 'App\Http\Controllers\Userpanel\HonorableGuardiansController@HonorableGuardiansView')->name('honorable.guardians');

//committee
Route::get('about/committee', 'App\Http\Controllers\Userpanel\CommitteeController@CommitteeView')->name('about.committee');

//history
Route::get('history', 'App\Http\Controllers\Userpanel\HistoryController@historyView')->name('history');

//contact
Route::get('contact', 'App\Http\Controllers\Userpanel\ContactController@ContactView')->name('contact');
