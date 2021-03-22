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
    return view('index');
});
Route::view('index','index');
Route::get('about','corona@about');
Route::get('prevention','corona@prevention');
Route::get('faq','corona@faqs');
Route::get('news','corona@story');
Route::get('details/{id}','corona@newsdetails');
Route::get('contact','corona@contact');
Route::view('admin','fileupload');
Route::post('fileupload','HomeController@store');
Route::get('viewall','HomeController@alldata');
Route::get('delete/{id}','HomeController@destory');
Route::get('edit/{id}','HomeController@edit');
Route::post('fileupdate','HomeController@update');
Route::get('blog','HomeController@viewdata');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
