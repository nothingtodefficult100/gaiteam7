@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@php
 $featured=DB::table('products')->where('status',1)->orderBy('id','desc')->limit(24)->get();
 $trend=DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(24)->get();

 $hot=DB::table('products')->join('brands','products.brand_id','brands.id')->select('brands.brand_name','products.*')->where('products.status',1)->where('hot_deal',1)->orderBy('id','desc')->limit(4)->get();
@endphp
    <!-- Characteristics -->
    <div class="characteristics">
        <div class="container">
            <div class="row">
                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('frontend/images/char_1.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Delivery Charge </div>
                            <div class="char_subtitle">Only ৳50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('frontend/images/char_2.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Unlimited Account</div>
                            <div class="char_subtitle"></div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('frontend/images/char_3.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Unlimited Offer </div>
                            <div class="char_subtitle">Use Cupon</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('frontend/images/char_4.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">For Help </div>
                            <div class="char_subtitle">+880 1900000000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->

    <div class="deals_featured">
        <div class="container">
            <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Deals -->

                    <div class="deals">
                        <div class="deals_title">Deals of the Week</div>
                        <div class="deals_slider_container">

                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">
                            @foreach($hot as $ht)
                                <!-- Deals Item -->
                                <div class="owl-item deals_item">
                                    <div class="deals_image"><img src="{{ asset($ht->image_one) }}" style="width: 140px;"></div>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category"><a href="#">{{ $ht->brand_name }}</a></div>
                                            @if($ht->discount_price == NULL)
                                            @else
                                            <div class="deals_item_price_a ml-auto">৳ {{ $ht->selling_price }}</div>
                                            @endif

                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_name">{{ $ht->product_name }}</div>
                                            @if($ht->discount_price == NULL)
                                              <div class="deals_item_price ml-auto">৳ {{ $ht->selling_price }}</div>
                                            @else
                                            @endif
                                            @if($ht->discount_price != NULL)
                                              <div class="deals_item_price ml-auto">৳ {{ $ht->discount_price }}</div>
                                            @else
                                            @endif

                                        </div>
                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">Available: <span>{{ $ht->product_quantity }}</span></div>
                                            </div>
                                            <div class="available_bar"><span style="width:17%"></span></div>
                                        </div>
                                        <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                            <div class="deals_timer_title_container">
                                                <div class="deals_timer_title">Hurry Up</div>
                                                <div class="deals_timer_subtitle">Offer ends in:</div>
                                            </div>
                                            <div class="deals_timer_content ml-auto">
                                                <div class="deals_timer_box clearfix" data-target-time="">
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                        <span>hours</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                        <span>mins</span>
                                                    </div>
                                                    <div class="deals_timer_unit">
                                                        <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                        <span>secs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               @endforeach


                            </div>

                        </div>

                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </div>
                            <div class="deals_slider_next deals_slider_nav">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix" >
                                    <li class="active">New Featured</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <!-- Product Panel -->
                            <div class="product_panel panel active" >
                                <div class="featured_slider slider">
                                   @foreach($featured as $row)
                                    <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{ asset($row->image_one) }}" style="height: 120px; width: 130px;"></div>
                                            <div class="product_content">
                                            @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ৳{{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">৳{{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif
                                                <div class="product_name"><div><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">
                                                    {{ $row->product_name }}
                                                </a></div></div>



                                              {{--   <div class="product_extras">
                                                    <button class="product_cart_button addcart" data-id="{{ $row->id }}">Add to Cart</button>
                                                </div> --}}

                                                  <div class="product_extras">
                                                    <button id="{{ $row->id }}" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>

                                                </div>




                                            </div>
                                             <button
                                               class="addwishlist" data-id="{{ $row->id }}">
                                               <div class="product_fav">
                                                  <i class="fa fa-heart text-info"></i>
                                               </div>
                                            </button>
                                            <ul class="product_marks">
                                                 @if($row->discount_price == NULL)
                                                 <li class="product_mark product_discount" style="background: green;">NEW</li>

                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp
                                                 <li class="product_mark product_discount">

                                               {{ intval($discount) }}%
                                                </li>
                                                 @endif


                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular Categories -->

@php
 $category=DB::table('categories')->get();
@endphp
    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Popular Categories</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i class="fa fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i class="fa fa-angle-right ml-auto"></i></div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">
                           @foreach($category as $row)
                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ asset('frontend/images/popular_1.png') }}" alt=""></div>
                                    <div class="popular_category_text">{{ $row->category_name}}</div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->
@php
    $mid=DB::table('products')->join('categories','products.category_id','categories.id')
        ->join('brands','products.brand_id','brands.id')->select('products.*','brands.brand_name','categories.category_name')->where('products.mid_slider',1)->orderBy('id','DESC')->limit(4)->get();
@endphp
    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url({{ asset('frontend/images/banner_2_background.jpg') }})"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->
        <div class="owl-carousel owl-theme banner_2_slider">
            @foreach($mid as $row)
                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">{{ $row->category_name }}</div>
                                        <div class="banner_2_title">{{ $row->product_name }}</div>
                                        <div class="banner_2_text">{{ $row->brand_name }} <br>Product Id: {{ $row->product_code }}.</div>
                                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="{{ asset($row->image_one) }}" style="height: 300px; width: 320px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach


            </div>
        </div>
    </div>

    <!-- Hot New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">New Trend</div>
                            <ul class="clearfix">
                                <li class="active"></li>

                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">
                                @foreach($trend as $row)
                                        <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($row->image_one) }}" style="height: 120px; width: 130px;"></div>
                                            <div class="product_content">
                                            @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif
                                                <div class="product_name"><div><a href="#">
                                                    {{ $row->product_name }}
                                                </a></div></div>
                                                <div class="product_extras">
                                                    <button id="{{ $row->id }}" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                                </div>
                                            </div>
                                             <button
                                               class="addwishlist" data-id="{{ $row->id }}">
                                               <div class="product_fav">
                                                  <i class="fa fa-heart text-info"></i>
                                               </div>
                                            </button>
                                            <ul class="product_marks">
                                                 @if($row->discount_price == NULL)
                                                 <li class="product_mark product_discount" style="background: green;">Trend</li>

                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp
                                                 <li class="product_mark product_discount">

                                               {{ intval($discount) }}%
                                                </li>
                                                 @endif


                                            </ul>
                                        </div>
                                    </div>
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<!--first category--->
{{-- ->skip(5) --}}
@php
$cats=DB::table('categories')->first();
$category_id=$cats->id;

$products=DB::table('products')->where('category_id',$category_id)->where('status',1)->limit(16)->orderBy('id','DESC')->get();

@endphp
    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">{{ $cats->category_name }}</div>
                            <ul class="clearfix">
                                <li class="active"></li>

                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">
                                @foreach($products as $row)
                                        <!-- Slider Item -->
                                    <div class="featured_slider_item">
                                        <div class="border_active"></div>
                                        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($row->image_one) }}" style="height: 120px; width: 130px;"></div>
                                            <div class="product_content">
                                            @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif
                                                <div class="product_name"><div><a href="#">
                                                    {{ $row->product_name }}
                                                </a></div></div>
                                                <div class="product_extras">
                                                    <button id="{{ $row->id }}" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                                </div>
                                            </div>
                                             <button
                                               class="addwishlist" data-id="{{ $row->id }}">
                                               <div class="product_fav">
                                                  <i class="fa fa-heart text-info"></i>
                                               </div>
                                            </button>
                                            <ul class="product_marks">
                                                 @if($row->discount_price == NULL)
                                                 <li class="product_mark product_discount" style="background: blue;">New</li>

                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp
                                                 <li class="product_mark product_discount">

                                               {{ intval($discount) }}%
                                                </li>
                                                 @endif


                                            </ul>
                                        </div>
                                    </div>
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Adverts -->

    <div class="adverts">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 advert_col">

                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2018</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
                        </div>
                        <div class="ml-auto"><div class="advert_image"><img src="{{ asset('frontend/images/adv_1.png') }}" alt=""></div></div>
                    </div>
                </div>

                <div class="col-lg-4 advert_col">

                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_subtitle">Trends 2018</div>
                            <div class="advert_title_2"><a href="#">Sale -45%</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto"><div class="advert_image"><img src="{{ asset('frontend/images/adv_1.png') }}" alt=""></div></div>
                    </div>
                </div>

                <div class="col-lg-4 advert_col">

                    <!-- Advert Item -->

                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#">Trends 2018</a></div>
                            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                        </div>
                        <div class="ml-auto"><div class="advert_image"><img src="{{ asset('frontend/images/adv_1.png') }}" alt=""></div></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Trends -->

    <div class="trends">
        <div class="trends_background" style="background-image:url({{ asset('frontend/images/trends_background.jpg') }})"></div>
        <div class="trends_overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title">Buy One Get One</h2>
                        <div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
                        <div class="trends_slider_nav">
                            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>
@php
 $buyget=DB::table('products')->where('status',1)->where('buyone_getone',1)->orderBy('id','desc')->limit(12)->get();
@endphp
                <!-- Trends Slider -->
                <div class="col-lg-9">
                    <div class="trends_slider_container">

                        <!-- Trends Slider -->

                        <div class="owl-carousel owl-theme trends_slider">
                        @foreach($buyget as $row)
                            <!-- Trends Slider Item -->
                            <div class="owl-item">
                                <div class="trends_item is_new">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($row->image_one) }}" style="height: 220px;"></div>
                                    <div class="trends_content">

                                        <div class="trends_info clearfix">
                                            <div class="trends_name"><a href="#">{{ $row->product_name }}</a></div><br>
                                            {{-- <div class="trends_price">$379</div> --}}
                                            @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif

                                        </div>

                                    </div>
                                    <ul class="trends_marks">
                                        {{-- <li class="trends_mark trends_discount">-25%</li> --}}
                                         @if($row->discount_price == NULL)
                                                 <li class="product_mark product_discount" style="background: blue;">New</li>
                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp
                                                 <li class="product_mark product_discount">

                                               {{ intval($discount) }}%
                                                </li>
                                        @endif

                                        <li class="trends_mark trends_new">Extra One</li>
                                    </ul>

                                     <button  class="addwishlist" data-id="{{ $row->id }}">
                                       <div class="trends_fav"><i class="fa fa-heart text-danger"></i></div>
                                    </button>

                                    <div>
                                        <button id="{{ $row->id }}" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button>
                                    </div>


                                </div>
                            </div>
                           @endforeach

{{--  <button id="{{ $row->id }}" class="product_cart_button addcart" data-toggle="modal" data-target="#cartmodal"  onclick="productview(this.id)">Add to Cart</button> --}}


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Reviews -->

    {{-- <div class="reviews">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="reviews_title_container">
                        <h3 class="reviews_title">Latest Reviews</h3>
                        <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
                    </div>

                    <div class="reviews_slider_container">

                        <!-- Reviews Slider -->
                        <div class="owl-carousel owl-theme reviews_slider">

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Roberto Sanchez</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Brandon Flowers</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Emilia Clarke</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Roberto Sanchez</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Brandon Flowers</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews Slider Item -->
                            <div class="owl-item">
                                <div class="review d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="review_image"><img src="{{ asset('public/frontend/images/review_1.jpg') }}" alt=""></div></div>
                                    <div class="review_content">
                                        <div class="review_name">Emilia Clarke</div>
                                        <div class="review_rating_container">
                                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="review_time">2 day ago</div>
                                        </div>
                                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="reviews_dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- Brands -->

    {{-- <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">

                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('public/frontend/images/brands_1.jpg') }}" alt=""></div></div>

                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="{{ asset('frontend/images/send.png') }}" alt=""></div>
                            <div class="newsletter_title">Sign up for Newsletter</div>
                            <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="{{ route('store.newslater') }}" class="newsletter_form" method="post">
                                @csrf
                                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address" name="email">
                                <button class="newsletter_button" type="submit">Subscribe</button>
                            </form>
                            <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--product cart add modal-->

<!-- Modal -->
<div class="modal fade " id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Product Short Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
          <div class="col-md-4">
              <div class="card" style="width: 16rem;">
              <img src="" class="card-img-top" id="pimage" style="height: 240px;">
              <div class="card-body">

              </div>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
              <ul class="list-group">
                <li class="list-group-item"> <h5 class="card-title" id="pname"></h5></span></li>
             <li class="list-group-item">Product code: <span id="pcode"> </span></li>
              <li class="list-group-item">Category:  <span id="pcat"> </span></li>
              <li class="list-group-item">SubCategory:  <span id="psubcat"> </span></li>
              <li class="list-group-item">Brand: <span id="pbrand"> </span></li>
              <li class="list-group-item">Stock: <span class="badge " style="background: green; color:white;">Available</span></li>
            </ul>
          </div>
          <div class="col-md-4 ">
              <form action="{{ route('insert.into.cart') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" id="product_id">
                <div class="form-group" id="colordiv">
                  <label for="">Color</label>
                  <select name="color" class="form-control">
                  </select>
                </div>
                 <div class="form-group" id="sizediv" >
                  <label for="exampleInputEmail1">Size</label>
                  <select name="size" class="form-control" id="size">
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Quantity</label>
                  <input type="number" class="form-control" value="1" name="qty">
                </div>
                <button type="submit" class="btn btn-primary">Add To Cart</button>
              </form>
           </div>
         </div>
      </div>
    </div>
  </div>
</div>

<!--modal end-->

<script type="text/javascript">
    function productview(id){
          $.ajax({
                     url: "{{  url('/cart/product/view/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                       $('#pname').text(data.product.product_name);
                       $('#pimage').attr('src',data.product.image_one);
                       $('#pcat').text(data.product.category_name);
                       $('#psubcat').text(data.product.subcategory_name);
                       $('#pbrand').text(data.product.brand_name);
                       $('#pcode').text(data.product.product_code);
                       $('#product_id').val(data.product.id);

                        var d =$('select[name="size"]').empty();
                         $.each(data.size, function(key, value){
                             $('select[name="size"]').append('<option value="'+ value +'">' + value + '</option>');
                              if (data.size == "") {
                                     $('#sizediv').hide();
                              }else{
                                    $('#sizediv').show();
                              }
                         });

                        var d =$('select[name="color"]').empty();
                         $.each(data.color, function(key, value){
                             $('select[name="color"]').append('<option value="'+ value +'">' + value + '</option>');
                               if (data.color == "") {
                                     $('#colordiv').hide();
                              } else{
                                   $('#colordiv').show();
                              }
                         });
             }
      })
    }
</script>



<script type="text/javascript">
      $(document).ready(function() {
            $('.addwishlist').on('click', function(){
              var id = $(this).data('id');
              if(id) {
                 $.ajax({
                     url: "{{  url('/add/wishlist/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                       const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }

                     },

                 });
             } else {
                 alert('danger');
             }
              e.preventDefault();
         });
     });

</script>


@endsection
