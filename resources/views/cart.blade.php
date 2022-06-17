<base href="/public">
@extends('layouts.base')
@section('content')
    <div class="container" style="padding: 30px 0">
        @if (Session::has('message'))
        <div class="alert alert-success">
            <strong>Success: </strong> {{Session::get('message')}}
        </div>
     @endif
        <div class="d-none" >
            <table>
                <thead>
        
                    <tr>
                        
                            <td><div class="col-2 text-center">Image</div></td>
                            <td><div class="col-2 text-center">Product</div></td>
                            <td><div class="col-2 text-center">Quantity</div></td>
                            <td><div class="col-2 text-center">Price</div></td>
                        
                    </tr>
    
                </thead>
                @php
                    $total_price = 0
                @endphp
                @foreach ($items as $item)
                    
                <tbody>
                    
                    <tr>
                        
                            <td><div class="col-2 text-center"style="padding-top: 2%"><img src="product/{{$item->image}}" alt="" width="100px"></div></td>
                            <td><div class="col-2 text-center" style="padding-top: 5%"><strong>{{ucfirst($item->product_title)}}</strong></div></td>
                            <td><div class="col-2 text-center"style="padding-top: 5%">{{$item->quantity}}</div></td>
                            <td><div class="col-2 text-center"style="padding-top: 5%">{{$item->product_price}}</div></td>
                        
                    </tr>
                
                </tbody>

                @endforeach
            </table>
        </div>
        @php
        echo $total_price = $total_price + $item->product_price
     @endphp


        <h4>Products</h4>
        <div class="row text-light bg-dark">
            <div class="col-2 text-center">Image</div>
            <div class="col-2 text-center">Product</div>
            <div class="col-2 text-center">Quantity</div>
            <div class="col-2 text-center">Price</div>
        </div>
        
        @foreach ($items as $item)
            
        <div class="row">
            <div class="col-2 text-center"style="padding-top: 2%"><img src="product/{{$item->image}}" alt="" width="100px"></div>
            <div class="col-2 text-center" style="padding-top: 5%"><strong>{{ucfirst($item->product_title)}}</strong></div>
            <div class="col-2 text-center"style="padding-top: 5%">{{$item->quantity}}</div>
            <div class="col-2 text-center"style="padding-top: 5%">${{$item->product_price}}</div>
            <div class="col-2 text-center"style="padding-top: 5%"><a href="{{route('deleteCart',$item->id)}}" onclick="return confirm('You are about to remove this item from cart')" class="btn btn-danger">Remove</a></div>
        </div><hr class="text-dark">
        @endforeach
        <h4><strong>Total: $
       
        </strong></h4>
    </div>
@endsection