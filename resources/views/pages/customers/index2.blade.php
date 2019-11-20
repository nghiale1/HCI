@extends('layouts.customer')
@section('content')
<style>
#avatar_product{
	/* min-width: 270px; */
	max-width: 270px;			
	height: 280px;
	margin: auto;
	display: block;
}
.single-banner {
    min-width: 270px;
}
.banner-bottom.text-center {
    height: 110px;
	vertical-align: bottom;
}
.price{
	display: inline-block;
    width: 50px;
    height: 50px;
    position: absolute;
    z-index: 10;
    /* top: 0px; */
    font-size: 19px;
    /* font-weight: bold; */
    /* color: transparent; */
}
span.p-sale-label.discount-l-fs {
    position: absolute;
    top: 10px;
}
.section-padding {
    padding: 20px 0;
}
.title_book {
    height: 40px;
}
.rating-icon {
    position: absolute;
    bottom: 1px;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
}
.book_price {
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    bottom: 20px;
}
.price_sale{
	position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;
    bottom: 40px;
}
.title_book {
    padding: 0 5px;
}
.book_price {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 25px ;
}
.price_sale {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 40px;
}
.title_book {
    max-height: 20px;
}
</style>
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
                        <div class="shop-tab-area">
                            <div class="shop-tab-list">
                                <div class="shop-tab-pill pull-left">
                                    <ul>
                                        <li class="active" id="left"><a data-toggle="pill" href="#home"><i class="fa fa-th"></i><span>Lưới</span></a></li>
                                        <li><a data-toggle="pill" href="#menu1"><i class="fa fa-th-list"></i><span>Danh sách</span></a></li>
                                    </ul>
                                </div>
                                <div class="shop-tab-pill pull-right">
                                    <ul>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label>Hiển thị : </label>
                                                <select>
                                                    <option value="10" selected="selected">20</option>
                                                    <option value="09">30</option>
                                                    <option value="08">40</option>
                                                    <option value="07">50</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label><i class="fa fa-sort-amount-asc"></i>Ưu tiên xem: </label>
                                                <select>
                                                    <option value="position" selected="selected">Sách mới</option>
                                                    <option value="Name">Tên</option>
                                                    <option value="Price">Giá</option>
                                                </select>
                                            </div>
                                        </li>	
                                        <li class="shop-pagination"><a href="#">1</a></li>
                                        <li class="shop-pagination"><a href="#">2</a></li>
                                        <li class="shop-pagination"><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
		{{-- Grid --}}
                                <div class="row tab-pane fade in active" id="home">
									@foreach ($book as $item)
										<div class="shop-single-product-area">
											<div class="col-md-4 col-sm-6">
												<div class="single-banner">
													<div class="product-wrapper">
														<a href="{{Route('customer/single',$item->book_id)}}" class="single-banner-image-wrapper">
															<img id="avatar_product" alt="" src="{{asset($item->image_path)}}">
															<div class="price" style="background: url('{{asset('img/sale40.png')}}') no-repeat;">
																<span class="p-sale-label discount-l-fs" style="padding-left: 7px;">50%</span>
															</div>
															{{-- <div class="price" style="text-decoration: line-through;">{{number_format($item->book_price)}}<span> đ</span></div>
                                                            <div class="price" style="padding-top:8%">{{number_format($item->sale_price)}}<span> đ</span></div> --}}
														</a>
														<div class="product-description">
															<div class="functional-buttons">
																<a href="#" title="Add to Cart">
																	<i class="fa fa-shopping-cart"></i>
																</a>
																<a href="#" title="Add to Wishlist">
																	<i class="fa fa-heart-o"></i>
																</a>
																<a href="#" title="Xem nhanh" data-toggle="modal" data-target="#productModal">
																	<i class="fa fa-compress"></i>
																</a>
															</div>
														</div>
													</div>
													<div class="banner-bottom text-center">
														<div class="banner-bottom-title">
															<div class="title_book" style="height: inherit;">{{$item->book_title}}</div>
														<div class="price_sale">{{number_format($item->sale_price)}}<span> đ</span></div>
														<div class="book_price" style="text-decoration: line-through;">{{number_format($item->book_price)}}<span> đ</span></div>
															{{-- <a href="#">{{$item->book_title}}</a> --}}
														</div>
														<div class="rating-icon">
															<i class="fa fa-star icolor"></i>
															<i class="fa fa-star icolor"></i>
															<i class="fa fa-star icolor"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
									@endforeach
								</div>
		{{-- Grid End --}}
		{{-- List --}}
                                <div id="menu1" class="tab-pane fade">
                                    <div class="row">
										@foreach($book as $item)
                                        <div class="single-shop-product">
                                            <div class="col-xs-12 col-sm-5 col-md-4">
                                                <div class="left-item">
                                                    <a href="single-product.html" title="East of eden">
                                                        <img src="{{asset($item->image_path)}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-8">
                                                <div class="deal-product-content">
                                                    <h4>
                                                        <a href="single-product.html" title="East of eden">{{$item->book_title}}</a>
                                                    </h4>
                                                    <div class="product-price">
													<span class="new-price">{{number_format($item->sale_price)}} đ</span>
                                                        <span class="old-price">{{number_format($item->book_price)}} đ</span>
                                                    </div>
                                                    <div class="list-rating-icon">
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>Nhà giả kim là một cuốn sách được xuất bản lần đầu ở Brasil năm 1988 và là cuốn sách nổi tiếng nhất của nhà văn Paulo Coelho. Nó được dịch ra 67 ngôn ngữ và bán ra tới 65 triệu bản, trở thành một trong những quyển sách bán chạy nhất mọi thời đại. Đây là một câu chuyện thúc giục độc giả theo đuổi giấc mơ của mình.</p>
                                                    <div class="availability">
                                                        <span>Còn hành</span>
                                                        <span><a href="cart.html">Thêm vào giỏ hàng</a></span>
                                                    </div>
                                                </div>
                                            </div>
										</div>
										@endforeach
                                    </div>
								</div>
		{{-- List End --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Area End -->
   
		<!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="img/quick-view.jpg">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h1>Frame Princes Cut Diamond</h1>
                                    <div class="price-box">
                                        <p class="s-price"><span class="special-price"><span class="amount">$280.00</span></span></p>
                                    </div>
                                    <a href="product-details.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Quickview Product-->	
		@endsection