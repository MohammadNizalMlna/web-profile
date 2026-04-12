<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/project', [PageController::class,'project']);
Route::get('/project/{slug}', [PageController::class,'projectDetail']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/cv', function () {
    return view('pages.cv');
});