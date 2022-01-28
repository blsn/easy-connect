<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// to shorten the URLs (protected namespace)

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\PagesController::class, 'services'])->name('services');

Route::resource('tasks', '\App\Http\Controllers\TasksController')->middleware(['auth']); // shorten the url

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function() {
    Route::resource('/users', App\Http\Controllers\Admin\UsersController::class);
});


/**
 * start
 */

Route::get('/admin', [App\Http\Controllers\PagesController::class, 'index'])->name('index');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

// Route::get('/global', function() {
//     return view('global');
// });

Route::get('/global', [App\Http\Controllers\MenusController::class, 'global'])->name('global');
Route::get('/management', [App\Http\Controllers\MenusController::class, 'management'])->name('management');