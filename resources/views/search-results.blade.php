  @extends('layouts.home-master')

  @section('class')
page-product grid-view @endsection

    @section('content')     

       
        <!-- MAIN -->
        <main class="site-main product-list product-grid">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="{{route('/')}}">Home </a></li>
                    <li class="active"><a href="#">Search Results  </a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                  <br><br><h1>Search Results</h1><br>
                <h3><p>{{$total}} result(s) Found</p></h3>


                    @forelse($products as $product)

                    <div class="product-item style1 col-md-3 col-md-offset-1 col-sm-6 col-xs-6 padding-0">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="{{route('shop.show',$product->slug)}}"><img src="{{productImage($product->image)}}" alt="b2" style="height: 214px; width: 214px;"></a>
                                </div>
                                @if($product->discount)
                                <span class="onsale">-{{$product->discount}}%</span>
                                @endif
                                
                            </div>
                            <div class="product-innfo">
                                <div class="product-name" style="height:60px"><a href="{{route('shop.show',$product->slug)}}" >{{substr($product->name,0,90)}}</a></div>
                                <span class="price">
                                    <ins>Rs.{{$product->new_price}}</ins>
                                    @if($product->old_price)
                                    <del>Rs.{{$product->old_price}}</del>
                                    @endif

                                </span>
                                <div class="group-btn-hover">
                                    <div class="inner">
                                        <div style="float: left;">
                                        <form action="" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="id" id="pid{{$product->id}}" value="{{$product->id}}" />
                                                        <input type="hidden" name="name" id="pn{{$product->id}}" value="{{$product->name}}" />    
                                                        <input type="hidden" id="pnp{{$product->id}}" name="price" value="{{$product->new_price}}" />
                                                        <input type="hidden" id="pqty{{$product->id}}" name="qty" value="1" />
                                                        <button type="button" id="hello{{$product->id}}" class="add-to-cart">Add to cart</button>
                                                    </form>
                                                </div>
                                                <div style="float: right;">
                                                    <form action="" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="id" id="wid{{$product->id}}" value="{{$product->id}}" />
                                                        <input type="hidden" name="name" id="wpn{{$product->id}}" value="{{$product->name}}" />
                                                        <input type="hidden" name="price" id="wnp{{$product->id}}" value="{{$product->new_price}}" />
                                                        <button type="button" id="wishlist{{$product->id}}" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></button>

                                                    </form>
                                                </div>
                                    </div>
                                </div>
                                @include('includes.addToCartAjax')
                                @include('includes.addToWishlistAjax')
                            </div>
                        </div>
                    </div>


                    @empty
                            <br><br><br>
                            <div><h2></h2></div>
                        @endforelse


                        <div class="clearfix"> </div>
                    </div>
                <div class="pull-right">
                    {{$products->appends(request()->input())->links()}}
                </div>
                <div class="clearfix"> </div>

                </div>
            </div>
            </div>

            @include('includes.recommendation')

            
            
        </main><!-- end MAIN -->
        

        @endsection