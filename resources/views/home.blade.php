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
    
            <!-- slider section -->
            <section class="slider_section ">
                <div class="slider_bg_box">
                   <img src="assets/images/main-slider-1-2.jpg" alt="">
                </div>
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner">
                      <div class="carousel-item active">
                         <div class="container ">
                            <div class="row">
                               <div class="mt-2 col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                                  <div class="detail-box">
                                     <h1>
                                        <span>
                                        Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                     </h1>
                                     <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                     </p>
                                     <div class="btn-box">
                                        <a href="" class="btn1">
                                        Shop Now
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="carousel-item ">
                         <div class="container ">
                            <div class="row">
                               <div class="mt-2 col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                                  <div class="detail-box">
                                     <h1>
                                        <span>
                                        Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                     </h1>
                                     <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                     </p>
                                     <div class="btn-box">
                                        <a href="" class="btn1">
                                        Shop Now
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="carousel-item">
                         <div class="container ">
                            <div class="row">
                               <div class="mt-2 col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                                  <div class="detail-box">
                                     <h1>
                                        <span>
                                        Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                     </h1>
                                     <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                     </p>
                                     <div class="btn-box">
                                        <a href="" class="btn1">
                                        Shop Now
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="container">
                      <ol class="carousel-indicators">
                         <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                         <li data-target="#customCarousel1" data-slide-to="1"></li>
                         <li data-target="#customCarousel1" data-slide-to="2"></li>
                      </ol>
                   </div>
                </div>
             </section>
             <!-- end slider section -->
          </div>
          <!-- why section -->
          <section class="why_section layout_padding">
             <div class="container">
                <div class="heading_container heading_center">
                   <h2>
                      Why Shop With Us
                   </h2>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <div class="box ">
                         <div class="img-box">
                           <i class="fa fa-truck fa-4x"></i>
                         </div>
                         <div class="detail-box">
                            <h5>
                               Fast Delivery
                            </h5>
                            <p>
                               variations of passages of Lorem Ipsum available
                            </p>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4">
                      <div class="box ">
                         <div class="img-box">
                           <i class="fa fa-shopping-basket fa-4x"></i>
                         </div>
                         <div class="detail-box">
                            <h5>
                               Free Shiping
                            </h5>
                            <p>
                               variations of passages of Lorem Ipsum available
                            </p>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4">
                      <div class="box ">
                         <div class="img-box">
                            <i class="fa fa-4x fa-certificate"></i>
                         </div>
                         <div class="detail-box">
                            <h5>
                               Best Quality
                            </h5>
                            <p>
                               variations of passages of Lorem Ipsum available
                            </p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </section>
          <!-- end why section -->
          
          <!-- arrival section -->
          
          <!-- end arrival section -->
          
          <!-- product section -->
          <section class="product_section layout_padding">
             <div class="container">
                <div class="heading_container heading_center">
                   <h2>
                      Our <span>products</span>
                   </h2>
                </div>
                <div class="row">
                   @foreach ($products as $product)
                       
                   <div class="col-sm-6 col-md-4 col-lg-4">
                      <div class="box">
                         <div class="option_container">
                            <div class="options">
                                 <a href="" class="option1">
                                    Add To Cart
                                 </a>
                               <a href="{{route('productDetail',$product->id)}}" class="option2">
                               Buy Now
                               </a>
                            </div>
                         </div>
                         <div class="img-box">
                            <img src="product/{{$product->image}}" alt="" >
                         </div>
                         <div class="detail-box">
                            <h5>
                                 {{ucfirst($product->title)}}
                            </h5>
                            @if ($product->discount_price!=null)
                              
                              <h6 class="text-danger">
                                 <div>Discount Price</div>
                                 ${{$product->discount_price}}
                              </h6>
                              <h6 style="text-decoration: line-through">
                                 ${{$product->price}}
                              </h6>
                            @else
                              <h6 class="text-primary">
                                 ${{$product->price}}
                              </h6>
                            @endif
                         </div>
                      </div>
                   </div>
                   @endforeach
                </div>
                {{$products->links()}}
                <div class="btn-box">
                   <a href="">
                   View All products
                   </a>
                </div>
             </div>
          </section>
          <!-- end product section -->
    
          <!-- subscribe section -->
          <section class="subscribe_section">
             <div class="container-fuild">
                <div class="box">
                   <div class="row">
                      <div class="col-md-6 offset-md-3">
                         <div class="subscribe_form ">
                            <div class="heading_container heading_center">
                               <h3>Subscribe To Get Discount Offers</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <form action="">
                               <input type="email" placeholder="Enter your email">
                               <button>
                               subscribe
                               </button>
                            </form>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </section>
          <!-- end subscribe section -->
          <!-- client section -->
          <section class="client_section layout_padding">
             <div class="container">
                <div class="heading_container heading_center">
                   <h2>
                      Customer's Testimonial
                   </h2>
                </div>
                <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner">
                      <div class="carousel-item active">
                         <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                               <div class="img-box">
                                  <div class="img_box-inner">
                                     <img src="assets/images/client.jpg" alt="">
                                  </div>
                               </div>
                            </div>
                            <div class="detail-box">
                               <h5>
                                  Anna Trevor
                               </h5>
                               <h6>
                                  Customer
                               </h6>
                               <p>
                                  Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                               </p>
                            </div>
                         </div>
                      </div>
                      <div class="carousel-item">
                         <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                               <div class="img-box">
                                  <div class="img_box-inner">
                                     <img src="assets/images/client.jpg" alt="">
                                  </div>
                               </div>
                            </div>
                            <div class="detail-box">
                               <h5>
                                  Anna Trevor
                               </h5>
                               <h6>
                                  Customer
                               </h6>
                               <p>
                                  Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                               </p>
                            </div>
                         </div>
                      </div>
                      <div class="carousel-item">
                         <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                               <div class="img-box">
                                  <div class="img_box-inner">
                                     <img src="assets/images/client.jpg" alt="">
                                  </div>
                               </div>
                            </div>
                            <div class="detail-box">
                               <h5>
                                  Anna Trevor
                               </h5>
                               <h6>
                                  Customer
                               </h6>
                               <p>
                                  Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                               </p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="carousel_btn_box">
                      <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                      <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                      <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                      <span class="sr-only">Next</span>
                      </a>
                   </div>
                </div>
             </div>
          </section>
          <!-- end client section -->

@endsection