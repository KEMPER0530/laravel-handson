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
// Profileのルーター
Route::get('/maintenance/profile', 'ProfileController@index')->name('profile');
Route::get('/maintenance/profile/create', 'ProfileController@create');
Route::post('/maintenance/profile/store', 'ProfileController@store');
Route::get('/maintenance/profile/{profile}/edit', 'ProfileController@edit');
Route::patch('/maintenance/profile/{profile}', 'ProfileController@update');
Route::delete('/maintenance/profile/{profile}', 'ProfileController@destroy');
// Workのルーター
Route::get('/maintenance/work', 'WorkController@index')->name('work');
Route::get('/maintenance/work/create', 'WorkController@create');
Route::post('/maintenance/work/store', 'WorkController@store');
Route::get('/maintenance/work/{work}/edit', 'WorkController@edit');
Route::patch('/maintenance/work/{work}', 'WorkController@update');
Route::delete('/maintenance/work/{work}', 'WorkController@destroy');
// カードのルーター
Route::get('/maintenance/crdcardinfo', 'CrdcardinfoController@index')->name('crdcardinfo');
Route::get('/maintenance/crdcardinfo/create', 'CrdcardinfoController@create');
Route::post('/maintenance/crdcardinfo/store', 'CrdcardinfoController@store');
Route::get('/maintenance/crdcardinfo/{crdcardinfo}/edit', 'CrdcardinfoController@edit');
Route::patch('/maintenance/crdcardinfo/{crdcardinfo}', 'CrdcardinfoController@update');
Route::delete('/maintenance/crdcardinfo/{crdcardinfo}', 'CrdcardinfoController@destroy');
// ログインユーザのルーター
Route::get('/maintenance/logininfo', 'LogininfoController@index')->name('logininfo');
Route::get('/maintenance/logininfo/create', 'LogininfoController@create');
Route::post('/maintenance/logininfo/store', 'LogininfoController@store');
Route::get('/maintenance/logininfo/{logininfo}/edit', 'LogininfoController@edit');
Route::patch('/maintenance/logininfo/{logininfo}', 'LogininfoController@update');
Route::delete('/maintenance/logininfo/{logininfo}', 'LogininfoController@destroy');

// 仮ユーザのルーター
Route::get('/maintenance/tmpuserinfo', 'TmpuserinfoController@index')->name('tmpuserinfo');
Route::get('/maintenance/tmpuserinfo/{tmpuserinfo}/edit', 'TmpuserinfoController@edit');
Route::patch('/maintenance/tmpuserinfo/{tmpuserinfo}', 'TmpuserinfoController@update');
Route::delete('/maintenance/tmpuserinfo/{tmpuserinfo}', 'TmpuserinfoController@destroy');
