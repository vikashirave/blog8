<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController2;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

//Route::resource('users','App\Http\Controllers\usersController');

//Route::view('add','addmember');
//Route::post('add',[usersController::class,'addData']);
/*  Route::post(" user",[UserAuth::class,'userLogin']);
Route::view("login", 'login');
Route::view("profile", 'profile');

Route::get('/logout', function () {
    if(session()->has('user'))
    {
      session()->pull('user');  
    }
    return redirect('login');
});
 */
/* Route::view('/','addmember');
Route::post('add',[usersController::class,'addData']);
Route::get('/login', function () {
  return view('login');
});
Route::post("user",[UserAuth::class,'userLogin']); */

Route::get('/', function () {
  return view('login');
});
Route::post("/login",[UserController2::class, 'login']);

