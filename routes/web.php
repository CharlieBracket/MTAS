<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('public');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(

);
Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);