<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;


class ProductController extends Controller
{
  public function produk()
  {
    return view('product.product', [
      'pageTitle' => 'produk 1',
      'conten' => 'ini halaman product',
      'products' => Product::get()
    ]);
  }
  public function create()
  {
    return view(
      'product.create',
      [
        'title' => 'create product',


      ]

    );
  }
  public function store(Request $request)
  {
    Product::create([
      'product' => $request->product,
      'price' => $request->price,
      'stock' => $request->stock,
    ]);
    return redirect('/product');
  }

  public function destroy($id)
  {
    Product::destroy($id);

    return redirect('/product');
  }
  public function edit($id)
  {
    return view('product.edit', [
      'pagetitle' => 'Edit Product',
      'product' => Product::findOrFail($id)
    ]);
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'products' => 'required',
      'price' => 'required',
      'stock' => 'required'

    ]);

    Product::findOrFail($id)->update([
      'products' => $request->products,
      'price' => $request->price,
      'stock' => $request->stock

    ]);
    return redirect('/product');
  }
}
