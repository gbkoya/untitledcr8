<?php

use App\Http\Controllers\Admin\ProductCrud;
use App\Http\Controllers\ProtectedRoutes;
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
    return view('realhome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/ourservices', function () {
    return view('ourservices');
});

Route::get('/ourwork', function () {
    return view('ourwork');
});


Route::get('/contact', function () {
    return view('contact');
});



Route::get('/blog', function () {
    return view('blog.blog');
});



Route::get('/blog-post', function () {
    return view('blog_post.first_blog_post');
});



Route::get('/checkout3', function () {
    return view('checkout3');
});

Route::get('/test', function () {
    return view('errors.test');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/details', function () {
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
