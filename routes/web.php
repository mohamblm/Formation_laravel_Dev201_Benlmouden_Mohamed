<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;

Route::get('/', [HomeController::class , 'Home'])->name('mohamed');


// Route::get('/', 'HomeController@Home')->name('home');

Route::get('/about', function () {return view('about');})->name('about');