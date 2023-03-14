<?php

use Illuminate\Support\Facades\Route;



use Illuminate\Http\Request;
use App\Http\Controllers\ArticlesController;

Route::resource('articles', ArticlesController::class); //創建七個路徑

//原本是設定 / 是主頁
Route::get('/articles', [ArticlesController::class, 'index'])->name('root'); //
//articles
Route::get('/', function () {
    return view('welcome');
});



//Route::resource('articles', ArticlesController::class); //創建七個路徑
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
