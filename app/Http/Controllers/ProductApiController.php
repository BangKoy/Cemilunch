<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        return response()->json($products);
    }
    public function show($id)
    {
        $product = ProductModel::findOrFail($id);

        return response()->json($product);
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Membuat produk baru
        $product = ProductModel::create($validatedData);

        // Mengembalikan respons JSON dengan produk yang baru dibuat
        return response()->json($product, 201); // 201 Created
    }
}
