<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ColorCategory;
use App\Models\GenderCategory;
use App\Models\GlassCategory;
use App\Models\Product;
use App\Models\Productfeatures;
use App\Models\Productprices;
use App\Models\ShapeCategory;
use App\Models\SizeCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductCrud extends Controller
{
    public function productIndex()
    {
        $gender_categories = GenderCategory::get();
        $size_categories = SizeCategory::get();
        $color_categories = ColorCategory::get();
        $shape_categories = ShapeCategory::get();
        $glass_categories = GlassCategory::get();

        return view('admin.product_index', [
            'gender_categories' => $gender_categories,
            'size_categories' => $size_categories,
            'color_categories' => $color_categories,
            'shape_categories' => $shape_categories,
            'glass_categories' => $glass_categories,
        ]);
    }

    public function storeProduct(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'name'              => 'required',
                    'product_price'     => 'required',
                    'cat_select'        => 'required',
                    'cat_name_gender'   => 'required',
                    'cat_name_size'     => 'required',
                ]
            );

            if ($validateUser->fails()) {
                return redirect()->back()->with([
                    'error' => $validateUser->errors(),
                ]);
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
                        $product->gender_categories_id = $request->cat_name_gender;
                        break;
                    case 'shapecategory':
                        $product->shape_categories_id = $request->cat_name_shape;
                        break;
                    case 'colorcategory':
                        $product->color_categories_id = $request->cat_name_color;
                        break;
                    case 'sizecategory':
                        $product->size_categories_id = $request->cat_name_size;
                        break;
                    case 'glasscategory':
                        $product->glass_categories_id = $request->cat_name_glass;
                        break;
                }
            }


            // $product->productcategory_id    = $request->productcategory_id;
            $product->status = $status;
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
                $file = $request->file('imagedirectory');
                foreach ($file as $key => $value) {
                    if ($request->hasFile('imagedirectory')) {
                        $fileNameWithExt    = $value->getClientOriginalName();
                        // $fileNameWithExt    = $request->file('imagedirectory')->getClientOriginalName();
                        $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                        $extension          = $value->getClientOriginalExtension();
                        // $extension          = $request->file('imagedirectory')->getClientOriginalExtension();
                        $imagedirectory     = 'foremost_' . $filename . '_' . time() . '.' . $extension;
                        $img                = \Image::make($value)->encode('jpg', 30);
                        // $img                = \Image::make($request->file('imagedirectory'))->encode('jpg', 30);
                        Storage::put('public/product_image/' . $imagedirectory, $img->__toString());
                    } else {
                        $imagedirectory = "noimage.jpg";
                    }

                    if ($request->hasFile('imagedirectory')) {
                        $fileNameWithExt    = $value->getClientOriginalName();
                        // $fileNameWithExt    = $request->file('imagedirectory')->getClientOriginalName();
                        $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                        $extension          = $value->getClientOriginalExtension();
                        // $extension          = $request->file('imagedirectory')->getClientOriginalExtension();
                        $thumbnaildirectory = 'foremost_' . $filename . '_' . time() . '.' . $extension;
                        $img                = \Image::make($value)->encode('jpg', 30);
                        // $img                = \Image::make($request->file('imagedirectory'))->encode('jpg', 30);
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
            }

            return redirect()->back()->with([
                'success' => 'Product added'
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'An error occured: ' . $e->getMessage());
        }
    }

    public function editProduct(Request $request, $product_id)
    {
        $product_features = Productfeatures::where('product_id', $product_id)->first(['features'])->features;
        $product_price = Productprices::where('product_id', $product_id)->first(['product_price'])->product_price;
        // $product = Product::where('id', $product_id)->get(['name','id', 'quantityinstock', 'status', 'gender_categories_id']);
        $product = Product::where('id', $product_id)->first();

        $gender_categories = GenderCategory::get();
        $size_categories = SizeCategory::get();
        $color_categories = ColorCategory::get();
        $shape_categories = ShapeCategory::get();
        $glass_categories = GlassCategory::get();
        return view('admin.product_update', [
            'product' => $product,
            'product_features' => $product_features,
            'product_price' => $product_price,
            'gender_categories' => $gender_categories,
            'size_categories' => $size_categories,
            'color_categories' => $color_categories,
            'shape_categories' => $shape_categories,
            'glass_categories' => $glass_categories,
        ]);
    }

    public function updateProduct(Request $request, $product_id)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'name'              => 'required',
                    'product_price'     => 'required',
                    'cat_select'        => 'required',
                    'cat_name_gender'          => 'required',
                    'cat_name_size'          => 'required',
                ]
            );

            if ($validateUser->fails()) {
                return redirect()->back()->with([
                    'error' => $validateUser->errors(),
                ]);
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

            $product = Product::where('id', $product_id)->first();

            $product->name              = $request->name;
            $product->quantityinstock   = $quantityinstock;

            $category_select = $request->cat_select;
            foreach ($category_select as $key => $value) {
                switch ($value) {
                    case 'gendercategory':
                        $product->gender_categories_id = $request->cat_name_gender;
                        break;
                    case 'shapecategory':
                        $product->shape_categories_id = $request->cat_name_shape;
                        break;
                    case 'colorcategory':
                        $product->color_categories_id = $request->cat_name_color;
                        break;
                    case 'sizecategory':
                        $product->size_categories_id = $request->cat_name_size;
                        break;
                    case 'glasscategory':
                        $product->glass_categories_id = $request->cat_name_glass;
                        break;
                }
            }

            $product->status = $status;
            $product->save();

            $product->productprices()->update([
                'product_id' => $product->id,
                'product_price' => $request->product_price
            ]);
            $product->productfeatures()->update([
                'product_id' => $product->id,
                'features' => $request->features,
            ]);

            if ($request->hasFile('imagedirectory')) {
                $file = $request->file('imagedirectory');
                foreach ($file as $key => $value) {
                    if ($request->hasFile('imagedirectory')) {
                        $fileNameWithExt    = $value->getClientOriginalName();
                        // $fileNameWithExt    = $request->file('imagedirectory')->getClientOriginalName();
                        $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                        $extension          = $value->getClientOriginalExtension();
                        // $extension          = $request->file('imagedirectory')->getClientOriginalExtension();
                        $imagedirectory     = 'foremost_' . $filename . '_' . time() . '.' . $extension;
                        $img                = \Image::make($value)->encode('jpg', 30);
                        // $img                = \Image::make($request->file('imagedirectory'))->encode('jpg', 30);
                        Storage::put('public/product_image/' . $imagedirectory, $img->__toString());
                    } else {
                        $imagedirectory = "noimage.jpg";
                    }

                    if ($request->hasFile('imagedirectory')) {
                        $fileNameWithExt    = $value->getClientOriginalName();
                        // $fileNameWithExt    = $request->file('imagedirectory')->getClientOriginalName();
                        $filename           = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                        $extension          = $value->getClientOriginalExtension();
                        // $extension          = $request->file('imagedirectory')->getClientOriginalExtension();
                        $thumbnaildirectory = 'foremost_' . $filename . '_' . time() . '.' . $extension;
                        $img                = \Image::make($value)->encode('jpg', 30);
                        // $img                = \Image::make($request->file('imagedirectory'))->encode('jpg', 30);
                        Storage::put('public/thumbnail_image/' . $thumbnaildirectory, $img->__toString());
                    } else {
                        $thumbnaildirectory = "noimage.jpg";
                    }

                    $product->productimages()->update([
                        'product_id' => $product->id,
                        'imagedirectory' => $imagedirectory,
                        'thumbnaildirectory' => $thumbnaildirectory
                    ]);
                }
            }

            return redirect()->back()->with([
                'success' => 'Product updated'
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'success' => 'An error occured: ' . $e->getMessage()
            ]);
        }
    }

    public function deleteProduct($product_id)
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
