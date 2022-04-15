<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/contact',[HomeController::class,'contact'])->name('contact')->middleware('contact');


Route::get('/home',[HomeController::class,'home']);
Route::get('/about',[HomeController::class,'about']);

Route::middleware(['contact'])->group(function () {
    Route::get('/contact',[HomeController::class,'contact']);
    
});
