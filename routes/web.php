<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/dashboard', function(){
    return view('admin.dashboard');
});

Route::group(['prefix' => 'admin', 'middlewere' => 'auth'], function(){
    Route::get('dashboatd', 'DashboardController@index')->name('admin.dashboatd');
    /** All meterail design pages for dashboard  */
    Route::get('tables', 'PagesController@tables');
    Route::get('icons', 'PagesController@icons');
    Route::get('notification', 'PagesController@notification');
    Route::get('typography', 'PagesController@typography');
    Route::get('profile', 'PagesController@profile');
});
