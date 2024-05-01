<?php
// php artisan route:list

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/welcome', 'welcome');

Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/index', [HelloWorldController::class, 'index'])->name('index');
    Route::get('/show/{post}', [HelloWorldController::class, 'show'])->where(['post', '[0-9]+'])->name('show');
});