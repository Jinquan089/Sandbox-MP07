<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::group(['prefix' => 'comic'], function () {
    Route::get('/', [ComicController::class, 'index'])->name('comic.index');
    Route::get('/create', [ComicController::class, 'create'])->name('comic.create');
    Route::get('/{comic}', [ComicController::class, 'show'])->name('comic.show');
    Route::post('/', [ComicController::class, 'store'])->name('comic.store');
    Route::get('/{id}/edit', [ComicController::class, 'edit'])->name('comic.edit');
    Route::put('/{comic}', [ComicController::class, 'update'])->name('comic.update');
    Route::delete('/comic/{comic}', [ComicController::class, 'destroy'])->name('comic.destroy');
});