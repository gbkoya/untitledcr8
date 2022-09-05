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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog.first_blog');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/details1', function () {
    return view('details1');
});
Route::get('/details2', function () {
    return view('details2');
});





// This route would soon be removed as its for testing purpose
Route::get('/404', function () {
    return view('errors.404');
});

// This is a permanent route and must always be the last route
Route::fallback(function () {
    return view("errors.404");
});
