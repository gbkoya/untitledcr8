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
    return view('home');
});


Route::get('admin/product-index', [ProductCrud::class, 'productIndex']) ->name('productIndex');
Route::post('admin/save-product', [ProductCrud::class, 'storeProduct']) ->name('storeProduct');
Route::get('admin/edit-product/{product:id}', [ProductCrud::class, 'editProduct']) ->name('editProduct');
Route::put('admin/update-product/{product:id}', [ProductCrud::class, 'updateProduct']) ->name('updateProduct');
Route::delete('admin/delete-product/{product:id}', [ProductCrud::class, 'deleteProduct']) ->name('deleteProduct');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/shop', function () {
    return view('shops.shop_men');
});

Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/try-it', function () {
    return view('tryit');
});

Route::get('/first-service', function () {
    return view('services.first_service');
});

Route::get('/second-service', function () {
    return view('services.second_service');
});

Route::get('/blog-post', function () {
    return view('blog_post.first_blog_post');
});

Route::get('pay-with-card', [ProtectedRoutes::class, 'payWithCard']) ->name('payWithCard');

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
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/checkout1', function () {
    return view('checkout1.checkout1');
});
Route::get('/checkout2', function () {
    return view('2ndcheckout');
});

Route::get('/pagination', function () {
    return view('pagination');
});



// This route would soon be removed as its for testing purpose
Route::get('/404', function () {
    return view('errors.404');
});

// This is a permanent route and must always be the last route
Route::fallback(function () {
    return view("errors.404");
});
