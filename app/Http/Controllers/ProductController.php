<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Productcategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return response()->json([
            'status' => true,
            'products_list' => $products
        ], 200);
    }

    public function getProductById(Request $request, $id)
    {
        // return response()->json([
        //     'status' => true,
        //     'dd' => session()->getId(),
        // ], 200);
        try {
            // $product = Product::where('id', $id)->with('productprices', 'productfeatures')->get();

            $product = Product::where('id', $id)
                ->with(array(
                    'productprices' => function ($query) use ($id) {
                        $query->select('id', 'product_price', 'product_id');
                    },
                    'productfeatures' => function ($query) use ($id) {
                        $query->select('id', 'features', 'product_id');
                    }
                ))->select('name', 'quantityinstock', 'status', 'productcategory_id', 'id')->get();

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

    /*
    public function store_product (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|nullable|max:5120',
            'price' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $fileNameWithExt    = $request->file('image')->getClientOriginalName();
            $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore    = 'foremost_'.$filename.'_'.time().'.'.$extension;
            $img                = \Image::make( $request->file('image'))->encode('jpg', 30);
            Storage::put('public/image/'.$fileNameToStore, $img->__toString());
        } else {
            $fileNameToStore = "noimage.jpg";
        }

        Product::create(
            [
                'image'  => $fileNameToStore,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
            ]
        );

        return response()->json([
            'status' => true,
            'message' => 'Product added'
        ], 200);
    }
    */

    public function storeProduct(Request $request)
    {
        try {
            $request->validate([
                'name'              => 'required',
                'imagedirectory'   => 'image|nullable|max:5120',
                'product_price'     => 'required',
            ]);

            $product = new Product();
            $product->name              = $request->name;
            $product->quantityinstock   = $request->quantityinstock;
            $product->productcategory_id = $request->productcategory_id;
            $product->status            = $request->status;
            $product->save();

            $product->productprices()->create([
                'product_id' => $product->id,
                'product_price' => $request->product_price
            ]);
            $product->productfeatures()->create([
                'product_id' => $product->id,
                'features' => $request->features,
            ]);

            if ($request->hasFile('imagedirectory')) {
                $fileNameWithExt    = $request->file('imagedirectory')->getClientOriginalName();
                $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension          = $request->file('imagedirectory')->getClientOriginalExtension();
                $imagedirectory     = 'foremost_' . $filename . '_' . time() . '.' . $extension;
                $img                = \Image::make($request->file('imagedirectory'))->encode('jpg', 30);
                Storage::put('public/product_image/' . $imagedirectory, $img->__toString());
            } else {
                $imagedirectory = "noimage.jpg";
            }

            if ($request->hasFile('imagedirectory')) {
                $fileNameWithExt    = $request->file('imagedirectory')->getClientOriginalName();
                $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension          = $request->file('imagedirectory')->getClientOriginalExtension();
                $thumbnaildirectory = 'foremost_' . $filename . '_' . time() . '.' . $extension;
                $img                = \Image::make($request->file('imagedirectory'))->encode('jpg', 30);
                Storage::put('public/thumbnail_image/' . $thumbnaildirectory, $img->__toString());
            } else {
                $thumbnaildirectory = "noimage.jpg";
            }

            $product->productimages()->create([
                'product_id' => $product->id,
                'imagedirectory' => $imagedirectory,
                'thumbnaildirectory' => $thumbnaildirectory
            ]);

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

    public function delete_product(Product $product)
    {
        $product->delete();

        return response()->json([
            'status' => true,
            'message' => 'Product deleted'
        ], 200);
    }
}
