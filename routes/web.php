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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/shop-men', function () {
    return view('shops.shop_men');
});

Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/first-service', function () {
    return view('services.first_service');
});

Route::get('/blog-post', function () {
    return view('blog_post.first_blog_post');
});

Route::get('/test', function () {
    return view('errors.test');
});

Route::get('/cart', function () {
    return view('checkout1.checkout1');
});

Route::get('/checkout1', function () {
    return view('checkout2.checkout2');
});



// This route would soon be removed as its for testing purpose
Route::get('/404', function () {
    return view('errors.404');
});

// This is a permanent route and must always be the last route
Route::fallback(function () {
    return view("errors.404");
});