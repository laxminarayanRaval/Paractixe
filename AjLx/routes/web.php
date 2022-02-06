<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\PollController;


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

// Login
Route::get('/login/{err?}',function ($err = null) {
    return view('login',['error'=>$err]);
});

Route::post('/loginCheck',[LoginController::class,'check']);

// Registration
Route::get('/registration',function () {
    return view('registration');
});

Route::post('/regisCheck',[RegisController::class,'register']);

// Home 
Route::get('/home',function() {
    return view('home',['pollresult'=>null]);
});

// Poll
Route::get('/pollCount',[PollController::class,'pollCount']);