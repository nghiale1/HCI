
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <style>
    p {
    FONT-FAMILY: initial;
}
    </style>
    <!--Header Area Start-->
    <div class="header-area">
        <div class="container">
            <div class="row">
                {{-- logo --}}
                <div class="col-md-2">
                    <div class="header-logo">
                        <a href="{{route('customer/index')}}">
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                {{-- <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="account.html"><i class="flaticon-people"></i></a>
                            </li>
                            <li class="shoping-cart">
                                <a href="#">
                                    <i class="flaticon-shop"></i>
                                    <span>2</span>
                                </a>
                                <div class="add-to-cart-product">
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="{{asset('img/shop/1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="{{asset('img/shop/1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="total-cart-price">
                                        <div class="cart-product-line fast-line">
                                            <span>Shipping</span>
                                            <span class="free-shiping">$10.50</span>
                                        </div>
                                        <div class="cart-product-line">
                                            <span>Total</span>
                                            <span class="total">$ 140.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="checkout.html">
                                            Check out
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                {{-- search box --}}
                <div class="col-md-7">
                        <div class="layer-4">
                            <form action="#" class="title-4">
                                <input type="text" placeholder="Nhập tên sách, tác giả, thể loại,...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                </div>
                {{-- {{dd($cat)}} --}}
                {{-- @foreach ($category as $cat)
                    {{$cat->category_name}}
                @endforeach --}}
                {{-- <div class="col-md-2 col-sm-4 hidden-sm">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul id="nav">
                                <li><a href="#">VỀ WHILIEN52</a></li>
                                <li><a href="#">LIÊN HỆ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div> --}}
                {{-- <div class="col-md-9 col-sm-12 hidden-xs">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul id="nav">

                                <li><a href="index.html">DANH MỤC</a></li>
                                <li><a href="shop.html">FEATURED</a></li>
                                <li><a href="shop.html">VỀ WHILIEN52</a></li>
                                <li><a href="about.html">LIÊN HỆ</a></li>
                                <!-- <li><a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="shop.html">Shopping Page</a></li>
                                        <li><a href="single-product.html">Single Shop Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>  -->
                                <!-- <li><a href="contact.html">CONTACT</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div> --}}
                <div class="col-md-2">
                    <div class="header-right">
                        <ul>
                            <li><a href="{{route('about')}}" class="info">Giới thiệu</a></li>
                            <li style=""><a href="{{route('contact')}}" class="info">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 ">
                    <div class="header-right">
                        <ul>
                            <li>
                                <a href="account.html"><i class="flaticon-people"></i></a>
                            </li>
                            <li class="shoping-cart">
                                <a href="#">
                                    <i class="flaticon-shop"></i>
                                    <span>2</span>
                                </a>
                                <div class="add-to-cart-product">
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="{{asset('img/shop/1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="cart-product">
                                        <div class="cart-product-image">
                                            <a href="single-product.html">
                                                <img src="{{asset('img/shop/1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-product-info">
                                            <p>
                                                <span>1</span>
                                                x
                                                <a href="single-product.html">East of eden</a>
                                            </p>
                                            <a href="single-product.html">S, Orange</a>
                                            <span class="cart-price">$ 140.00</span>
                                        </div>
                                        <div class="cart-product-remove">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                    <div class="total-cart-price">
                                        <div class="cart-product-line fast-line">
                                            <span>Shipping</span>
                                            <span class="free-shiping">$10.50</span>
                                        </div>
                                        <div class="cart-product-line">
                                            <span>Total</span>
                                            <span class="total">$ 140.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="checkout.html">
                                            Check out
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header Area End-->
