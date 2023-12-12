<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use Illuminate\Support\Facades\Validator;



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
    $validator = Validator::make($request->all(), [
      'product' => 'required|min:4',
      'price' => 'required',
      'stock' => 'required',
      [
        'product.required' => 'Nama Product Harus diisi.',
      ]
    ]);


    $validator->validate();

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
      'pageTitle' => 'Edit Produk',
      'product' => Product::findOrFail($id)
    ]);
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'product' => 'required',
      'price' => 'required',
      'stock' => 'required'
    ]);

    Product::findOrFail($id)->update([
      'product' => $request->product,
      'price' => $request->price,
      'stock' => $request->stock
    ]);

    return redirect('/product');
  }
}
