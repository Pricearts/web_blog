<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

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

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/article/{id}', [\App\Http\Controllers\ArticleController::class, 'index'])->name('article');

Route::group(['prefix' => 'dash'], function () {
    Route::get('/auth', [AdminAuthController::class, 'index'])->name('dash.auth.index')->middleware('not_admin');
    Route::post('/auth', [AdminAuthController::class, 'store'])->name('dash.auth.process')->middleware('not_admin');

    Route::get('/', function () {
       return view('admin.index');
    })->name('dash.index')->middleware('admin');
});
