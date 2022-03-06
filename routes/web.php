<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\UserController;


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
Route::prefix('admin')->middleware('auth')->group(function (){
    Route::resource('/users',UserController::class);
});
Route::prefix('auth')->controller(LoginController::class)->group(function (){
    Route::get('login','index');
    Route::post('login','customLogin');
});
Route::prefix('auth')->controller(LogoutController::class)->group(function (){
    Route::get('logout','signOut')->name('logout');
});
Route::get('tst', function () {

    return Hash::make('12345678');
});
