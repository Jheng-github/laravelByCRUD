<?php

use Illuminate\Support\Facades\Route;



use Illuminate\Http\Request;
use App\Http\Controllers\ArticlesController;

Route::resource('articles', ArticlesController::class); //創建七個路徑

Route::get('/', [ArticlesController::class, 'index'])->name('root'); //文章列表當成首頁

Route::get('/test', function () {
    return view('welcome');
});
