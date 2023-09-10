<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Tour\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/test', function () {
    return view('test');
})->name('home');

Route::get('/qwe', function () {
    return view('tour.layouts.base');
})->name('tor');

Route::get('/',[MainController::class, 'index'] )->name('tour.index');

// for login and register
//Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
//Route::get('/login', [LoginController::class, 'create'])->name('login.form');
//Route::post('/register', [RegisterController::class, 'register'])->name('register');
//Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/user/d', [CityController::class, 'dUsers'])->name('qweqwe');




Route::get('/admin/city/create', [CityController::class, 'createView'])->name('admin.city.create.view');
Route::post('/admin/city/store', [CityController::class, 'create'])->name('admin.city.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
