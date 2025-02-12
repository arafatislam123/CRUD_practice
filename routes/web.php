<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/test', function () {
    return view('test');
});
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'ourfilestore'])->name('store');
