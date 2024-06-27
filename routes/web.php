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
    $name = "Ace Phatcharapol";
    $date = "27/6/2567";
    return view('aboutus', compact('name', 'date'));
})->name('about');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('blog', function () {
    $blogs = [
        [
            'title' => "บทความที่ 1",
            'content' => "เนื้อหาบทความที่ 1",
            'status' => true,
        ],
        [
            'title' => "บทความที่ 2",
            'content' => "เนื้อหาบทความที่ 2",
            'status' => true,
        ],
        [
            'title' => "บทความที่ 3",
            'content' => "เนื้อหาบทความที่ 3",
            'status' => true,
        ],
        [
            'title' => "บทความที่ 4",
            'content' => "เนื้อหาบทความที่ 4",
            'status' => true,
        ],
        [
            'title' => "บทความที่ 5",
            'content' => "เนื้อหาบทความที่ 5",
            'status' => true,
        ],
        [
            'title' => "บทความที่ 6",
            'content' => "เนื้อหาบทความที่ 6",
            'status' => false,
        ],
    ];
    return view('blog',compact('blogs'));
})->name('blog');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('blog/{name}', function ($name) {
    return "<h1>หน้าบทความ $name </h1>";
});

Route::get('login', function () {
    return "<a href='" . route('login') . "'>Login</a>";
});

Route::get('admin/user/ace', function () {
    return "<h1>สวัสดี Admin </h1>";
})->name('login');

Route::fallback(function () {
    return "Not Found 404";
});
