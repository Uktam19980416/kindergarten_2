<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index')->name('/');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/service', 'HomeController@service')->name('service');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/abouts/newsfullpage/{id}', 'HomeController@newsfullpage')->name('abouts.newsfullpage');
Route::post('/stores', 'HomeController@stores')->name('stores');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'ContactsController@index')->middleware('verified');

Route::resource('abouts', 'AboutController');

Route::resource('teams', 'TeamController');

Route::resource('galleries', 'GalleryController');

Route::resource('services', 'ServicesController');

Route::resource('contacts', 'ContactsController');
