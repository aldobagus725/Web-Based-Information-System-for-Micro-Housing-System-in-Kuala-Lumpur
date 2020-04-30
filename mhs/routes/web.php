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

Route::get('/register/housingofficer', 'Auth\HousingOfficerRegisterController@showHousingOfficerRegisterForm');
Route::get('/register/applicant', 'Auth\ApplicantRegisterController@showApplicantRegisterForm');
Route::post('/register/housingofficer', 'Auth\HousingOfficerRegisterController@create');
Route::post('/register/applicant', 'Auth\ApplicantRegisterController@create');

Route::get('/login/housingofficer', 'Auth\HousingOfficerLoginController@showLogin');
Route::get('/login/applicant', 'Auth\ApplicantLoginController@showLogin');
Route::post('/login/housingofficer', 'Auth\HousingOfficerLoginController@login');
Route::post('/login/applicant', 'Auth\ApplicantLoginController@login');

Route::group(['middleware'=>['auth','HousingOfficer']],function(){
    Route::get('/dashboard', function () {
        return view('HousingOfficer.dashboard');
    });
    Route::get('/viewresidences','HousingOfficerController@viewresidences');
    Route::get('/editresidences{residenceID}','HousingOfficerController@editresidences');
    Route::put('/updateresidences{residenceID}','HousingOfficerController@updateresidences');
    Route::get('/viewapplications','HousingOfficerController@viewapplication');
    Route::get('/addresidences','HousingOfficerController@addresidences');
    Route::post('/addresidences','HousingOfficerController@store')->name('addedData');
    Route::get('/editapplication{applicationID}','HousingOfficerController@editapplication');
    Route::put('/updateapplication{applicationID}','HousingOfficerController@updateapplication');
    Route::get('/deleteapplication{applicationID}','HousingOfficerController@deleteapplication');
});

Route::group(['middleware'=>['auth','Applicant']],function(){
    Route::get('/dashboard_user', function () {
        return view('Applicant.dashboard_user');
    });
    Route::get('/dashboard_user','ApplicantController@ViewApplication');
    Route::get('/ViewResidence','ApplicantController@ViewResidence');
    Route::get('/SubmitApplication/{residenceID}','ApplicantController@SubmitApplication');
    Route::post('/store','ApplicantController@store');
});

