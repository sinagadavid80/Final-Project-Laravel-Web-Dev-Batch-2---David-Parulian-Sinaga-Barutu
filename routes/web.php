<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class,'homepage']);

Route::get('/guru/tambahguru', [App\Http\Controllers\gurucontroller::class,'formCreate']);
Route::post('/guru/tambahguru', [App\Http\Controllers\gurucontroller::class,'savedata']);

Route::get('/guru/{id}/edit', [App\Http\Controllers\gurucontroller::class,'editdata']);
Route::post('/guru/{id}/edit', [App\Http\Controllers\gurucontroller::class,'updatedata']);

Route::delete('/guru/{id}/delete}', [App\Http\Controllers\gurucontroller::class,'deletedata']);
// Route::get('/', [App\Http\Controllers\gurucontroller::class,'homepage']);


// Route::get('/', function () {
//     return view('welcome');
// });
