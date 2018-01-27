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

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('psikologi_perkembangan', function () {
    return view('materipsi');
});

Route::get('manfaat_diagnosa', function () {
    return view('manfaat');
});

Route::get('bahaya_gangguan', function () {
    return view('bahaya');
});

Route::get('test', function () {
    return view('test');
});

Route::get('grade', function () {
    return view('grade');
});

Route::post('test','TestController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/', 'ContactController@store');
