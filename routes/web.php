<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\BlogController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/single-action', SingleActionController::class); 






// 6_Routes de secours (erreur 404)
Route::fallback(function () {
    return "Ooops cette page n'existe pas !";
});








