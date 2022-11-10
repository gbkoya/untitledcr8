<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ColorCategory;
use App\Models\GenderCategory;
use App\Models\GlassCategory;
use App\Models\Product;
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
                    // 'imagedirectory'   => 'image|nullable|max:5120',
                    'product_price'     => 'required',
                    'cat_select'        => 'required',
                    'cat_name_gender'          => 'required',
                    'cat_name_size'          => 'required',
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
                // \Log::info('Client name: <br>' . $value->getClientOriginalName());

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
}
