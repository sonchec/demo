<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\SonController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[SonController::class, 'index']);
Route::get('/Demo',[DemoController::class,'create'])->middleware('login')->name('post.create');
Route::post('/Demo',[DemoController::class,'store'])->name('post.store');
Route::get('/login', function () 
{return view('login');
})->name('login');