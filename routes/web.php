<?php

use App\Http\Controllers\Tour\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/',[MainController::class, 'index'] )->name('tour.index');







