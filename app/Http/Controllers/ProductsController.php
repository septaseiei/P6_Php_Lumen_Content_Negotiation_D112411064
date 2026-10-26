<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $posts = Post::OrderBy("id", "DESC")->paginate(10);
        return response()->json($posts, 200);
    }

    public function getExpensiveProducts()
    {
        $products = Product::where('price', '>', 10000)->get();

        return response()->json([
            "message" => "Produk dengan harga di atas 10.000",
            "results" => $products
        ], 200);
    }
}