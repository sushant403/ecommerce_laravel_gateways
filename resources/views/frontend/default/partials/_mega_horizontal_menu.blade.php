<header class="header-default py-2 border-bottom">
    <div class="menubox">
        <div class="mega-menu-default mega-menu d-lg-block d-none">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <nav>
                        <ul class="page-dropdown-menu d-flex flex-wrap align-items-center justify-content-center">
                            @foreach($menus->where('status', 1) as $key => $menu)
                            @if($menu->menu_type == 'multi_mega_menu')
                            {{-- <h4>{{ \Illuminate\Support\Str::limit($menu->name, 25, $end='...') }}</h4> --}}

                            @foreach(@$menu->menus as $key => $menu)
                            @if(@$menu->menu->menu_type == 'mega_menu' && @$menu->menu->status == 1)

                            <li class="dropdown-list megamenu mr-0"> <a href="javascript:"> <span>{{
                                        \Illuminate\Support\Str::limit(@$menu->menu->name, 25, $end='...') }} </span>
                                    <span class="menuarrow"> <i class="flaticon-down-arrow"></i> </span> </a>
                                <div class="dropdown megamenu-dropdown py-5 px-4">
                                    <div class="row ">
                                        <div class="col-sm-12 col-md-12 col-xl-8">
                                            <div class="row g-0">
                                                @php
                                                $is_same = 1;
                                                $column_size = $menu->menu->columns[0]->size;
                                                foreach($menu->menu->columns as $key => $column){
                                                if($column->size != $column_size){
                                                $is_same =0;
                                                }
                                                }
                                                @endphp
                                                @foreach(@$menu->menu->columns as $key => $column)
                                                <div class="
                                                            @if($column->size == '1/1')
                                                            col-sm-12 col-md-12 col-lg-12 col-xl-12
                                                            @elseif($column->size == '1/2')
                                                            col-sm-12 col-md-6 col-lg-6 col-xl-6
                                                            @elseif($column->size == '1/3')
                                                            col-sm-6 col-md-6 col-lg-4 col-xl-4
                                                            @elseif($column->size == '1/4')
                                                            col-sm-6 col-md-6 col-lg-3 col-xl-3
                                                            @endif
                                                            ">
                                                    <div class="megamenu-box one">
                                                        <h6>{{ \Illuminate\Support\Str::limit($column->column, 25,
                                                            $end='...') }}</h6>
                                                        <ul class="megamenu-list">
                                                            @foreach(@$column->elements as $key => $element)
                                                            @if($element->type == 'link')
                                                            <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                    href="
                                                        @if($element->link != null)
                                                        {{url($element->link)}}
                                                        @else
                                                        javascript:void(0);
                                                        @endif
                                                        ">{{ \Illuminate\Support\Str::limit($element->title, 25,
                                                                    $end='...') }}</a></li>

                                                            @elseif($element->type == 'category' &&
                                                            $element->category->status == 1)
                                                            <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                    href="{{route('frontend.category-product',['slug' => @$element->category->slug, 'item' =>'category'])}}">
                                                                    {{
                                                                    ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                    25, $end='...')) }}
                                                                </a></li>

                                                            @elseif(@$element->type == 'product' && $element->product)
                                                            <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                    href="{{singleProductURL(@$element->product->seller->slug, $element->product->slug)}}">{{
                                                                    ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                    25, $end='...')) }}</a></li>
                                                            @elseif($element->type == 'brand' && $element->brand->status
                                                            == 1)
                                                            <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                    href="{{route('frontend.category-product',['slug' => @$element->brand->slug, 'item' =>'brand'])}}">{{
                                                                    ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                    25, $end='...')) }}</a></li>

                                                            @elseif($element->type == 'page' && $element->page->status
                                                            == 1)
                                                            @if(!isModuleActive('Lead') && $element->page->module ==
                                                            'Lead')
                                                            @continue
                                                            @endif
                                                            <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                    href="{{ url(@$element->page->slug) }}">{{
                                                                    ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                    25, $end='...')) }}</a></li>

                                                            @elseif($element->type == 'tag')
                                                            <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                    href="{{route('frontend.category-product',['slug' => @$element->tag->name, 'item' =>'tag'])}}">{{
                                                                    ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                    25, $end='...')) }}</a></li>

                                                            @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @if(count(@$menu->menu->rightPanelData)> 0)
                                        <div class="col-sm-12 col-xl-4 d-none d-xl-block">
                                            <div class="mega_menu_product">
                                                @foreach(@$menu->menu->rightPanelData as $key => $item)
                                                @if($item->category->status == 1)
                                                <a target="{{$item->is_newtab == 1?'_blank':''}}"
                                                    href="{{route('frontend.category-product',['slug' => @$item->category->slug, 'item' =>'category'])}}"
                                                    class="menu_product">
                                                    <div class="single_mega_menu_product">
                                                        <div class="media align-items-center">
                                                            <div class="media_img">
                                                                <img src="{{asset(asset_path(@$item->category->categoryImage->image?@$item->category->categoryImage->image:'frontend/default/img/default_category.png'))}}"
                                                                    class="align-self-center"
                                                                    alt="{{@$item->category->name}}" />
                                                            </div>
                                                            <div class="media-body">
                                                                <p>{{$item->title}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                @if($key >=5)
                                                @break
                                                @endif
                                                @endif
                                                @endforeach


                                            </div>
                                        </div>
                                        @endif
                                        @if(count(@$menu->menu->bottomPanelData)> 0)
                                        <div class="col-lg-12 d-none d-xl-block">
                                            <div class="product_logo">
                                                @foreach(@$menu->menu->bottomPanelData as $key => $item)
                                                @if($item->brand->status == 1)
                                                <a target="{{$item->is_newtab == 1?'_blank':''}}"
                                                    href="{{route('frontend.category-product',['slug' => @$item->brand->slug, 'item' =>'brand'])}}"
                                                    class="single_product_logo mr-4 pt-5">
                                                    <img src="{{ asset(asset_path(@$item->brand->logo ? @$item->brand->logo:'frontend/default/img/brand_image.png')) }}"
                                                        alt="{{@$item->brand->name}}" style="height: 80px;width:auto" />
                                                </a>
                                                @if($key >=7)
                                                @break
                                                @endif
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </li>

                            @endif
                            @endforeach

                            @endif
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="sticy-header py-2">
        <div class="mobile-menu d-lg-none d-block ">
            <div class="mobile-menu__menu-top border-bottom-0">
                <div class="container ">
                    <div class="row d-block px-3">
                        <div class="menu-info d-flex justify-content-between align-items-center">
                            <div class="menubar"> <span></span> <span></span> <span></span> </div> <a href="index"
                                class="logo"> <img src="{{ showImage(app('general_setting')->logo) }}" alt=""> </a>
                            <div class="cart-holder">
                                <a href="#0" class="cart cart-icon position-relative">
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container position-relative  d-lg-block d-none ">
            <div class="d-flex align-items-center justify-content-between"> <a href="index" class="logo me-2">
                    <img src="{{ showImage(app('general_setting')->logo) }}" alt=""> </a>
                <div class="mega-menu-default mega-menu d-lg-block d-none">
                    <div class="container ">
                        <div class="row">
                            <nav>
                                <ul class="page-dropdown-menu d-flex flex-wrap align-items-center justify-content-center">
                                    @foreach($menus->where('status', 1) as $key => $menu)
                                    @if($menu->menu_type == 'multi_mega_menu')
                                    {{-- <h4>{{ \Illuminate\Support\Str::limit($menu->name, 25, $end='...') }}</h4> --}}
        
                                    @foreach(@$menu->menus->take(6) as $key => $menu)
                                    @if(@$menu->menu->menu_type == 'mega_menu' && @$menu->menu->status == 1)
        
                                    <li class="dropdown-list megamenu mr-0"> <a href="javascript:"> <span>{{
                                                \Illuminate\Support\Str::limit(@$menu->menu->name, 25, $end='...') }} </span>
                                            <span class="menuarrow"> <i class="flaticon-down-arrow"></i> </span> </a>
                                        <div class="dropdown megamenu-dropdown py-5 px-4">
                                            <div class="row ">
                                                <div class="col-sm-12 col-md-12 col-xl-8">
                                                    <div class="row g-0">
                                                        @php
                                                        $is_same = 1;
                                                        $column_size = $menu->menu->columns[0]->size;
                                                        foreach($menu->menu->columns as $key => $column){
                                                        if($column->size != $column_size){
                                                        $is_same =0;
                                                        }
                                                        }
                                                        @endphp
                                                        @foreach(@$menu->menu->columns as $key => $column)
                                                        <div class="
                                                                    @if($column->size == '1/1')
                                                                    col-sm-12 col-md-12 col-lg-12 col-xl-12
                                                                    @elseif($column->size == '1/2')
                                                                    col-sm-12 col-md-6 col-lg-6 col-xl-6
                                                                    @elseif($column->size == '1/3')
                                                                    col-sm-6 col-md-6 col-lg-4 col-xl-4
                                                                    @elseif($column->size == '1/4')
                                                                    col-sm-6 col-md-6 col-lg-3 col-xl-3
                                                                    @endif
                                                                    ">
                                                            <div class="megamenu-box one">
                                                                <h6>{{ \Illuminate\Support\Str::limit($column->column, 25,
                                                                    $end='...') }}</h6>
                                                                <ul class="megamenu-list">
                                                                    @foreach(@$column->elements as $key => $element)
                                                                    @if($element->type == 'link')
                                                                    <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                            href="
                                                                @if($element->link != null)
                                                                {{url($element->link)}}
                                                                @else
                                                                javascript:void(0);
                                                                @endif
                                                                ">{{ \Illuminate\Support\Str::limit($element->title, 25,
                                                                            $end='...') }}</a></li>
        
                                                                    @elseif($element->type == 'category' &&
                                                                    $element->category->status == 1)
                                                                    <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                            href="{{route('frontend.category-product',['slug' => @$element->category->slug, 'item' =>'category'])}}">
                                                                            {{
                                                                            ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                            25, $end='...')) }}
                                                                        </a></li>
        
                                                                    @elseif(@$element->type == 'product' && $element->product)
                                                                    <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                            href="{{singleProductURL(@$element->product->seller->slug, $element->product->slug)}}">{{
                                                                            ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                            25, $end='...')) }}</a></li>
                                                                    @elseif($element->type == 'brand' && $element->brand->status
                                                                    == 1)
                                                                    <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                            href="{{route('frontend.category-product',['slug' => @$element->brand->slug, 'item' =>'brand'])}}">{{
                                                                            ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                            25, $end='...')) }}</a></li>
        
                                                                    @elseif($element->type == 'page' && $element->page->status
                                                                    == 1)
                                                                    @if(!isModuleActive('Lead') && $element->page->module ==
                                                                    'Lead')
                                                                    @continue
                                                                    @endif
                                                                    <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                            href="{{ url(@$element->page->slug) }}">{{
                                                                            ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                            25, $end='...')) }}</a></li>
        
                                                                    @elseif($element->type == 'tag')
                                                                    <li><a target="{{$element->is_newtab == 1?'_blank':''}}"
                                                                            href="{{route('frontend.category-product',['slug' => @$element->tag->name, 'item' =>'tag'])}}">{{
                                                                            ucfirst(\Illuminate\Support\Str::limit($element->title,
                                                                            25, $end='...')) }}</a></li>
        
                                                                    @endif
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @if(count(@$menu->menu->rightPanelData)> 0)
                                                <div class="col-sm-12 col-xl-4 d-none d-xl-block">
                                                    <div class="mega_menu_product">
                                                        @foreach(@$menu->menu->rightPanelData as $key => $item)
                                                        @if($item->category->status == 1)
                                                        <a target="{{$item->is_newtab == 1?'_blank':''}}"
                                                            href="{{route('frontend.category-product',['slug' => @$item->category->slug, 'item' =>'category'])}}"
                                                            class="menu_product">
                                                            <div class="single_mega_menu_product">
                                                                <div class="media align-items-center">
                                                                    <div class="media_img">
                                                                        <img src="{{asset(asset_path(@$item->category->categoryImage->image?@$item->category->categoryImage->image:'frontend/default/img/default_category.png'))}}"
                                                                            class="align-self-center"
                                                                            alt="{{@$item->category->name}}" />
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <p>{{$item->title}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
        
                                                        @if($key >=5)
                                                        @break
                                                        @endif
                                                        @endif
                                                        @endforeach
        
        
                                                    </div>
                                                </div>
                                                @endif
                                                @if(count(@$menu->menu->bottomPanelData)> 0)
                                                <div class="col-lg-12 d-none d-xl-block">
                                                    <div class="product_logo">
                                                        @foreach(@$menu->menu->bottomPanelData as $key => $item)
                                                        @if($item->brand->status == 1)
                                                        <a target="{{$item->is_newtab == 1?'_blank':''}}"
                                                            href="{{route('frontend.category-product',['slug' => @$item->brand->slug, 'item' =>'brand'])}}"
                                                            class="single_product_logo mr-4 pt-5">
                                                            <img src="{{ asset(asset_path(@$item->brand->logo ? @$item->brand->logo:'frontend/default/img/brand_image.png')) }}"
                                                                alt="{{@$item->brand->name}}" style="height: 80px;width:auto" />
                                                        </a>
                                                        @if($key >=7)
                                                        @break
                                                        @endif
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
        
                                    @endif
                                    @endforeach
        
                                    @endif
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="side-cart-closer"></div>
    <div class="sidebar-content-closer"></div>
</header>