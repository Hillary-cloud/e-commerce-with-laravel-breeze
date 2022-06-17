<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Auth;
class HomeController extends Controller
{
    public function index(){
        $products = Product::paginate(6);
        return view('home',compact('products'));
    }

    public function addToCart(Request $request, $id){
        $product = Product::find($id);
        $user = Auth::user();
        $cart = new Cart;
        $cart->product_title = $product->title;
        if ($product->discount_price!=null) {
            $cart->product_price = $product->discount_price * $request->quantity;
        }
        else{
            $cart->product_price = $product->price * $request->quantity;
        }
        $cart->quantity = $request->quantity;
        $cart->product_id = $product->id;
        $cart->image = $product->image;
        $cart->user_id = $user->id;
        $cart->save();
        
        return redirect()->back()->with('message','Item added to cart');
    }
    public function cart(){
        $user = Auth::user()->id;
        
        $items = Cart::where('user_id',$user)->get();
        return view('cart',compact('items'));
    }

    public function deleteCart($id){
        $cart = Cart::find($id)->delete();

        return redirect()->back()->with('message','Item has been removed from cart');
    }
}
