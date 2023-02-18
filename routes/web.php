<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Http\Request;
 
Route::get('/test/{name?}', function ($name = null) {
    return $name;
});


Route::get('/', function () {
    
    return view('welcome');
});

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
