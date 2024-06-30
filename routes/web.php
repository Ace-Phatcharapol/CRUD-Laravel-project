<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
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

Route::get('/blog', [BlogController::class,'showBlog'])->name('blog');
Route::get('blog/{id}', [BlogController::class,'detailBlog'])->name('detail');
//Admin
Route::prefix('author')->group(function(){
    Route::get('/create',[AdminController::class,'create'])->name('create');
    Route::post('/insert',[AdminController::class,'insert']);
    Route::get('/delete/{id}',[AdminController::class,'delete'])->name('delete');
    Route::get('/switch/{id}',[AdminController::class,'switch'])->name('switch');
    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
    Route::post('/update/{id}',[AdminController::class,'update'])->name('update');
});
Route::get('/about', [AdminController::class,'about'])->name('about');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

// Route::fallback(function () {
//     return "Not Found 404";
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
