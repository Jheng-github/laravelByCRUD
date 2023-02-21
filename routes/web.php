<?php

use Illuminate\Support\Facades\Route;



use Illuminate\Http\Request;
use App\Http\Controllers\ArticlesController;    
Route::resource('articles', ArticlesController::class);//創建七個路徑

Route::get('/', [ArticlesController::class, 'index'])->name('root');//文章列表當成首頁

Route::get('/test', function () {
    return view('welcome');
});



//Route::resource('articles', \app\Http\Controllers\ArticlesController::class);
// 
//Route::view('/test', 'test', ['name' => 'gggs']); //

// Route::get('/test/{id}', function ($id) {
//    return 'User '.$id;
//    //$id=5;
//    //return view('test');
// });



// Route::get('/test', function () {
//     $name = 5;
//     return view('test', ['name' => $name]);
// });


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


//這個可以用登入驗證
// Route::middleware(['auth'])->group(function () {
//     Route::resource('articles', ArticlesController::class);
//     Route::get('/', [ArticlesController::class, 'index'])->name('root');
// });

