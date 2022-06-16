<base href="/public">
@extends('layouts.base')
@section('content')
<style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
</style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Products</div>
                            <div class="col-md-6 "><a class="btn btn-primary pull-right" href="{{route('admin.addProduct')}}">Add Products</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                        @php
                            use App\Models\Product;
                        @endphp
                            @if (Product::count() < 1)
                                <p class="text-danger text-center">No Product found</p>
                            
                                @else
                           
                            <table class="table table-striped table-hover">
                                <thead class="text-light bg-dark">
                                    <tr class="text-center">
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Discount Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($products as $product)
                                        
                                    <tr class="text-center">
                                        <td><img src="product/{{$product->image}}" alt="" width="50px"></td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->discount_price}}</td>
                                        <td>
                                            <a href="{{route('admin.editProduct', $product->id)}}" class="fa fa-edit fa-2x mr-1" ></a>
                                            <a href="{{route('admin.deleteProduct', $product->id)}}" class="fa fa-trash fa-2x" onclick="return confirm('You are about to delete this product')"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @endif

                        </div>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection