<?php

use App\Http\Controllers\Api\GoogleSocialiteController;
use App\Http\Controllers\Api\AuthController;
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


Route::post('contactus/message', [App\Http\Controllers\ContactusController::class, 'store'])->name('contact.message');

Route::post('subscribe', [App\Http\Controllers\ContactusController::class, 'subscribe'])->name('subscribe');

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser'])->name('login');

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', function (Request $request) {

        return response()->json([
            'status' => true,
            'message' => 'Your name is: '.auth()->user()->name
        ], 200);
    });

    Route::post('/auth/logout', [AuthController::class, 'logout']);
});


Route::get('/product-list', [ProductController::class, 'index']);

Route::post('/add-product', [ProductController::class, 'store_product']);


Route::post('/product/edit-product/{product:id}', [ProductController::class, 'edit_product'])->name('edit_product');



