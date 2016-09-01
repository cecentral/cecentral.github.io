<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('readme', 'PagesController@readMe');

Route::get('summary', 'PagesController@summary');

Route::get('activity/accreditation', 'PagesController@accreditation');

Route::get('activity/details', 'PagesController@details');

Route::get('activity/get-credit', 'PagesController@getCredit');

Route::get('activity/location', 'PagesController@location');

Route::get('activity/options', 'PagesController@options');

Route::get('activity/outcomes', 'PagesController@outcomes');

Route::get('activity/publishing-options', 'PagesController@publishingOptions');

Route::get('activity/topics', 'PagesController@topics');

Route::get('activity/locations-drop-down-select-box', 'PagesController@locationsDropDownSelectBox');

Route::get('flexbox', function() {
    return view('layouts.flexlayout');
});