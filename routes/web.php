<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SettingsController;

use GuzzleHttp\Middleware;

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

Route::get('/settings',[SettingsController::class, 'index'])->name('settings.index');
Route::get('/settings/create',[SettingsController::class, 'create'])->name('settings.create');
Route::put('/settings/create',[SettingsController::class, 'update']);


Route::get('/abouts',[AboutController::class, 'index']);
Route::get('/abouts/create',[AboutController::class, 'create'])->name('abouts.create');
Route::post('/abouts',[AboutController::class, 'store']);
Route::get('/abouts/{about}/edit',[AboutController::class, 'edit'])->name('abouts.edit');
Route::put('/abouts',[AboutController::class, 'update']);

 
//Route::resource('abouts', 'AboutController');


Route::get('/home', function () {
    return view('home');
    
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
















