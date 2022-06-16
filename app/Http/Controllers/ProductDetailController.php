<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailController extends Controller
{
    public function productDetail($id){
        $product = Product::find($id);

        return view('product-detail',compact('product'));
    }
}
