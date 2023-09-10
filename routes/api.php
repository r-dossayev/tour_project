<?php

use App\Http\Controllers\API\City\CityController;
use App\Http\Controllers\API\Tour\TourController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::post('register', 'API\RegisterController@register');
//Route::post('login', 'API\RegisterController@login');

Route::get('/tours', [TourController::class, 'index']); // uri: (/api/tours) // get all tours
Route::get('/users', [TourController::class, 'users']); // uri: (/api/tours) // get all tours
Route::get('/cities', [CityController::class, 'index']); // uri: (/api/tours) // get all tours





//https://blog.devgenius.io/rest-api-in-laravel-354d755a553a
