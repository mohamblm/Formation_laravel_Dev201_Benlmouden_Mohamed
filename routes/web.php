<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController ;

Route::get('/', [HomeController::class , 'Home'])->name('home');
Route::get('/blog/{id}', [HomeController::class , 'blog']);


// Route::get('/', 'HomeController@Home')->name('home'); laravel V 8.0.0 down

Route::get('/about', function () {return view('about');})->name('about');