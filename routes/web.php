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
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','Housingofficer']],function(){
    Route::get('/dashboard', function () {
        return view('Housingofficer.dashboard');
    });
    Route::get('/viewresidences','Housingofficer\DashboardController@viewresidences');
    Route::get('/viewapplications','Housingofficer\DashboardController@viewapplication');
    Route::get('/addresidences','Housingofficer\DashboardController@addresidences');
    Route::post('/addresidences','Housingofficer\DashboardController@store')->name('addedData');
});

Route::group(['middleware'=>['auth','Applicant']],function(){
    Route::get('/dashboard_user', function () {
        return view('Applicant.dashboard_user');
    });
    Route::get('/dashboard_user','ApplicantController@ViewApplication');
    Route::get('/ViewResidence','ApplicantController@ViewResidence');
});

