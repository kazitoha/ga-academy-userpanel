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
Route::get('staff', 'App\Http\Controllers\Userpanel\TeacherStaffController@StaffView')->name('staff');
Route::get('select/teacher/{id}', 'App\Http\Controllers\Userpanel\TeacherStaffController@selectTeacher');
Route::get('teachers', 'App\Http\Controllers\Userpanel\TeacherStaffController@teachers')->name('teacher');
//testimonial
Route::get('academic/testimonial', 'App\Http\Controllers\Userpanel\TestimonialController@TestimonialView')->name('academic.testimonial');
Route::post('academic/apply/testimonial', 'App\Http\Controllers\Userpanel\TestimonialController@TestimonialStore')->name('apply.for.testimonial');
//calendar
Route::get('academic/calendar', 'App\Http\Controllers\Userpanel\AcademicController@AcademicCalendarView')->name('academic.calendar');
// group
Route::get('group', 'App\Http\Controllers\Userpanel\DashboardController@group')->name('group.view');


//guardians
Route::get('honorable/guardians', 'App\Http\Controllers\Userpanel\HonorableGuardiansController@HonorableGuardiansView')->name('honorable.guardians');
// admission
Route::get('admission', 'App\Http\Controllers\Userpanel\AdmissionController@admissionView')->name('admission.view');

//committee
Route::get('about/committee', 'App\Http\Controllers\Userpanel\CommitteeController@CommitteeView')->name('about.committee');

//history
Route::get('history', 'App\Http\Controllers\Userpanel\HistoryController@historyView')->name('history');

//contact
Route::get('contact', 'App\Http\Controllers\Userpanel\ContactController@ContactView')->name('contact');
