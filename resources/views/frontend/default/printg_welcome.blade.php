@extends('frontend.default.layouts.app')

@section('styles')
<link rel="stylesheet" href="{{asset(asset_path('frontend/default/css/page_css/welcome.css'))}}" />
@endsection
@section('share_meta')
  @php
      $tags = str_replace(',', ' ',app('general_setting')->meta_tags);
  @endphp
<meta name="keywords" content="{{$tags}}">
<meta name="description" content="{{app('general_setting')->meta_description}}">
<link rel="canonical" href="{{url()->current()}}"/>
@endsection

@section('content')
@include('frontend.default.partials._mega_menu')

<section class="core-features two pt-120 pb-120">
  <div class="container">
      <div class="row mt--30 justify-content-center">
          <div class="col-xxl-3 col-md-3 col-10 mt-30 wow fadeInUp animated " data-wow-delay="0.2s">
              <div class="core-features-two__box d-flex ms-0">
                  <div class="icon"> <img src="{{ asset(asset_path('assets/images/icons/f-icon-1.png')) }}" alt=""> </div>
                  <div class="core-features-two__box-content"> <a href="/login" class="d-block">
                          <h4> Secure Payment </h4>
                      </a> <a href="/login" class="more-info-btn"> <span> More Info </span> <i
                              class="flaticon-next"></i> </a> </div>
              </div>
          </div>
          <div class="col-xxl-3 col-md-3 col-10 mt-30 wow fadeInUp animated " data-wow-delay="0.3s">
              <div class="core-features-two__box d-flex ">
                  <div class="icon"> <img src="{{ asset(asset_path('assets/images/icons/f-icon-2.png')) }}" alt=""> </div>
                  <div class="core-features-two__box-content"> <a href="/login" class="d-block">
                          <h4> 27/7 Fast Delivery </h4>
                      </a> <a href="/login" class="more-info-btn"> <span> More Info </span> <i
                              class="flaticon-next"></i> </a> </div>
              </div>
          </div>
          <div class="col-xxl-3 col-md-3 col-10 mt-30 wow fadeInUp animated " data-wow-delay="0.4s">
              <div class="core-features-two__box d-flex ">
                  <div class="icon"> <img src="{{ asset(asset_path('assets/images/icons/f-icon-3.png')) }}" alt=""> </div>
                  <div class="core-features-two__box-content"> <a href="/login" class="d-block">
                          <h4> Return & Refund </h4>
                      </a> <a href="/login" class="more-info-btn"> <span> More Info </span> <i
                              class="flaticon-next"></i> </a> </div>
              </div>
          </div>
          <div class="col-xxl-3 col-md-3 col-10 mt-30 wow fadeInUp animated " data-wow-delay="0.5s">
              <div class="core-features-two__box d-flex me-0">
                  <div class="icon"> <img src="{{ asset(asset_path('assets/images/icons/f-icon-4.png')) }}" alt=""> </div>
                  <div class="core-features-two__box-content"> <a href="/login" class="d-block">
                          <h4> Quality Support </h4>
                      </a> <a href="/login" class="more-info-btn"> <span> More Info </span> <i
                              class="flaticon-next"></i> </a> </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="best_product_list mt_40">
  @php
      $best_deal = $widgets->where('section_name','best_deals')->first();

  @endphp
  <div class="container">
    <div class="row">
      <div id="best_deals" class="{{$best_deal->column_size}} {{$best_deal->status == 0?'d-none':''}}">
        <div class="row align-items-center">
          <div class="col-lg-6 text-lg-start text-left">
              <div class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <p>Deals On Us </p>
                  <h2>Best Deals For You</h2>
              </div>
          </div>
          <div class="col-lg-6 text-lg-end text-center">
              <a href="/category/top_picks?item=product" class="section-headerbtn btn--primary">
                  View All Products 
              </a>
          </div>
        </div>
        <div class="best_product_list_iner p_30 bg-white">
          {{-- <div class="product_list_tittle">
            <h5 id="best_deals_title">{{$best_deal->title}}</h5>
            <a href="{{route('frontend.category-product',['slug' =>  ($best_deal->section_name), 'item' =>'product'])}}" class="product_btn">{{ __('common.view_all') }}</a>

          </div> --}}
          <div class="best_product_slider product_slider_1 owl-carousel">
            @foreach($best_deal->getProductByQuery() as $key => $product)
            <div class="single_best_product_list product_tricker">
              <a href="{{singleProductURL($product->seller->slug, $product->slug)}}"  class="product_img">
                <img @if ($product->thum_img != null) src="{{showImage($product->thum_img)}}" @else src="{{showImage($product->product->thumbnail_image_source)}}" @endif alt="#" class="img-fluid" />
              </a>
              <div class="product_text d-flex justify-content-between">
                <div class="product_text_iner">
                  <a href="{{singleProductURL($product->seller->slug, $product->slug)}}"><h5>@if($product->product_name != null) {{ \Illuminate\Support\Str::limit(@$product->product_name, 15, $end='...') }} @else {{ \Illuminate\Support\Str::limit(@$product->product->product_name, 15, $end='...') }} @endif</h5></a>
                  <p>
                    @if($product->hasDeal)
                      {{single_price(selling_price(@$product->skus->first()->selling_price,$product->hasDeal->discount_type,$product->hasDeal->discount))}}
                    @else
                      @if($product->hasDiscount == 'yes')
                      {{single_price(selling_price(@$product->skus->first()->selling_price,$product->discount_type,$product->discount))}}
                      @else
                      {{single_price(@$product->skus->first()->selling_price)}}
                      @endif

                    @endif
                  </p>

                </div>
                @if($product->hasDeal)
                  @if($product->hasDeal->discount >0)
                    <span class="product_btn">

                      @if($product->hasDeal->discount_type ==0)
                        {{$product->hasDeal->discount}} % off
                      @else
                      {{single_price($product->hasDeal->discount)}} off
                      @endif


                    </span>
                  @endif
                @else

                  @if($product->hasDiscount == 'yes')

                    @if($product->discount >0)
                      <span class="product_btn">

                        @if($product->discount_type ==0)
                          {{$product->discount}} % off
                        @else
                        {{single_price($product->discount)}} off
                        @endif


                      </span>
                    @endif
                  @endif
                @endif
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="video-one pt-120 pb-120">
  <div class="container">
      <div class="row align-items-center justify-content-between flex-lg-row flex-column-reverse mt--30">
          <div class="col-lg-6 mt-30">
              <!--Start Video One Img-->
              <div class="video-one__img wow fadeInLeft animated">
                  <div class="video-one__img-inner"> <img src="{{ asset('assets/images/blog/blog-v2-2.jpeg') }}"
                          alt="" />
                      <div class="icon wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                          <a class="video-popup" title="Video Gallery"
                              href="https://www.youtube.com/watch?v=4DCTTrGjGU4"> <i class="flaticon-play"></i>
                          </a> </div>
                  </div>
              </div>
              <!--End Video One Img-->
          </div>
          <div class="col-lg-6 mt-30 ">
              <!--Start Video One Content-->
              <div class="video-one__content">
                  <div class="section-header wow fadeInUp animated">
                      <p>PrintGaraun Core Value</p>
                      <h2 class="t40">Live Art, Smooth Comfort Beautiful Everything</h2>
                  </div>
                  <div class="video-one__content-list pt-2 wow fadeInUp animated">
                      <ul>
                          <li> Super Easy To Maintenance Everything </li>
                          <li> Luxurious Living Feeling For All </li>
                          <li> Extra Comfort For Art </li>
                          <li> Scenic View at your Home </li>
                      </ul>
                  </div>
                  <div class="btn-box"> <a href="" class="btn--primary">Start
                          Shopping</a> </div>
              </div>
              <!--End Video One Content-->
          </div>
      </div>
  </div>
</section>
<!--End Video One-->
<!-- newsLetter-one style-two Start -->
<section class="newsLetter-one style-two pt-120 pb-120">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp animated">
              <div class="newsLetter-one__content-box d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated"
                  data-wow-delay="0.1s">
                  <div class="thumb"> <img src="assets/images/home-two/envalop.png" alt=""> </div>
                  <h3 class="t36"> <span>Sign Up For </span> Newsletter </h3>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp animated">
              <div class="newsLetter-one__content-box d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated "
                  data-wow-delay="0.2s">
                  <h6 class="text-md-start text-center"> Subscribe to ours weekly newsletter for all the
                      latest updates </h6>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp animated">
              <div class="newsLetter-one__content-box three d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated"
                  data-wow-delay="0.3s">
                  <form action="#0" class="form">
                      <div class="newsLetter-one__subscribe-box"> <input type="email"
                              placeholder="Email address" name="email"> <button type="submit"
                              class="subscrib-btn"> Subscribe </button> </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section> 
<!-- newsLetter-one style-two End -->
<!--Start Blog Two-->
<section class="blog-two pt-120 pb-120">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="section-header text-center wow fadeInUp animated">
                  <p>Weekend Updates</p>
                  <h2>Latest Posts </h2>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <!--Start Blog Two Single-->
          <div class="col-lg-4 col-md-6 wow fadeInUp animated ">
              <div class="blog-two__single mt-30"> 
                  <a href="" class="blog-two__single-img">
                      <img src="{{ asset('assets/images/blog/blog-v2-1.jpeg') }}" alt="" /> 
                  </a>
                  <div class="blog-two__single-content pt-1">
                      <div class="meta-box">
                          <ul>
                              <li>Vendora Style</li>
                              <li>May 30, 2022</li>
                          </ul>
                      </div>
                      <h5><a href=""> Perfect Drawing Room Identify Whole House.</a></h5>
                      <div class="btn-box"> <a href="">Read More</a> </div>
                  </div>
              </div>
          </div>
          <!--End Blog Two Single-->
          <!--Start Blog Two Single-->
          <div class="col-lg-4 col-md-6 wow fadeInUp animated">
              <div class="blog-two__single mt-30"> <a href="" class="blog-two__single-img">
                      <img src="{{ asset('assets/images/blog/blog-v2-2.jpeg') }}" alt="" /> </a>
                  <div class="blog-two__single-content pt-1">
                      <div class="meta-box">
                          <ul>
                              <li>Vendora Style</li>
                              <li>Jun 21, 2022</li>
                          </ul>
                      </div>
                      <h5><a href=""> It’s Time to Fall Love with Our Decor Items.</a></h5>
                      <div class="btn-box"> <a href="">Read More</a> </div>
                  </div>
              </div>
          </div>
          <!--End Blog Two Single-->
          <!--Start Blog Two Single-->
          <div class="col-lg-4 col-md-6 wow fadeInUp animated">
              <div class="blog-two__single mt-30"> <a href="" class="blog-two__single-img">
                      <img src="{{ asset('assets/images/blog/blog-v2-3.jpeg') }}" alt="" /> </a>
                  <div class="blog-two__single-content  pt-1">
                      <div class="meta-box">
                          <ul>
                              <li>Vendora Style</li>
                              <li>July 21, 2022</li>
                          </ul>
                      </div>
                      <h5><a href="">Exterior ideas: 10 colored garden seats. </a></h5>
                      <div class="btn-box"> <a href="">Read More</a> </div>
                  </div>
              </div>
          </div>
          <!--End Blog Two Single-->
      </div>
  </div>
</section>
<!--End Blog Two-->

<section class="all_product mt_40 py-5">
  @php
      $more_products = $widgets->where('section_name','more_products')->first();

  @endphp
  <div class="container">
    <div class="row dataApp">
      <div id="more_products" class="{{$more_products->column_size}} {{$more_products->status == 0?'d-none':''}}">

        <div class="row align-items-center">
          <div class="col-lg-6 text-lg-start text-left">
              <div class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <p>More Product </p>
                  <h2>Maybe You'll Love These</h2>
              </div>
          </div>
          <div class="col-lg-6 text-lg-end text-center">
              <a href="/category/top_picks?item=product" class="section-headerbtn btn--primary">
                  View All Products 
              </a>
          </div>
        </div>
        <div class="row mb_32">
          @foreach($more_products->getHomePageProductByQuery() as $key => $product)

              <div class="col-6 col-xl-2 col-lg-3 col-sm-6 col-md-4 single_product_item">
                  <div class="single_product_list product_tricker">
                      <div class="product_img">
                          <a href="{{singleProductURL($product->seller->slug, $product->slug)}}" class="product_img_iner">
                              <img @if ($product->thum_img != null) src="{{showImage($product->thum_img)}}" @else src="{{showImage(@$product->product->thumbnail_image_source)}}" @endif alt="{{@$product->product->product_name}}" class="img-fluid" />
                          </a>
                          <div class="socal_icon">
                              <a href="" class="add_to_wishlist {{$product->is_wishlist() == 1?'is_wishlist':''}}" id="wishlistbtn_{{$product->id}}" data-product_id="{{$product->id}}" data-seller_id="{{$product->user_id}}"> <i class="ti-heart"></i> </a>
                              <a href="" class="addToCompareFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }} data-product-id={{ $product->id }}> <i class="ti-exchange-vertical"></i> </a>
                              <a class="addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                              @if(@$product->hasDeal)
                              data-base-price={{ selling_price(@$product->skus->first()->selling_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                              @else
                                @if($product->hasDiscount == 'yes')
                                data-base-price={{ selling_price(@$product->skus->first()->selling_price,@$product->discount_type,@$product->discount) }}
                                @else
                                data-base-price={{ @$product->skus->first()->selling_price }}
                                @endif

                              @endif
                              data-shipping-method=0
                              data-product-id={{ $product->id }}
                              data-stock_manage="{{$product->stock_manage}}"
                              data-stock="{{@$product->skus->first()->product_stock}}"
                              data-min_qty="{{$product->product->minimum_order_qty}}"> <i class="ti-bag"></i> </a>
                          </div>
                      </div>
                  <div class="product_text">
                  <h5>
                  <a href="{{singleProductURL($product->seller->slug, $product->slug)}}">@if ($product->product_name) {{ \Illuminate\Support\Str::limit(@$product->product_name, 22, $end='...') }} @else {{ \Illuminate\Support\Str::limit(@$product->product->product_name, 22, $end='...') }} @endif</a>
                    
                </h5>
                      <div class="product_review_star d-flex justify-content-between align-items-center flex-wrap">
                      <p>
                          @if($product->hasDeal)
                              {{single_price(selling_price($product->skus->first()->selling_price,$product->hasDeal->discount_type,$product->hasDeal->discount))}}
                          @else
                              @if($product->hasDiscount == 'yes')
                                  {{single_price(selling_price(@$product->skus->first()->selling_price,@$product->discount_type,@$product->discount))}}

                              @else
                                  {{single_price(@$product->skus->first()->selling_price)}}
                              @endif
                          @endif
                      </p>
                          <div class="review_star_icon">
                              @php
                                  $reviews = $product->reviews->where('status',1)->pluck('rating');

                                  if(count($reviews)>0){
                                      $value = 0;
                                      $rating = 0;
                                      foreach($reviews as $review){
                                          $value += $review;
                                      }
                                      $rating = $value/count($reviews);
                                      $total_review = count($reviews);
                                  }else{
                                      $rating = 0;
                                      $total_review = 0;
                                  }
                              @endphp
                              @if($rating == 0)
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                              @elseif($rating < 1 && $rating > 0)
                                  <i class="fas fa-star-half-alt"></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                              @elseif($rating <= 1 && $rating > 0)
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                              @elseif($rating < 2 && $rating > 1)
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                              @elseif($rating <= 2 && $rating > 1)
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                              @elseif($rating < 3 && $rating > 2)
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star-half-alt"></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                              @elseif($rating <= 3 && $rating > 2)
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star "></i>
                                  <i class="fas fa-star non_rated "></i>
                                  <i class="fas fa-star non_rated "></i>
                              @elseif($rating < 4 && $rating > 3)
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star "></i>
                                  <i class="fas fa-star-half-alt"></i>
                                  <i class="fas fa-star non_rated "></i>
                              @elseif($rating <= 4 && $rating > 3)
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star "></i>
                                  <i class="fas fa-star "></i>
                                  <i class="fas fa-star non_rated "></i>
                              @elseif($rating < 5 && $rating > 4)
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star "></i>
                                  <i class="fas fa-star "></i>
                                  <i class="fas fa-star-half-alt"></i>
                              @else
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star "></i>
                                  <i class="fas fa-star "></i>
                                  <i class="fas fa-star "></i>
                              @endif
                          </div>
                      </div>
                  </div>
                  @if($product->hasDeal)
                      @if($product->hasDeal->discount >0)
                          <span class="new_price">
                              @if($product->hasDeal->discount >0)
                                  @if($product->hasDeal->discount_type ==0)
                                      {{$product->hasDeal->discount}} % off
                                  @else
                                      {{single_price($product->hasDeal->discount)}} off
                                  @endif

                              @endif
                          </span>
                      @endif
                  @else
                      @if($product->hasDiscount == 'yes')
                        @if($product->discount > 0)
                          <span class="new_price">
                              @if($product->discount >0)
                                  @if($product->discount_type ==0)
                                      {{$product->discount}} % off
                                  @else
                                      {{single_price($product->discount)}} off
                                  @endif
                              @endif
                          </span>
                        @endif
                      @endif
                  @endif
                  </div>
              </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <a id="loadmore" class="load_more_btn_homepage mt-2"> <i class="ti-reload"></i> {{ __('defaultTheme.load_more') }}</a>
  <input type="hidden" id="login_check" value="@if(auth()->check()) 1 @else 0 @endif">

  <div class="add-product-to-cart-using-modal">

  </div>
</section>

<section class="newsLetter-one pt-120 pb-120">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp animated">
              <div class="newsLetter-one__content-box d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated"
                  data-wow-delay="0.1s">
                  <div class="thumb"> <img src="assets/images/home-two/envalop.png" alt=""> </div>
                  <h3 class="t36"> <span>Sign Up For </span> Newsletter </h3>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp animated">
              <div class="newsLetter-one__content-box d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated "
                  data-wow-delay="0.2s">
                  <h6 class="text-md-start text-center"> Subscribe to ours weekly newsletter for all the
                      latest updates </h6>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp animated">
              <div class="newsLetter-one__content-box three d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated"
                  data-wow-delay="0.3s">
                  <form action="#0" class="form">
                      <div class="newsLetter-one__subscribe-box"> <input type="email"
                              placeholder="Email address" name="email"> <button type="submit"
                              class="subscrib-btn"> Subscribe </button> </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section> 

<div class="py-5">
<center>The New MindBlowing Idea is Here... Coming Soon...</center>
</div>

@include(theme('partials._subscription_modal'))
@endsection

@include(theme('partials.add_to_cart_script'))
@include(theme('partials.add_to_compare_script'))