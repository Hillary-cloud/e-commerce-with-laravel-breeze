<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at','DESC')->paginate(3);
        return view('admin.product',compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.add-product',compact('categories'));
    }

    public function storeProduct(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'slug' => 'required',
            'stock_status',
            'image'=>'required',
            'category'=>'required',
            'price'=>'required',
            'quantity'=>'required',
        ]);
        $product = new Product;
        $product->title = $request->title;
        $product->slug = Str::slug($request->slug);
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->quantity = $request->quantity;
        $product->stock_status = $request->stock_status;
        $product->category = $request->category;
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imageName);
        $product->image = $imageName;
        $product->save();

        return redirect('/admin/products')->with('message','Product added successfully');
    }

    public function editProduct($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.edit-product',compact('product','categories'));
    }

    public function updateProduct(Request $request, $id){
        $product = Product::find($id);
        $product->title = $request->title;
        $product->slug = Str::slug($request->slug);
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->stock_status = $request->stock_status;
        $product->discount_price = $request->discount_price;
        $product->category = $request->category;
        $image = $request->image;
        if ($image) {
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imageName);
        $product->image = $imageName;
        }
        $product->save();

        return redirect()->back()->with('message','Product updated successfully');
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('message','Product has been deleted successfully');
    }
}
