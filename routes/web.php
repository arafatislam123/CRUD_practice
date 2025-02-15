<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/test', function () {
    return view('test');
});
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'ourfilestore'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'editData'])->name('edit');
Route::post('/update/{id}', [PostController::class, 'updateData'])->name('update');
Route::get('/delete/{id}', [PostController::class, 'deleteData'])->name('delete');
