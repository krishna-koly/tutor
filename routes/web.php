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

// Route::get('/', function () {
//     return view('welcome');
// });



//group routing
Route::prefix('admin')->name('admin.')->group(function() {


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
route::resource('district','DistrictController');
route::resource('studentclass','StudentClassController');
route::resource('area','AreaController');
route::resource('subject','SubjectController');
route::resource('other','OtherController');
route::resource('guardian','GuardianController');
route::resource('tutor','TutorController');
route::resource('user','UserController');
Route::get('alltutor', 'Front\TutorRegisterController@index')->name('alltutor');
});
Auth::routes();

// Route::get('/ho', 'HomeController@index')->name('home');


Route::get('/', 'Front\MasterController@index')->name('home');

// TUTOR register route below 

Route::get('new-user-register/form', 'Front\TutorRegisterController@create')->name('newtutor');
Route::get('Tutor-login', 'Front\TutorRegisterController@tutorlogin')->name('tutorlogin');
Route::post('registration', 'Front\TutorRegisterController@store')->name('reg');
Route::get('tutor-info/{id}', 'Front\TutorRegisterController@info')->name('tutorinfo');


