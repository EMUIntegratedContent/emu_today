<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('announcement', 'AnnouncementController@index'); // Display public Announcements page
Route::get('announcement/form', 'AnnouncementController@edit'); // Display public Announcements form
Route::post('announcement/form', 'AnnouncementController@store'); // Validate and store Announcements submissions

/*
|--------------------------------------------------------------------------
| Temporary Routes Below
|--------------------------------------------------------------------------
|
| Routes to move from view to view. Will be replaced by controllers
|
*/
Route::get('/', function () {
    return view('public.index');
});
Route::get('calendar', function () {
    return view('public.hub.calendar');
});
Route::get('news', function () {
    return view('public.hub.news');
});
/* End Temporary Routes */
