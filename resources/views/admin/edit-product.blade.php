<base href="/public">
@extends('layouts.base')
@section('content')
    
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6"><h4><b>Edit Product</b></h4></div>
                            <div class="col-md-6"><a class="pull-right" href="{{route('admin.products')}}">All Products</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.updateProduct',$product->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                        
                            <div class="form-group">
                                <label class="" for="">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$product->title}}">
                                    @error('title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="">Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{$product->slug}}">
                                    @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$product->description}}">
                                    @error('description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="">Price</label>
                                    <input type="text" class="form-control" name="price" value="{{$product->price}}">
                                    @error('price')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="">Discount Price</label>
                                    <input type="text" class="form-control" name="discount_price" value="{{$product->discount_price}}">
                              
                            </div>
                            <div class="form-group">
                                <label class="" for="">Quantity</label>
                                    <input type="text" class="form-control" name="quantity" value="{{$product->quantity}}">
                                    @error('quantity')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="">Stock Status</label>
                                    <select class="form-control" name="stock_status" id="">
                                        <option value="instock">In Stock</option>
                                        <option value="outofstock">Out of stock</option>
                                    </select>
                                    @error('stock_status')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="">Category</label>
                                    <select name="category" class="form-control" id="">
                                        <option value="{{$product->category}}">{{$product->category}}</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="">Image</label>
                                <div>
                                    <img src="product/{{$product->image}}" alt="" width="300px">
                                    <input type="file" name="image" class="form-control" value="{{$product->image}}">
                                    @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection