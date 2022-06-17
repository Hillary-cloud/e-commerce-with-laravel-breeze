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
    @if (Session::has('message'))
    <div class="alert alert-success">
        <strong>Success: </strong> {{Session::get('message')}}
    </div>
 @endif
   <div class="container">
    <h3 class="text-success">{{ucfirst($product->title)}}</h3>
    <div class="card">
      <div class="card-shadow">
       <div class="row">
         
          <div class=" col-6 text-center">
            
            <img src="product/{{$product->image}}" alt=""  width="80%">
        </div>
       <div class="col-6 " style="padding-top: 5%">
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
                <form action="{{route('cart',$product->id)}}" method="POST">
                  @csrf
                  <input type="number" name="quantity" value="1" min="1" id="">
                  <input type="submit" value="Add To Cart">
               </form>
         </div>
        </div>
                
                </div>
   </div>
@endsection