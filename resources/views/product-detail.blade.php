<base href="/Public">
@extends('layouts.base')
@section('content')
    {{-- <div class="container" >
            <div class="col-sm-6 col-md-4 col-lg-4" width="50%" style="margin: auto-block;">
                <div class="box">
                    
                   <div class="img-box">
                    <h3 class="text-success">{{ucfirst($product->title)}}</h3>
                      <img src="product/{{$product->image}}" alt="" style="margin: " >
                   </div>
                   <div class="detail-box">
                      <h5 class="text-success">
                           {{ucfirst($product->title)}}
                      </h5>
                      <h6 class="text-primary">
                            Category: {{ucfirst($product->category)}}
                      </h6>
                      <p>
                          Description: {{$product->description}}
                      </p>
                      @if ($product->discount_price!=null)
                        
                        <h6 class="text-danger">
                           <div>
                               Discount Price: ${{$product->discount_price}}
                           </div>
                        </h6>
                        <h6 style="text-decoration: line-through">
                            <h6>
                                Price: ${{$product->price}}
                            </h6>
                        </h6>
                      @else
                        <h6 class="text-primary">
                           Price: ${{$product->price}}
                        </h6>
                      @endif
                      <a href="" class="btn btn-primary">Add to Cart</a>
                   </div>
                </div>
             </div>
    </div> --}}

   <div class="container">
       <div class="row">
        <div class=" col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <h3 class="text-success">{{ucfirst($product->title)}}</h3>
            <img src="product/{{$product->image}}" alt=""  width="100%">
        
                <h5 class="text-success">
                     {{ucfirst($product->title)}}
                </h5>
                <h6 class="text-primary">
                      Category: {{ucfirst($product->category)}}
                </h6>
                <p>
                    Description: {{$product->description}}
                </p>
                @if ($product->discount_price!=null)
                  
                  <h6 class="text-danger">
                     <div>
                         Discount Price: ${{$product->discount_price}}
                     </div>
                  </h6>
                  <h6>
                          Price: <span style="text-decoration: line-through;">${{$product->price}}</span>
                  </h6>
                @else
                  <h6 class="text-primary">
                     Price: ${{$product->price}}
                  </h6>
                @endif
                <a href="" class="btn btn-primary">Add to Cart</a>
                </div>
   </div>
@endsection