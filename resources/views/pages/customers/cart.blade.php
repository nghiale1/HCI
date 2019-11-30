@extends('layouts.customer')
        @section('content')
		<!-- Cart Area Start -->
		<div class="shopping-cart-area section-padding">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
                        <div class="wishlist-table-area table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-remove">Xóa</th>
                                        <th class="product-image">Hình ảnh</th>
                                        <th class="t-product-name">Tên sản phẩm</th>
                                        <th class="product-edit">Thay đổi</th>
                                        <th class="product-unit-price">Đơn giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-remove">
                                            <a href="#">
                                                <i class="flaticon-delete"></i>
                                            </a>
                                        </td>
                                        <td class="product-image">
                                            <a href="#">
                                                <img src="{{asset('/img/Product/8935235213746.jpg')}}" alt="">
                                            </a>
                                        </td>
                                        <td class="t-product-name">
                                            <h3>
                                                <a href="#">NHÀ GIẢ KIM (TÁI BẢN 2017)</a>
                                            </h3>
                                        </td>
                                        <td class="product-edit">
                                            <p>
                                                <a href="#">Edit</a>
                                            </p>
                                        </td>
                                        <td class="product-unit-price">
                                            <p>55,200 đ</p>
                                        </td>
                                        <td class="product-quantity product-cart-details">
											<input type="number" value="1">
										</td>
                                        <td class="product-quantity">
											<p>55,200 đ</p>
										</td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove">
                                            <a href="#">
                                                <i class="flaticon-delete"></i>
                                            </a>
                                        </td>
                                        <td class="product-image">
                                            <a href="#">
                                                <img src="{{asset('/img/Product/9558a365adde6688d4c71a200d78310c.jpg')}}" alt="">
                                            </a>
                                        </td>
                                        <td class="t-product-name">
                                            <h3>
                                                <a href="#">Đắc Nhân Tâm (Khổ Lớn)</a>
                                            </h3>
                                        </td>
                                        <td class="product-edit">
                                            <p>
                                               <a href="#">Edit</a>
                                            </p>
                                        </td>
                                        <td class="product-unit-price">
                                            <p>51,680 đ</p>
                                        </td>
                                        <td class="product-quantity product-cart-details">
											<input type="number" value="1">
										</td>
                                        <td class="product-quantity">
											<p>51,680 đ</p>
										</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>	
                        <div class="shopingcart-bottom-area">
                            <a class="left-shoping-cart" href="#">Tiếp tục mua sắm</a>
                            <div class="shopingcart-bottom-area pull-right">
								<a class="right-shoping-cart" href="#">Xóa giỏ hàng</a>
								<a class="right-shoping-cart" href="#">Cập nhật lại giỏ hàng</a>
							</div>
                        </div>	                
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Cart Area End -->
        <!-- Discount Area Start -->
        <div class="discount-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        
                        <div class="discount-main-area">
                            <div class="discount-top">
                                <h3>Mã giảm giá</h3>
                                {{-- <p>Nhập mã giảm giá của bạn vào khu vực bên dưới</p> --}}
                            </div>
                            <div class="discount-middle">
                                <input type="text" placeholder="">
                                <a class="" href="#">Đồng ý</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="subtotal-main-area">
                            <div class="subtotal-area">
                                <h2>Tạm tính:<span>106,880 đ</span></h2>
                            </div>
                            <div class="subtotal-area">
                                <h2>Tổng cộng:<span>126,880 đ</span></h2>
                            </div>
                            <a href="#">Thanh toán</a>
                            {{-- <p>Checkout With Multiple Addresses</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discount Area End -->	
		@endsection