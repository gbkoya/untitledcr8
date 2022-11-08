<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCrud extends Controller
{
    public function productIndex() {
        // dd('Hello Admin');

        return view('admin.product_index', [
            // 'contents' => $getPostNotViewed,
            // 'contents2' => $contents2,
            // 'categories' => $categories,
            // 'all_categories' => $all_categories,
        ]);
    }
}
