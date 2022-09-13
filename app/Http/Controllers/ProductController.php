<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
            'image' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Product::create(
            [
                'image'  => $request->image,
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
