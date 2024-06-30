<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('about', [AdminController::class,'about'])->name('about');
Route::get('blog', [AdminController::class,'index'])->name('blog');
Route::get('create',[AdminController::class,'create'])->name('create');
Route::get('insert',[AdminController::class,'insert']);
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
Route::get('switch/{id}',[AdminController::class,'switch'])->name('switch');
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::get('update/{id}',[AdminController::class,'update'])->name('update');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('blog/{id}', function ($id) {
    return view('single_blog',compact('id'));
})->name('blogid');

Route::get('login', function () {
    return "<a href='" . route('login') . "'>Login</a>";
});

// Route::get('admin/user/ace', function () {
//     return "<h1>สวัสดี Admin </h1>";
// })->name('login');

Route::fallback(function () {
    return "Not Found 404";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
