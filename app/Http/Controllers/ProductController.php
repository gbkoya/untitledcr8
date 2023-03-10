<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Productcategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * @OA\Post(
     * path="/api/product-list",
     * operationId="getAllProducts",
     * tags={"Get All Products"},
     * summary="Show all products and then paginate",
     * description="Show all products and then paginate by 12 per request",
     *      @OA\Response(
     *          response=200,
     *          description="Product details",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Error page",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function index(Request $request)
    {
        try {
            if (
                $request->get('gender_id') != null || $request->get('shape_id') != null ||
                $request->get('color_id') != null || $request->get('size_id') != null ||
                $request->get('glass_id') != null || $request->get('search_query') != null
            ) {
                $qb = Product::query();
                $searchQuery = $request->get('search_query');
                if ($request->get('search_query')) {
                    $qb->where('name', 'LIKE', '%' . $searchQuery . '%');
                }
                if ($request->get('gender_id')) {
                    $qb->whereIn('gender_categories_id', $request->get('gender_id'));
                }
                if ($request->get('size_id')) {
                    $qb->whereIn('size_categories_id', $request->get('size_id'));
                }
                if ($request->get('shape_id')) {
                    $qb->whereIn('shape_categories_id', $request->get('shape_id'));
                }
                if ($request->get('color_id')) {
                    $qb->whereIn('color_categories_id', $request->get('color_id'));
                }
                if ($request->get('glass_id')) {
                    $qb->whereIn('glass_categories_id', $request->get('glass_id'));
                }
                $products = $qb
                    ->with(
                        'gendercategory',
                        'shapecategory',
                        'colorcategory',
                        'sizecategory',
                        'glasscategory'
                    )->with(array(
                        'productprices' => function ($query) {
                            $query->select('product_price', 'product_id');
                        },
                        'productfeatures' => function ($query) {
                            $query->select('features', 'product_id');
                        },
                        'productimages' => function ($query) {
                            $query->select('imagedirectory', 'product_id');
                        }
                    ))->select(
                        'id',
                        'name',
                        'quantityinstock',
                        'status',
                        'gender_categories_id',
                        'size_categories_id',
                        'shape_categories_id',
                        'color_categories_id',
                        'glass_categories_id',
                        'updated_at'
                    )->paginate(12);

                return response()->json([
                    'status' => true,
                    'total_count' => $products->count(),
                    'products_list' => $products
                ], 200);
            } else {
                $products = Product::with(
                    'gendercategory',
                    'shapecategory',
                    'colorcategory',
                    'sizecategory',
                    'glasscategory'
                )->with(array(
                    'productprices' => function ($query) {
                        $query->select('product_price', 'product_id');
                    },
                    'productfeatures' => function ($query) {
                        $query->select('features', 'product_id');
                    },
                    'productimages' => function ($query) {
                        $query->select('imagedirectory', 'product_id');
                    }
                ))->select(
                    'id',
                    'name',
                    'quantityinstock',
                    'status',
                    'gender_categories_id',
                    'size_categories_id',
                    'shape_categories_id',
                    'color_categories_id',
                    'glass_categories_id',
                    'updated_at'
                )->paginate(12);

                return response()->json([
                    'status' => true,
                    'total_count' => $products->count(),
                    'products_list' => $products
                ], 200);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'error' => 'Unable to get product: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Post(
     * path="/api/product-details-show/[product:id]",
     * operationId="getProductById",
     * tags={"Get product by id"},
     * summary="Show product detail",
     * description="Get the detail of a particular product. Comes with product price and features. Product ID must be passed in the url. [For the admin]",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               @OA\Property(property="product_id", type="number"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="Product details",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Error page",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function getProductById(Request $request, $id)
    {
        try {
            $product = Product::where('id', $id)
                ->with(array(
                    'productprices' => function ($query) use ($id) {
                        $query->select('id', 'product_price', 'product_id');
                    },
                    'productfeatures' => function ($query) use ($id) {
                        $query->select('id', 'features', 'product_id');
                    },
                    'productimages' => function ($query) use ($id) {
                        $query->select('id', 'imagedirectory', 'product_id');
                    }
                    // ))->select('name', 'quantityinstock', 'status', 'productcategory_id', 'id')->get();
                ))->select('name', 'quantityinstock', 'status', 'id')->get();

            return response()->json([
                'status' => true,
                'product' => $product
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
     * path="/api/product-category/[product:category]",
     * operationId="getProductByCategory",
     * tags={"Get product by category"},
     * summary="Get product by category",
     * description="Gets all products under the requested category. Product ID must be passed in the url. [For the admin]",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               @OA\Property(property="category", type="text"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="Returns product list under the selected category",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Error page",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function getProductByCategory($category)
    {
        try {
            switch ($category) {
                case 'shopmen':
                    $response_variable = 'shopmen';
                    break;
                case 'shopwomen':
                    $response_variable = 'shopwomen';
                    break;
                case 'shopkids':
                    $response_variable = 'shopkids';
                    break;
            }
            $products = Productcategory::where('category', $category)->with(['products'])->paginate(24);
            // $products = Product::where('productcategory_id', $category)->paginate(24);
            return response()->json([
                'status' => true,
                $response_variable => $products
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
     * path="/api/store-product",
     * operationId="storeProduct",
     * tags={"Store product"},
     * summary="Add a new product to the system",
     * description="Add a new product to the system.
     * Product category is 1 for men, 2 for women and 3 for kids respectively.
     * The status can only be either available or unavailable.
     * The product price, features and images are also added.<br>
     * To add 2 or more images for a product<br>
     * The image directory must be entered in this format: imagedirectory[0] imagedirectory[1]",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"name", "imagedirectory[]", "product_price", "status", "productcategory_id"},
     *               @OA\Property(property="name", type="text"),
     *               @OA\Property(property="imagedirectory[]", type="file"),
     *               @OA\Property(property="features", type="text"),
     *               @OA\Property(property="product_price", type="number"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="Returns product added message",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Error page",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function storeProduct(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'name'              => 'required',
                    'imagedirectory'   => 'image|nullable|max:5120|required',
                    'product_price'     => 'required',
                    'cat_select'        => 'required',
                    'cat_name'          => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 400);
            }

            $status = null;
            if ($request->status == "") {
                $status = 'available';
            } else {
                $status = $request->status;
            }

            $quantityinstock = null;
            if ($request->quantityinstock == "") {
                $quantityinstock = 1;
            } else {
                $quantityinstock = $request->quantityinstock;
            }

            $product = new Product();
            $product->name              = $request->name;
            $product->quantityinstock   = $quantityinstock;

            $category_select = $request->cat_select;
            foreach ($category_select as $key => $value) {
                switch ($value) {
                    case 'gendercategory':
                        $product->gender_categories_id = $request->cat_name;
                        break;
                    case 'shapecategory':
                        $product->shape_categories_id = $request->cat_name;
                        break;
                    case 'colorcategory':
                        $product->color_categories_id = $request->cat_name;
                        break;
                    case 'sizecategory':
                        $product->size_categories_id = $request->cat_name;
                        break;
                    case 'glasscategory':
                        $product->glass_categories_id = $request->cat_name;
                        break;
                }
            }


            // $product->productcategory_id    = $request->productcategory_id;
            $product->status                = $status;
            $product->save();

            $product->productprices()->create([
                'product_id' => $product->id,
                'product_price' => $request->product_price
            ]);
            $product->productfeatures()->create([
                'product_id' => $product->id,
                'features' => $request->features,
            ]);

            $file = $request->file('imagedirectory');
            foreach ($file as $key => $value) {

                if ($request->hasFile('imagedirectory')) {
                    $fileNameWithExt    = $value->getClientOriginalName();
                    $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $extension          = $value->getClientOriginalExtension();
                    $imagedirectory     = 'foremost_' . $filename . '_' . time() . '.' . $extension;
                    $img                = \Image::make($value)->encode('jpg', 30);
                    Storage::put('public/product_image/' . $imagedirectory, $img->__toString());
                } else {
                    $imagedirectory = "noimage.jpg";
                }

                if ($request->hasFile('imagedirectory')) {
                    $fileNameWithExt    = $value->getClientOriginalName();
                    $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $extension          = $value->getClientOriginalExtension();
                    $thumbnaildirectory = 'foremost_' . $filename . '_' . time() . '.' . $extension;
                    $img                = \Image::make($value)->encode('jpg', 30);
                    Storage::put('public/thumbnail_image/' . $thumbnaildirectory, $img->__toString());
                } else {
                    $thumbnaildirectory = "noimage.jpg";
                }

                $product->productimages()->create([
                    'product_id' => $product->id,
                    'imagedirectory' => $imagedirectory,
                    'thumbnaildirectory' => $thumbnaildirectory
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Product added'
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
     * path="/api/product/edit-product/[product:id]",
     * operationId="edit_product",
     * tags={"Edit product"},
     * summary="Edit existing product",
     * description="Change or edit a product. Especially the product price. Product ID must be passed in the url. [For the admin]",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"name"},
     *               @OA\Property(property="name", type="text"),
     *               @OA\Property(property="image", type="file"),
     *               @OA\Property(property="description", type="text"),
     *               @OA\Property(property="price", type="number"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="Returns product updated",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Error page",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function edit_product(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'string|nullable',
            'image' => 'string|nullable',
            'price' => 'required',
            'description' => 'string|nullable',
        ]);

        $product->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Product updated'
        ], 200);
    }

    /**
     * @OA\Post(
     * path="/api/product/delete-produc/[product:id]",
     * operationId="delete_product",
     * tags={"Delete product"},
     * summary="Delete existing product",
     * description="Remove a product from the system. Product ID must be passed in the url. [For the admin]",
     *     @OA\RequestBody(
     *         @OA\JsonContent(),
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
     *            @OA\Schema(
     *               type="object",
     *               required={"product_id"},
     *               @OA\Property(property="product_id", type="number"),
     *            ),
     *        ),
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description="Returns product updated",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Error page",
     *          @OA\JsonContent()
     *       ),
     * )
     */
    public function delete_product(Product $product)
    {
        $product->delete();

        return response()->json([
            'status' => true,
            'message' => 'Product deleted'
        ], 200);
    }


    public function deleteProductApi($product_id)
    {
        try {
            $product = Product::where('id', $product_id)->first();
            if ($product == "") {
                return response()->json([
                    'status' => true,
                    'message' => 'Product not found'
                ], 200);
            }

            $image_name = $product->productimages[0]['imagedirectory'];
            Storage::delete('public/thumbnail_image/' . $image_name);

            $product->productimages()->delete();
            $product->productfeatures()->delete();
            $product->productprices()->delete();
            $product->delete();

            return response()->json([
                'status' => true,
                'message' => 'Product deleted'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'message' => 'Unable to delete product',
                'error' => 'An error occured: ' . $e->getMessage(),
            ], 500);
        }
    }
}
