<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\page\PageController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\alumni\AlumniController;
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

/*
	Route Collection
 */

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [DashboardController::class,'admin'])->name('admin');

/*
 clearing cache
 */
Route::get('/cache', function () {
    
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

});

/*
 Route RESTfull API Alumni
 */

Route::get('/alumnies', [AlumniController::class,'index'])->name('alumnies');
