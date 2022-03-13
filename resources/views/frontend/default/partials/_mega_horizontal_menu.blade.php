<header class="header-default py-2 border-bottom">
    <div class="menubox">
        <div class="mega-menu-default mega-menu d-lg-block d-none">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <nav>
                        <ul class="page-dropdown-menu d-flex flex-wrap align-items-center justify-content-center">
                        {{-- @foreach($menus->where('status', 1) as $key => $menu) --}}
                            <li class="dropdown-list megamenu "> <a href="#0"> <span>Features </span> <span
                                        class="menuarrow"> <i class="flaticon-down-arrow"></i> </span> </a>
                                <div class="dropdown megamenu-dropdown">
                                    <div class="row g-0">
                                        <div class="col-xl-6 col-lg-7 megamenu-padding-one">
                                            <div class="row g-0">
                                                <div class="col-lg-4">
                                                    <div class="megamenu-box one">
                                                        <h6>Home Pages</h6>
                                                        <ul class="megamenu-list">
                                                            <li><a href="index">Home Page 01</a></li>
                                                            <li><a href="index-2">Home Page 02</a></li>
                                                            <li><a href="index-3">Home Page 03</a></li>
                                                            <li><a href="index-4">Home Page 04</a></li>
                                                            <li><a href="shop-details-1">Product Style 1 </a>
                                                            </li>
                                                            <li><a href="shop-details-2">Product Style 2 </a>
                                                            </li>
                                                            <li><a href="shop-details-3">Product Style 3 </a>
                                                            </li>
                                                            <li><a href="contact">Contact </a></li>
                                                            <li><a href="faq">FAQ</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="megamenu-box one">
                                                        <h6>Shop Pages</h6>
                                                        <ul class="megamenu-list">
                                                            <li><a href="shop-grid">Shop Grid </a></li>
                                                            <li><a href="shop-list-left-sidebar">Shop list</a>
                                                            </li>
                                                            <li><a href="shop-grid-right-sidebar">Shop 2 colums
                                                                </a></li>
                                                            <li><a href="shop-grid-left-sidebar">Shop 3 colums
                                                                </a></li>
                                                            <li><a href="shop-grid">Shop 4 colums</a></li>
                                                            <li><a href="shop-grid-left-sidebar">Shop Grid Left
                                                                    Sidebar </a></li>
                                                            <li><a href="shop-grid-right-sidebar">Shop Grid
                                                                    Right Sidebar</a></li>
                                                            <li><a href="shop-list-left-sidebar">Shop List Left
                                                                    Sidebar</a></li>
                                                            <li><a href="shop-list-right-sidebar">Shop List
                                                                    Right Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="megamenu-box four">
                                                        <h6>Others Pages</h6>
                                                        <ul class="megamenu-list">
                                                            <li><a href="cart">Cart </a></li>
                                                            <li><a href="compare">Compare </a></li>
                                                            <li><a href="wishlist">Wishlist </a></li>
                                                            <li><a href="order-track">Order Track </a></li>
                                                            <li><a href="my-account">My Account </a></li>
                                                            <li><a href="blog">Blog</a></li>
                                                            <li><a href="blog-single">Blog Single</a></li>
                                                            <li><a href="login">Login</a></li>
                                                            <li><a href="register">Register</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-5 megamenu-padding background">
                                            <div class="row g-0">
                                                <div class="col-xl-6 col-lg-5">
                                                    <div class="content"> <a href="shop-details-1"
                                                            class="thumb d-block"> <img
                                                                src="assets/images/menu/mega-menu.jpg" alt=""> </a>
                                                        <a href="shop-details-1" class="title d-block">
                                                            <h6> Super Comfort Sofa </h6>
                                                        </a> <a href="shop-details-1" class="price">$250.00</a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-7">
                                                    <div class="offer">
                                                        <h6>Discount</h6>
                                                        <ul>
                                                            <li><a href="shop-grid"> <span>%</span> 30% Off
                                                                    Everything! </a></li>
                                                            <li><a href="shop-grid-left-sidebar">
                                                                    <span>%</span> Get an Extra 20% Off Sale! Use
                                                                    Code: Sale </a></li>
                                                            <li><a href="shop-grid-right-sidebar">
                                                                    <span>%</span> Flash Sale Offers </a> </li>
                                                            <li><a href="shop-grid"> <span>%</span> Flash Sale
                                                                    Offers </a> </li>
                                                            <li><a href="shop-grid-left-sidebar">
                                                                    <span>%</span> 30% Off Everything! </a></li>
                                                            <li><a href="shop-grid-right-sidebar">
                                                                    <span>%</span> Flash Sale Offers </a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            {{-- <li class="dropdown-list"> <a href="#0"> <span>Pages </span> <span class="menuarrow"> <i
                                            class="flaticon-down-arrow"></i> </span> </a>
                                <ul class="dropdown">
                                    <li><a href="about-us">About Us </a></li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-list"> <a href="contact">Contact</a> </li> --}}

                        {{-- @endforeach --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="sticy-header">
        <div class="mobile-menu d-lg-none d-block ">
            <div class="mobile-menu__menu-top border-bottom-0">
                <div class="container ">
                    <div class="row">
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
                                <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                    <li class="dropdown-list"> <a href="#0"> <span>Home</span> <span class="menuarrow">
                                                <i class="flaticon-down-arrow"></i> </span> </a>
                                        <ul class="dropdown">
                                            <li><a href="index">Home Page 01 <sup
                                                        class="info three">Popular</sup></a> </li>
                                            <li><a href="index-2">Home Page 02 <sup class="info one">Hot</sup></a>
                                            </li>
                                            <li><a href="index-3">Home Page 03 </a> </li>
                                            <li><a href="index-4">Home Page 04 <sup class="info two">New</sup></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-list"> <a href="#0"> <span>Shop </span> <span class="menuarrow">
                                                <i class="flaticon-down-arrow"></i> </span> </a>
                                        <ul class="dropdown">
                                            <li><a href="shop-grid">Shop Grid</a></li>
                                            <li><a href="shop-grid-left-sidebar">Shop Grid Left Sidebar </a>
                                            </li>
                                            <li><a href="shop-grid-right-sidebar">Shop List Left Sidebar</a>
                                            </li>
                                            <li><a href="shop-grid-right-sidebar">Shop Grid Right Sidebar </a>
                                            </li>
                                            <li><a href="shop-list-right-sidebar">Shop List Right Sidebar</a>
                                            </li>
                                            <li class="submenu-parent"> <a href="#0"> <span>Shop Details Style
                                                    </span> <span class="menuarrow"> <i class="flaticon-next-1"></i>
                                                    </span> </a>
                                                <ul class="submenu">
                                                    <li><a href="shop-details-1">Shop Details Style 01</a></li>
                                                    <li><a href="shop-details-2">Shop Details Style 02</a></li>
                                                    <li><a href="shop-details-3">Shop Details Style 03</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-list megamenu "> <a href="#0"> <span>Features </span> <span
                                                class="menuarrow"> <i class="flaticon-down-arrow"></i> </span> </a>
                                        <div class="dropdown megamenu-dropdown">
                                            <div class="row g-0">
                                                <div class="col-xl-6 col-lg-7 megamenu-padding-one">
                                                    <div class="row g-0">
                                                        <div class="col-lg-4">
                                                            <div class="megamenu-box one">
                                                                <h6>Home Pages</h6>
                                                                <ul class="megamenu-list">
                                                                    <li><a href="index">Home Page 01</a></li>
                                                                    <li><a href="index-2">Home Page 02</a></li>
                                                                    <li><a href="index-3">Home Page 03</a></li>
                                                                    <li><a href="index-4">Home Page 04</a></li>
                                                                    <li><a href="shop-details-1">Product Style
                                                                            1 </a> </li>
                                                                    <li><a href="shop-details-2">Product Style
                                                                            2 </a> </li>
                                                                    <li><a href="shop-details-3">Product Style
                                                                            3 </a> </li>
                                                                    <li><a href="contact">Contact </a></li>
                                                                    <li><a href="faq">FAQ</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="megamenu-box one">
                                                                <h6>Shop Pages</h6>
                                                                <ul class="megamenu-list">
                                                                    <li><a href="shop-grid">Shop Grid </a></li>
                                                                    <li><a href="shop-list-left-sidebar">Shop
                                                                            list</a> </li>
                                                                    <li><a href="shop-grid-right-sidebar">Shop
                                                                            2 colums </a></li>
                                                                    <li><a href="shop-grid-left-sidebar">Shop 3
                                                                            colums </a></li>
                                                                    <li><a href="shop-grid">Shop 4 colums</a>
                                                                    </li>
                                                                    <li><a href="shop-grid-left-sidebar">Shop
                                                                            Grid Left Sidebar </a></li>
                                                                    <li><a href="shop-grid-right-sidebar">Shop
                                                                            Grid Right Sidebar</a></li>
                                                                    <li><a href="shop-list-left-sidebar">Shop
                                                                            List Left Sidebar</a></li>
                                                                    <li><a href="shop-list-right-sidebar">Shop
                                                                            List Right Sidebar</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="megamenu-box four">
                                                                <h6>Others Pages</h6>
                                                                <ul class="megamenu-list">
                                                                    <li><a href="cart">Cart </a></li>
                                                                    <li><a href="compare">Compare </a></li>
                                                                    <li><a href="wishlist">Wishlist </a></li>
                                                                    <li><a href="order-track">Order Track </a>
                                                                    </li>
                                                                    <li><a href="my-account">My Account </a>
                                                                    </li>
                                                                    <li><a href="blog">Blog</a></li>
                                                                    <li><a href="blog-single">Blog Single</a>
                                                                    </li>
                                                                    <li><a href="login">Login</a></li>
                                                                    <li><a href="register">Register</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-5 megamenu-padding background">
                                                    <div class="row g-0">
                                                        <div class="col-xl-6 col-lg-5">
                                                            <div class="content"> <a href="shop-details-1"
                                                                    class="thumb d-block"> <img
                                                                        src="assets/images/menu/mega-menu.jpg" alt="">
                                                                </a> <a href="shop-details-1"
                                                                    class="title d-block">
                                                                    <h6> Super Comfort Sofa </h6>
                                                                </a> <a href="shop-details-1"
                                                                    class="price">$250.00</a> </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-7">
                                                            <div class="offer">
                                                                <h6>Discount</h6>
                                                                <ul>
                                                                    <li><a href="shop-grid"> <span>%</span> 30%
                                                                            Off Everything! </a></li>
                                                                    <li><a href="shop-grid-left-sidebar">
                                                                            <span>%</span> Get an Extra 20% Off
                                                                            Sale! Use Code: Sale </a></li>
                                                                    <li><a href="shop-grid-right-sidebar">
                                                                            <span>%</span> Flash Sale Offers </a>
                                                                    </li>
                                                                    <li><a href="shop-grid"> <span>%</span>
                                                                            Flash Sale Offers </a> </li>
                                                                    <li><a href="shop-grid-left-sidebar">
                                                                            <span>%</span> 30% Off Everything! </a>
                                                                    </li>
                                                                    <li><a href="shop-grid-right-sidebar">
                                                                            <span>%</span> Flash Sale Offers </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-list"> <a href="#0"> <span>Blogs </span> <span
                                                class="menuarrow"> <i class="flaticon-down-arrow"></i> </span> </a>
                                        <ul class="dropdown">
                                            <li><a href="blog">All Blog Posts</a></li>
                                            <li><a href="blog-single">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-list"> <a href="#0"> <span>Pages </span> <span
                                                class="menuarrow"> <i class="flaticon-down-arrow"></i> </span> </a>
                                        <ul class="dropdown">
                                            <li><a href="about-us">About Us </a></li>
                                            <li><a href="contact">Contact</a></li>
                                            <li><a href="faq">FAQ</a></li>
                                            <li><a href="order-track">Order_Track</a></li>
                                            <li><a href="my-account">My_Account</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-list"> <a href="contact">Contact</a> </li>
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