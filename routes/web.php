<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page\PageController;
use App\Http\Controllers\collection\CollectionController;
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


/*
	Route Page
 */

Route::get('/', [PageController::class,'index'])->name('home');
Route::get('/blog',[PageController::class,'blog'])->name('blog');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/admin',[PageController::class,'test'])->name('admin');
Route::post('/', [PageController::class,'index'])->name('logout');
/*
	Route Collection
 */

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PageController::class,'index'])->name('home');