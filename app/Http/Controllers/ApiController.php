<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index_product()
    {
        $product = Product::get();
        return response()->json($product);
    }

    public function product_store(Request $request)
    {
        Product::insert([
            'product' => $request->api_product,
            'price' => $request->api_price,
            'stock' => $request->api_stock
        ]);

        $response = array(
            'responseCode' => '00',
            'responseStatus' => 'Success'
        );

        return response()->json($response);
    }

    public function product_by_id($id)
    {
        $product = Product::where('id', $id)->get();
        return response()->json($product);
    }

    public function product_delete_by_id($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'message' => 'Product tidak ditemukan'
            ], 404);
        }

        $product->delete();

        return response()->json([
            'message' => 'Product berhasil dihapus'
        ], 200);
    }
}
