<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function produk ()
 {
    return view ('product',[
        'pageTitle' => 'produk 1',
        'conten' => 'ini halaman product'
    ]);
 }
}
