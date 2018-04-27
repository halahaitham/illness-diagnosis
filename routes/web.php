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

Route::get('/hala', function () {
    return view('welcome');
});

Route::resource('/','frontcontroller');

Route::get('/dia','symptomscotroller@dia');
Route::get('/cancel','symptomscotroller@cancel');





Route::get('/showw/{id}','frontcontroller@showw');
Route::get('/yes/{id}','frontcontroller@yes');
Route::get('/no/{id}','frontcontroller@no');



Route::get('/c','frontcontroller@c');





Route::get('/logout','auth\logincontroller@logout');



Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){

    Route::get('/',function (){
        return view('admin.index');})->name('admin.index');

    Route::resource('advertise','advertisecontroller');
    Route::resource('category','categorycotroller');
    Route::resource('symptoms','symptomscotroller');
    Route::resource('diagnosis','diagnosiscontroller');

    });





Route::get('/so', function () {
    return view('so');
});































Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
