<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\AdminController;

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


// Admin Route 
Route::group(['middleware' => ['role:Super-Admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');    
});

// Auth Route 
Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', [HomeController::class, 'index'])->name('user.home');    
    Route::resource('posts', PostController::class);
});

require __DIR__.'/auth.php';



 