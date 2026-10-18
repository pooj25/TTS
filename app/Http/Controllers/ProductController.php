<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::where('status', 'active')
                ->latest()
                ->get();
        } catch (\Throwable $e) {
            $products = collect([]);
        }

        return view('products', compact('products'));
    }

    public function show($slug)
    {
        try {
            $product = Product::where('slug', $slug)
                ->where('status', 'active')
                ->first();
        } catch (\Throwable $e) {
            $product = null;
        }

        if (!$product) {
            return redirect()->route('products');
        }

        return view('product-details', compact('product'));
    }
}
