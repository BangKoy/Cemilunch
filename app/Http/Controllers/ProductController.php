<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductModel;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = ProductModel::all();
        return view('home', ['products' => $products]);
        // return view ('home', compact($products))

    }

    public function show($id)
    {
        $product = ProductModel::find($id);

        return view('product', ['product' => $product]);
        // return view ('home', compact($products))

    }
}
