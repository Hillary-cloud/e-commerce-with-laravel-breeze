<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index(){

        $categories = Category::orderBy('created_at', 'DESC')->paginate(4);
        return view('admin.category',compact('categories'));
    }

    public function create(){
        return view('admin.add-category');
    }

    public function storeCategory(Request $request){
        $this->validate($request,[
            'category_name' => 'required',
            'slug' => 'required|unique:categories',
        ]);
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->slug);
        $category->save();
        
        return redirect()->back()->with('message','Category added successfully');
    }

    public function editCategory($id){
       $category = Category::find($id);
        return view('admin.edit-category',compact('category'));

    }

    public function updateCategory(Request $request, $id){
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->slug);
        $category->save();

        return redirect()->back()->with('message','Category updated successfully');
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();

        return redirect()->back()->with('message','Category removed successfully');
    }
}
