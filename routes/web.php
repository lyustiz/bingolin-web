<?php

use Illuminate\Support\Facades\Route;

/* Route::view('/', 'app'); */


Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('{path}', 'app')->where('path', '(.*)');