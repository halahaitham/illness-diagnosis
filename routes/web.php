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
Route::get('/advice/{id}','frontcontroller@advice');

Route::get('/fronthospital','hospitalcontroller@fronthospital');
Route::get('/frontspecialism','specialismcontroller@frontspecialism');



Route::get('/table/{id}','schedualcontroller@doctors_schedual');
Route::get('/button/{id}','schedualcontroller@button');


Route::get('/adminbutton/{id}','schedualcontroller@adminbutton');
Route::get('/specialism_schedual/{id}','schedualcontroller@specialism_schedual');

Route::post('/search',function (\Illuminate\Http\Request $request){

  $s=Search::search(
    "symptoms" ,
    ['content_A' , 'content_B','content_C','content_D','content_E','content_F'
        ,'content_G','content_H','content_I','content_J'] ,
    $request->search  ,
    // ['modelName' , 'title', 'description'],
    null,
    ['id'  , 'asc'] ,
    true ,
    30
    );
    return view('front.search',compact('s'));
     });




Route::get('/logout','auth\logincontroller@logout');



Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){

    Route::get('/',function (){
        return view('admin.index');})->name('admin.index');

    Route::resource('advertise','advertisecontroller');
    Route::resource('category','categorycotroller');
    Route::resource('symptoms','symptomscotroller');
    Route::resource('diagnosis','diagnosiscontroller');


    Route::resource('hospital','hospitalcontroller');
    Route::resource('specialism','specialismcontroller');
    Route::resource('schedual','schedualcontroller');


    });


Route::resource('patientappointment','patientappointmentcontroller');
Route::get('back','patientappointmentcontroller@back');



    Route::get('/so', function () {
    return view('so');
    });



































Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
