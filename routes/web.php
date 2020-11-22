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

Route::group(['middleware' => ['auth', 'superadmin']], function() {

    Route::post('/addtemplate', 'FormController@addtemplate');
    Route::post('/deleteonetemp', 'FormController@deleteonetemp');
    Route::post('/edittemp', 'FormController@edittemp');
});

Route::group(['middleware' => ['auth', 'admin']], function() {

Route::get('/', 'FormController@index')->name('/');
Route::get('/deleteall', 'FormController@deleteall');
Route::get('/deleteallb', 'FormController@deleteallb');
Route::get('/deleteallt', 'FormController@deleteallt');
Route::get('/deleteallc', 'FormController@deleteallc');
Route::post('/deleteone', 'FormController@deleteone');
Route::post('/deleteoneb', 'FormController@deleteoneb');
Route::post('/deleteonet', 'FormController@deleteonet');
Route::post('/deleteonec', 'FormController@deleteonec');
Route::post('/addcimage', 'FormController@addcimage');
Route::post('/addctemplate', 'FormController@addctemplate');
Route::post('/addresolution', 'FormController@addresolution');
Route::post('/addcompetition', 'FormController@addcompetition');
Route::post('/addteam', 'FormController@addteam');
Route::post('/addsport', 'FormController@addsport');
Route::post('/addbackground', 'FormController@addbackground');
Route::post('/addmatch', 'FormController@addmatch');
Route::post('/filter', 'FormController@filter');
Route::post('/filter2', 'FormController@filter2');
Route::post('/lang', 'FormController@lang');
Route::post('/addpdf', 'FormController@addpdf');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);});
