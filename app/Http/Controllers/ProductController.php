<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return response()->json([
            'status' => true,
            'message' => 'Faker data soon...'
        ], 200);

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

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
            'message' => 'Product created'
        ], 200);
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

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

}
