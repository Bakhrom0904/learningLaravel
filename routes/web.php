<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PhonesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ServicesController;
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
Route::get('/lang/{lang}',function ($lang){
    session(['lang'=>$lang]);
    return back();
});

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function (){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

   Route::resource('phones',PhonesController::class);
   Route::resource('users',UsersController::class);
   Route::resource('categories',CategoryController::class);
   Route::resource('posts',PostController::class);
   Route::resource('services',ServicesController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
