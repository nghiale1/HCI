@extends('layouts.customer')
        @section('content')
        <!-- Shop Area Start -->
        <div class="shopping-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="shop-widget">
                            <div class="shop-widget-top">
                                <aside class="widget widget-categories">
                                    <h2 class="sidebar-title text-center">Danh mục</h2>
                                    <ul class="sidebar-menu">
                                        @for($i=1;$i<=4;$i++)
                                            <li>
                                                <a href="#"><i class="fa fa-angle-double-right"></i>
                                                    {{$category[$i]->category_name}}                                          
                                                    <span>{{$count[$category[$i]->category_id]}}</span>
                                                </a>
                                                {{-- <ul class="sub-menu">
                                                    @for($i=1;$i<=4;$i++)
                                                    <li><a href="about.html">
                                                        {{$genre[$category[$i]->category_id][$i]->genre_name}}
                                                    </a></li>
                                                    @endfor
                                                </ul> --}}
                                            </li>
                                        @endfor
                                    </ul>
                                </aside> 
                                <aside class="widget shop-filter">
                                    <h2 class="sidebar-title text-center">Mức giá:</h2>
                                    <div class="info-widget">
                                        <div class="price-filter">
                                            <div id="slider-range"></div>
                                            <div class="price-slider-amount">
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                                <div class="widget-buttom">
                                                    <input type="submit"  value="Lọc"/>  
                                                    <input type="reset" value="Làm mới" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>                            
                            </div>
                            <div class="shop-widget-bottom">
                                <aside class="widget widget-tag">
                                    <h2 class="sidebar-title">Từ khóa phổ biến</h2>
                                    <ul class="tag-list">
                                        <li>
                                            <a href="#">Nhà giả kim</a>
                                        </li>
                                        <li>
                                            <a href="#">Harry Potter</a>
                                        </li>
                                        <li>
                                            <a href="#">Adam Khoo</a>
                                        </li>
                                        <li>
                                            <a href="#">Love, Rosie</a>
                                        </li>
                                        <li>
                                            <a href="#">Mắt biếc</a>
                                        </li>
                                        <li>
                                            <a href="#">Your name</a>
                                        </li>
                                    </ul>
                                </aside>
                                <aside class="widget widget-seller">
                                    <h2 class="sidebar-title">TOP SELLERS</h2>
                                    @for($i=1;$i<=3;$i++)
                                    <div class="single-seller">
                                       
                                        <div class="seller-img">
                                            <img src="{{asset($book[$i]->image_path)}}" alt="" style="width:104px;height:104px"/>
                                        </div>
                                        
                                        <div class="seller-details">
                                        <a href="{{Route('customer/single',$book[$i]->book_id)}}"><h5>{{$book[$i]->book_title}}</h5></a>
                                            <h5>{{number_format($book[$i]->sale_price)}}<span> đ</span></h5>
                                            <ul>
                                                <li><i class="fa fa-star icolor"></i></li>
                                                <li><i class="fa fa-star icolor"></i></li>
                                                <li><i class="fa fa-star icolor"></i></li>
                                                <li><i class="fa fa-star icolor"></i></li>
                                                <li><i class="fa fa-star icolor"></i></li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    @endfor
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="wishlist-right-area table-responsive">
                            <table class="wish-list-table">
                                <thead>
                                    <tr>
                                        <th class="t-product-name">Sản phẩm</th>
                                        <th class="product-details-comment">Mô tả</th>
                                        <th class="product-price-cart">Thêm vào giỏ hàng</th>
                                        <th class="w-product-remove">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-image">
                                            <a href="#">
                                                <img src="http://localhost/HCI/public/img/Product/8935235213746.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="product-details">
                                            <h4>NHÀ GIẢ KIM (TÁI BẢN 2017)</h4>
                                            <p>Nhà giả kim là một cuốn sách được xuất bản lần đầu ở Brasil năm 1988 và là cuốn sách nổi tiếng nhất của nhà văn Paulo Coelho. Nó được dịch ra 67 ngôn ngữ và bán ra tới 65 triệu bản, trở thành một trong những quyển sách bán chạy nhất mọi thời đại. Đây là một câu chuyện thúc giục độc giả theo đuổi giấc mơ của mình.</p>
                                            <textarea placeholder="Nhập bình luận"></textarea>
                                        </td>
                                        <td class="product-cart">
                                            <div class="product-cart-details">
                                                <span>55,200 đ</span>
                                                <input type="number" value="1">
                                                <input type="submit" value="Thêm vào giỏ hàng">
                                            </div>
                                            <p>
                                                <a href="#">Chỉnh sửa</a>
                                            </p>
                                        </td>
                                        <td class="product-remove">
                                            <a href="#">
                                                <i class="flaticon-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-image">
                                            <a href="#">
                                                <img src="http://localhost/HCI/public/img/Product/9558a365adde6688d4c71a200d78310c.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="product-details">
                                            <h4>Đắc Nhân Tâm (Khổ Lớn)</h4>
                                            <p>Đắc nhân tâm, tên tiếng Anh là How to Win Friends and Influence People là một quyển sách nhằm tự giúp bản thân bán chạy nhất từ trước đến nay. Quyển sách này do Dale Carnegie viết và đã được xuất bản lần đầu vào năm 1936, nó đã được bán 15 triệu bản trên khắp thế giới.</p>
                                            <textarea placeholder="Nhập bình luận"></textarea>
                                        </td>
                                        <td class="product-cart">
                                            <div class="product-cart-details">
                                                <span>51,680 đ</span>
                                                <input type="number" value="1">
                                                <input type="submit" value="Thêm vào giỏ hàng">
                                            </div>
                                            <p>
                                                <a href="#">Chỉnh sửa</a>
                                            </p>
                                        </td>
                                        <td class="product-remove">
                                            <a href="#">
                                                <i class="flaticon-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="wishlist-bottom-link">
                            <a class="wishlist-single-link" href="index.html">
                                <i class="fa fa-angle-double-left"></i>
                                Trở lại
                            </a>
                            <div class="shopingcart-bottom-area wishlist-bottom-area pull-right">
                                <a href="#" class="right-shoping-cart">Chia sử danh sách</a>
                                <a href="#" class="right-shoping-cart">Thêm tất cả vào giỏ hàng</a>
                                <a href="#" class="right-shoping-cart">Cập nhật danh sách</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Area End -->
		@endsection