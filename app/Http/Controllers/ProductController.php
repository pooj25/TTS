<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'active')
            ->latest()
            ->get();

        return view('products', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();

        return view('product-details', compact('product'));
    }
}