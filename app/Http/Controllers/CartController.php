<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['saveCart']);
    }


    /**
     * @OA\Post(
     * path="/api/cart-save",
     * operationId="saveCart",
     * tags={"Save Cart to DB"},
     * summary="From checkout, it saves the cart info into the DB",
     * description="Once the buyer clicks on checkout, the cart info is saved <br>
     * into the DB. But the user must be logged in first to use this function, <br>
     * otherwise, he will be redirected to the homepage. <br>
     * The required user_id will be gotten once the user is logged in.",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"product_id", "price", "quantity"},
     *               @OA\Property(property="price", type="number"),
     *               @OA\Property(property="quantity", type="number"),
     *               @OA\Property(property="product_id", type="number"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="cart saved",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="validation error",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="empty cart",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="unable to save cart",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function saveCart () {
        try {
            $cartItemObject = \Cart::getContent();

            $user_id = auth()->user()->id;

            if ($cartItemObject != '') {
                foreach ($cartItemObject as $key => $item) {
                    $cartItems = [
                        'user_id' => $user_id,
                        'product_id' => $item['id'],
                        'price' => $item['price'],
                        'quantity' => $item['quantity'],
                    ];

                    $validator = Validator::make($cartItems, [
                        'user_id' => 'required',
                        'product_id' => 'required',
                        'quantity' => 'required',
                    ]);
                    if ($validator->fails()) {
                        return response()->json([
                            'status' => false,
                            'message' => 'validation error',
                            'errors' => $validator->errors()
                        ], 400);
                    }

                    $cart = new Cart();
                    $cart->user_id = $user_id;
                    $cart->product_id = $cartItems['product_id'];
                    $cart->quantity = $cartItems['quantity'];

                    try {
                        $cart->save();
                    } catch (Exception $e) {
                        return response()->json([
                            'status' => FALSE,
                            'message' => 'unable to save cart',
                            'error' => 'An error occured: ' . $e->getMessage(),
                        ], 500);
                    }

                }

            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'empty cart',
                    'error' => 'There is no item in your cart',
                ], 404);
            }
            return response()->json([
                'status' => true,
                'message' => 'cart saved',
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'An error occured: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Post(
     * path="/api/cart-items",
     * operationId="cartList",
     * tags={"Cart list"},
     * summary="Cart items",
     * description="List all the products someone have added his cart. Does not store these details in the DB, rather it stores it on the users browser",
     *      @OA\Response(
     *          response=200,
     *          description="Returns all products a user currently have in their cart",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="error: Error message",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function cartList()
    {
        try {
            $cartItemObject = \Cart::getContent();
            return response()->json([
                'status' => true,
                'cartItems' => $cartItemObject
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'An error occured: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Post(
     * path="/api/add-to-cart",
     * operationId="addToCart",
     * tags={"Add to cart"},
     * summary="Add a product to cart",
     * description="Add a product to cart. Product id needs to be passed",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"product_id","name", "price", "quantity"},
     *               @OA\Property(property="name", type="text"),
     *               @OA\Property(property="price", type="number"),
     *               @OA\Property(property="quantity", type="number"),
     *               @OA\Property(property="imagedirectory", type="file"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="Product added to cart successfully!",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Unable to add to cart: Error message",
     *          @OA\JsonContent()
     *       ),
     * )
     */
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
                    // 'imagedirectory'   => 'image|nullable|max:5120',
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
                // 'attributes' => array(
                //     'imagedirectory' => $request->image,
                // )
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Product added to cart successfully!'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Unable to add to cart: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Post(
     * path="/api/update-cart/[id]",
     * operationId="updateCart",
     * tags={"Update cart"},
     * summary="Update a product in the cart",
     * description="To update a product in the cart, you need to pass the product_id. [For the user]",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"product_id", "price", "quantity"},
     *               @OA\Property(property="price", type="number"),
     *               @OA\Property(property="quantity", type="number"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="Product cart is updated successfully!",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="important field missing: error with field names",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Unable to update cart: Error message",
     *          @OA\JsonContent()
     *       ),
     * )
     */
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
                    'price' => $request->price,
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );

            return response()->json([
                'status' => true,
                'message' => 'Product cart is updated successfully!'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Unable to update cart: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Post(
     * path="/api/remove-item/[id]",
     * operationId="removeCart",
     * tags={"Remove cart"},
     * summary="Remove an existing product from the cart",
     * description="User removes a previously added product from his cart, you need to pass the product_id. [For the user]",
     *      @OA\Response(
     *          response=200,
     *          description="Product removed from cart",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Unable to remove product from cart: Error message",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function removeCart(Request $request)
    {
        try {
            \Cart::remove($request->id);
            return response()->json([
                'status' => true,
                'message' => 'Product removed from cart'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Unable to remove product from cart: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Post(
     * path="/api/clear-cart",
     * operationId="clearAllCart",
     * tags={"Clear buyer cart"},
     * summary="Remove all existing product from buyer cart",
     * description="Remove / clear all the product a user previously added to his cart. [For the user]",
     *      @OA\Response(
     *          response=200,
     *          description="Cart cleared!",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Unable to clear cart: Error message",
     *          @OA\JsonContent()
     *       ),
     * )
     */
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
                'error' => 'Unable to clear cart: ' . $e->getMessage(),
            ], 500);
        }
    }


    /**
     * @OA\Post(
     * path="/api/checkout2",
     * operationId="checkout2",
     * tags={"Cart checkout 2"},
     * summary="Register the buyer once they enter their email",
     * description="Register buyer with the email and give them a default password, which can
     * be changed later. <br>The address added to too which can later be more than 1",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"address", "phone_number", "email"},
     *               @OA\Property(property="address", type="text"),
     *               @OA\Property(property="phone_number", type="text"),
     *               @OA\Property(property="email", type="text"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="Delivery location saved and user added to system",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Error occured: _error_message_",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function checkout2(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'address' => 'required',
                    'phone_number' => 'required',
                    'email' => 'required|email|unique:users,email',
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'important field missing',
                    'errors' => $validateUser->errors()
                ], 400);
            }


            // Create new user with the provided email and a default password
            $user = new User();
            $user->email = $request->email;
            $user->phone_number = $request->phone_number;
            $user->password = "testpassword";
            $user->save();

            // Login the new user and remember token true
            Auth::login($user, true);

            // Add the user address as the user is being registered
            $user->useraddress()->create([
                'user_id' => $user->id,
                'user_address' => $request->address
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Delivery location saved and user added to system'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Error occured: ' . $e->getMessage(),
            ], 500);
        }
    }
}
