<?php
use App\reviewmodel;


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
Route::get('movieadmin', function () {
    return view('admin/login');

});

Route::get('home',function(){
	$res = reviewmodel::all();
	return view('home',compact('res'));
});
Route::post('adminloginqry','moviecontroller@adminloginqry');

Route::get('adminpanel',function(){
	return view('admin/adminpanel');
});

Route::get('insertreview',function(){
	return view('Admin/insertreview');
});

Route::post('insert','moviecontroller@insert');

Route::get('updatereview',function(){
	$res=reviewmodel::all();
	return view('Admin/updatereview',compact('res'));
});
Route::get('updateqry/{mid}','moviecontroller@updateqry');
Route::post('update','moviecontroller@update');
Route::get('delete/{mid}','movieController@delete');
Route::get('info/{mid}','moviecontroller@info');
Route::get('movieinfo',function(){
	return view('movieinfo');
});
?>