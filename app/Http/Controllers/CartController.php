<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function cartList()
    {
        try {
            $cartItems = \Cart::getContent();
            return response()->json([
                'status' => true,
                'cartItems' => $cartItems
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'An error occured: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function addToCart(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'product_id' => 'required',
                    'name' => 'string|required',
                    'price' => 'string|required',
                    'quantity' => 'string|required',
                    'imagedirectory'   => 'image|nullable|max:5120',
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 400);
            }

            \Cart::add([
                'id' => $request->product_id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'imagedirectory' => $request->image,
                )
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Product is Added to Cart Successfully !'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Unable to add to cart: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function updateCart(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'quantity' => 'required',
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'important field missing',
                    'errors' => $validateUser->errors()
                ], 400);
            }

            \Cart::update(
                $request->id,
                [
                    // 'price' => '20',
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );

            return response()->json([
                'status' => true,
                'message' => 'Product Cart is Updated Successfully !'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Unable to update cart: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function removeCart(Request $request)
    {
        try {
            \Cart::remove($request->id);
            return response()->json([
                'status' => true,
                'message' => 'Product removed from Cart'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Unable to remove product from cart: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function clearAllCart()
    {
        try {
            \Cart::clear();

            return response()->json([
                'status' => true,
                'message' => 'Cart cleared!'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Unable to remove product from cart: ' . $e->getMessage(),
            ], 500);
        }
    }
}
