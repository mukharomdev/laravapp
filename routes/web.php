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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello',function (){
// 	return 'hello laravel';
// });

// Route::get('/belajar', function () {
// 	echo '<h1>Hello World</h1>';
// 	echo '<p>Sedang belajar Laravel</p>';
// });

// // ini view dari resources/views
// Route::get('/mahasiswa',function (){
// 	return view('mahasiswa',["mahasiswa01" => "Risa Lestari"]);
// });
// 
Route::get('mahasiswa', function () {
$arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
"Lisa Permata"];
return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});
Route::get('dosen', function () {
$arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst, M.Farm.",
"Dr. Umar Agustinus","Dr. Syahrial, M.Kom."];
return view('dosen')->with('dosen', $arrDosen);
});
Route::get('gallery', function () {
return view('gallery');
});

/*
	Route Page
 */

Route::get('/', [PageController::class,'index'])->name('home');
Route::get('/blog',[PageController::class,'blog'])->name('blog');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/database',[PageController::class,'test']);

/*
	Route Collection
 */

Route::get('/satu', [CollectionController::class,'collectionSatu']);