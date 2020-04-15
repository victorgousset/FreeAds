<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/email', function () {
    //Mail::to('victor.gousset@email.eu')->send(new WelcomeMail());
   return new WelcomeMail();
});
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin/users', 'UsersController');

Route::get('/profil', 'UsersController@profil')->name('profil');
//Route::resource('/profil', 'ProfilController');

Route::get('/modification_profil', 'ProfilController@index')->name('modification');
Route::post('/modification_profil', 'ProfilController@modification_profil');
Route::post('/modification_password', 'ProfilController@modification_password');
Route::get('/delete', 'ProfilController@delete_account')->name('delete');
Route::get('/delete_confirm', 'ProfilController@delete_confirm');

