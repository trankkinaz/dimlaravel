<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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
    return view('home',[
        "idpage"=>"home",
        "title"=>"Laravel Apps"
    ]);
});


Route::get('/home', function () {
    return view('home',[
        "idpage"=>"home",
        "title"=>"Laravel Apps"
    ]);
});


Route::get('/login',[LoginController::class,'login'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/dashboard',function () {
    return view('dashboard.index',[
        "idpage"=>"dashboard",
        "title"=>"User Dashboard"
    ]);
})->middleware('auth');

Route::get('/logout',[LoginController::class,'logout']);

//route for roles and user mapped by folder resources!
Route::resource('roles',RoleController::class)->middleware('auth');
Route::resource('users',UserController::class)->middleware('auth');
