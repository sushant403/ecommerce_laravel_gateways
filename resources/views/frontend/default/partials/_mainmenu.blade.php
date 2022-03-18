@php
    $actual_link = \Illuminate\Support\Facades\URL::current();
    $base_url = url('/');
    $flash_deal = \Modules\Marketing\Entities\FlashDeal::where('status', 1)->first();

    $new_user_zone = \Modules\Marketing\Entities\NewUserZone::where('status', 1)->first();

@endphp
<div class="main_menu pb-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 order-1 order-lg-1">
                <div class="main_logo">
                    <a class="logo_div justify-content-center" href="{{ url('/') }}"><img
                            src="{{ showImage(app('general_setting')->logo) }}" alt="#" /></a>
                    <div class="mega_menu_icon {{ $actual_link == $base_url ? 'd-lg-none' : '' }}">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                @include('frontend.default.partials._mega_menu_small')
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-8 col-xl-6 order-3 order-lg-2">
                <div class="category_box">
                    <form method="GET" id="search_form" autocomplete="off">
                        <div class="input-group category_box_iner">
                            <div class="input-group-prepend d-none">
                                <select hidden class="country_list category_list category_id default_select"
                                    name="category_id">
                                    <option value="0">{{ __('defaultTheme.all_categories') }}</option>
                                    @foreach (Modules\Product\Entities\Category::where('status', 1)->where('searchable', 1)->get() as $key => $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="text" class="form-control category_box_input rounded" id="inlineFormInputGroup"
                                placeholder="{{ __('defaultTheme.search_your_item') }}"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{ __('defaultTheme.search_your_item') }}'" />
                            <div class="input-group-append rounded">
                                <button id="search_button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <style> #search_items{ box-shadow: rgb(106 91 91 / 32%) 0px 7px 10px 2px } </style>
                    <div class="live-search">
                        <ul class="p-0 rounded" id="search_items">
                            <li class="search_item" id="search_empty_list">
                                
                            </li>
                            <li class="search_item" id="search_history">
                                
                            </li>
                            <li class="search_item" id="tag_search">
                                
                            </li>
                            <li class="search_item" id="category_search">
                                
                            </li>
                            <li class="search_item" id="product_search">
                                
                            </li>
                            <li class="search_item" id="seller_search">
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 order-2 order-lg-3 d-lg-none d-xl-block">
                <div class="main_menu_btn d-lg-flex justify-content-center float-none">
                    @if (isset($flash_deal))
                        <a href="{{ route('frontend.flash-deal', $flash_deal->slug) }}"
                            class="menu_btn_1 text-nowrap">{{ __('defaultTheme.best_deals') }}</a>
                    @endif
                    
                    @guest
                    <div class="left d-flex align-items-center justify-content-end">
                        <ul class="main-menu__widge-box d-flex align-items-center">
                            <li class="d-lg-block d-none"><a href="{{ url('/login') }}"><i class="flaticon-user"></i> Sign In</a></li>
                            <li class="d-lg-block d-none"><a href="{{ route('frontend.my-wishlist') }}" class="number"><i class="flaticon-heart"></i> <span class="count">({{$wishlists}})</span> </a> </li>
                            @php
                            $items = 0;
                            foreach($carts as $cart){
                                if(auth()->check()){
                                    $items += $cart->qty;
                                }else{
                                    $items += $cart['qty'];
                                }
                            }
                            $base_url = url('/');
                            $current_url = url()->current();
                            $just_path = trim(str_replace($base_url,'',$current_url));
                            @endphp
                            <li class="cartm"> <a href="{{ route('frontend.cart') }}" class="number cart-icon"> <i class="flaticon-shopping-cart"></i><span class="count">({{ $items }})</span> </a> </li>
                            
                        </ul>
                    </div>
                    @else
                        @if (isset($new_user_zone))
                            <a href="{{ route('frontend.new-user-zone', $new_user_zone->slug) }}"
                                class="menu_btn_1 text-nowrap">{{ __('defaultTheme.new_user_zone') }}</a>
                        @endif
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
