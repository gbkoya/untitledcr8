<?php

use App\Http\Controllers\Api\GoogleSocialiteController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/contactus/message', [App\Http\Controllers\ContactusController::class, 'store'])->name('contact.message');

Route::post('/subscribe', [App\Http\Controllers\ContactusController::class, 'subscribe'])->name('subscribe');

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser'])->name('login');

// Route::group(['middleware' => 'cors'], function () {
//     Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
//     Route::get('getData2', 'v1\MyController@getData2');
// });

Route::get('/auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']) ->middleware('cors');
Route::get('/callback/google', [GoogleSocialiteController::class, 'handleCallback']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', function (Request $request) {
        return response()->json([
            'status' => true,
            'message' => 'Your name is: '.auth()->user()->first_name
        ], 200);
    });

    Route::post('/auth/logout', [AuthController::class, 'logout']);

    // Save up cart information
    Route::post('/cart-save', [CartController::class, 'saveCart'])->name('cart.save');
    Route::post('/delivery-method', [CartController::class, 'userDelivery'])->name('user.delivery');
    Route::get('/delivery-location', [CartController::class, 'deliveryLocation'])->name('delivery.location');
});

// Product api for user
Route::get('/product-category/{product:category}', [ProductController::class, 'getProductByCategory']);
Route::get('/product-details-show/{product:id}', [ProductController::class, 'getProductById']);

Route::delete('admin/delete-product-api/{product:id}', [ProductController::class, 'deleteProductApi']) ->name('deleteProductApi');
// Product api here for admin
Route::get('/product-list', [ProductController::class, 'index']);

// Route::post('/add-product', [ProductController::class, 'store_product']);

Route::post('/store-product', [ProductController::class, 'storeProduct']);


Route::post('/product/edit-product/{product:id}', [ProductController::class, 'edit_product'])->name('edit_product');
Route::post('/product/delete-product/{product:id}', [ProductController::class, 'delete_product'])->name('delete_product');

// Cart section
Route::get('/cart-items', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove-item/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
Route::get('/clear-cart', [CartController::class, 'clearAllCart'])->name('cart.clear');

// Checkout
Route::post('/checkout2', [CartController::class, 'checkout2']);

