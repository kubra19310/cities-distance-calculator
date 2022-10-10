<?php

use App\Http\Controllers\userController;
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
     return view('homePage');
});
Route::get('/kayit',[userController::class,'indexRegister']);
Route::post('/kayit',[userController::class, 'Register']);
Route::get('/login',[userController::class,'indexLogin']);
Route::post('/login',[userController::class,'Login']);
Route::get('/distance',[userController::class,'indexDistance']);
Route::post('/distance',[userController::class,'Distance']);
