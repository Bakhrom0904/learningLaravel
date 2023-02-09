<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/',[SiteController::class,'home'])->name('home');



Route::prefix('admin')->group(function () {
    
    Route::get('/users', function () {
        return view('users');
    })->name('users');

});

Route::get('/test', [SiteController::class, 'test'])->name('test');