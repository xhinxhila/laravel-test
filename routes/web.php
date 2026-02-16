<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [pageController::class,'home'])->name('home_page');
Route::get('/services', [pageController::class,'services'])->name('services_page');
Route::get('/contato', [pageController::class,'mostraData'])->name('contato_page');


