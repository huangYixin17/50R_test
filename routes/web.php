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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

//員工新增刪除顯示資料
Route::get('employee','EmployeeController@index');
Route::get('new', 'EmployeeController@new');
Route::post('store','EmployeeController@store');
Route::get('edit','EmployeeController@edit');
Route::post('update','EmployeeController@update');
Route::get('delete','EmployeeController@delete');

//查詢員工時數
Route::get('showhours','HoursController@show');
Route::get('date','HoursController@index');

//刪除員工連同->相同員工編碼的日期資料庫也刪除
Route::get('Datedelete','DateController@delete');

//打卡
Route::get('clockon', function () {
    return view('clockon');
});
//測試
Route::get('test',function(){
    return view('test');
});
Route::post('form',function (Request $request){
    if($request->hasFile('profile_picture')){
        var_dump($request->file('profile_picture'));
    }
});