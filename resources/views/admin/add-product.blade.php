<base href="/public">
@extends('layouts.base')
@section('content')
    
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6"><h4><b>Add Product</b></h4></div>
                            <div class="col-md-6"><a class="pull-right" href="{{route('admin.products')}}">All Products</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.storeProduct')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="form-group">
                                <label class="" for="">Product Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Product Title">
                                    @error('title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label class="" for="">Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Slug">
                                    @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="" for="">Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description">
                                    @error('description')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="" for="">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Price">
                                    @error('price')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="" for="">Discount Price</label>
                                    <input type="text" class="form-control" name="discount_price" placeholder="Discount Price">
                                  
                            </div>
                            
                            <div class="form-group">
                                <label class="" for="">Quantity</label>
                                    <input type="text" class="form-control" name="quantity" placeholder="Quantity">
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
                                    <select class="form-control" name="category" id="">
                                        <option value="">--Select--</option>
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
                                    <input type="file" class="form-control" name="image">
                                    @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <button class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection