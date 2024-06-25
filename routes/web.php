<?php

use Illuminate\Support\Facades\Route;

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

Route::get('about', function () {
    return view('aboutus');
});

Route::get('blog', function () {
    return "<h1>หน้าบทความ</h1>";
});

Route::get('blog/{name}', function ($name) {
    return "<h1>หน้าบทความ $name </h1>";
});

Route::get('login', function () {
    return "<a href='".route('login')."'>Login</a>";
});

Route::get('admin/user/ace', function () {
    return "<h1>สวัสดี Admin </h1>";
})->name('login');

Route::fallback(function(){
    return "Not Found 404";
});