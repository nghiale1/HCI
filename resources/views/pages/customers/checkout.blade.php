@extends('layouts.customer')
        @section('content')
        <!-- Check Out Area Start -->
        <div class="check-out-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										   <span>1</span>
										   Đăng nhập
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-6 col-sm-6">
                                                <div class="checkout-collapse-inner">
                                                    <h2 class="collapse-title">Thanh toán không đăng nhập</h2>
                                                    <h4 class="collapse-sub-title">Đăng ký thành viên cho các lần thanh toán sau:</h4>
                                                    <form action="#">
                                                        <div class="check-register">
                                                            <input type="radio" />
                                                            <label>Thanh toán </label>
                                                        </div>
                                                        <div class="check-register">
                                                            <input type="radio" />
                                                            <label>Đăng ký</label>
                                                        </div>													
                                                    </form>
                                                    <p>Đăng ký và tiết kiệm thời gian!</p>
                                                    <p>Đăng ký để thuận tiện thanh toán sau này:</p>
                                                    <p>Thanh toán nhanh và dễ dàng hơn</p>
                                                    <p>Dễ dàng truy cập vào lịch sử đặt hàng và trạng thái đơn hàng</p>
                                                    <button class="btn btn-default btn-checkout">Tiếp túc</button>
                                                </div>
											</div>
											<div class="col-md-6 col-sm-6">
											<div class="checkout-collapse-inner">
												<h2 class="collapse-title">Đăng nhập</h2>
												<h4 class="collapse-sub-title">Bạn đã có tài khoản?</h4>
												<p class="login-info">Vui lòng điền đầy đủ thông tin bên dưới:</p>
												<form action="#">
													<div class="form-row">
														<input type="email" placeholder="Địa chỉ Email*"/>
													</div>
													<div class="form-row">
														<input type="password" placeholder="Mật khẩu*"/>
													</div>	
													<div class="check-register login-button">
														<a href="#">Quên mật khẩu?</a>
														<input class="btn btn-default" type="submit" value="Đăng nhập"/>
													</div>												
												</form>
											</div>
											</div>
										</div>
									</div>
								</div>                                
                            </div>
                            <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										   <span>2</span>
										   Địa chỉ nhận hàng
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<div class="row">
											{{-- <div class="col-md-12">
												<div class="shop-select">
													<label>Country <span class="required">*</span></label>
													<select>
														<option value="volvo">Bangladesh</option>
														<option value="saab">Algeria</option>
														<option value="mercedes">Afghanistan</option>
														<option value="audi">Ghana</option>
														<option value="audi2">Albania</option>
														<option value="audi3">Bahrain</option>
														<option value="audi4">Colombia</option>
														<option value="audi5">Dominican Republic</option>
													</select> 										
												</div>	
											</div>	 --}}
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" placeholder="Họ *">
												</p>
											</div>	
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" placeholder="Tên *">
												</p>
											</div>	
											{{-- <div class="col-md-12">
												<p class="form-row">
													<input type="text" placeholder="Company Name">
												</p>
											</div>	 --}}
											{{-- <div class="col-md-12">
												<p class="form-row">
													<input type="text" placeholder="Địa chỉ">
												</p>
											</div>
											<div class="col-md-12">
												<p class="form-row">
													<input type="text" placeholder="Town / City">
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" placeholder="State / County *">
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" placeholder="Postcode / Zip">
												</p>
											</div> --}}
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" placeholder="Địa chỉ Email *">
												</p>
											</div>
											<div class="col-md-6">
												<p class="form-row">
													<input type="text" placeholder="Số điện thoại *">
												</p>
											</div>
											<div class="col-md-12">
												<label class="checbox-info">
													<input type="checkbox" id="cbox">
													Tạo tài khoản mới?
												</label>
												<div id="cbox_info">
													<p>Tạo một tài khoản bằng cách nhập thông tin dưới đây. Nếu bạn là khách hàng cũ, vui lòng đăng nhập ở đầu trang.</p>
													<p class="form-row form-row-phone">
														<label>Số điện thoại<span class="required">*</span></label>
														<input type="text" placeholder="Số điện thoại">
													</p>									
												</div>
											</div>											
										</div>
									</div>
								</div>
                            </div>
                            <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										   <span>3</span>
										   Ghi chú
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<div class="different-address">
											<div class="ship-different-title">
												<h3>
													<label>Gửi đến địa chỉ khác?</label>
													<input type="checkbox" id="ship-box">
												</h3>
											</div>
											<div id="ship-box-info" class="row">
												<div class="col-md-12">
													<div class="shop-select">
														<label>Country <span class="required">*</span></label>
														<select>
															<option value="volvo">Bangladesh</option>
															<option value="saab">Algeria</option>
															<option value="mercedes">Afghanistan</option>
															<option value="audi">Ghana</option>
															<option value="audi2">Albania</option>
															<option value="audi3">Bahrain</option>
															<option value="audi4">Colombia</option>
															<option value="audi5">Dominican Republic</option>
														</select> 										
													</div>	
												</div>	
												<div class="col-md-6">
													<p class="form-row">
														<input type="text" placeholder="First Name *">
													</p>
												</div>	
												<div class="col-md-6">
													<p class="form-row">
														<input type="text" placeholder="Last Nane *">
													</p>
												</div>	
												<div class="col-md-12">
													<p class="form-row">
														<input type="text" placeholder="Company Name">
													</p>
												</div>	
												<div class="col-md-12">
													<p class="form-row">
														<input type="text" placeholder="Street address *">
													</p>
												</div>
												<div class="col-md-12">
													<p class="form-row">
														<input type="text" placeholder="Town / City *">
													</p>
												</div>
												<div class="col-md-6">
													<p class="form-row">
														<input type="text" placeholder="State / County *">
													</p>
												</div>
												<div class="col-md-6">
													<p class="form-row">
														<input type="text" placeholder="Postcode / Zip *">
													</p>
												</div>
												<div class="col-md-6">
													<p class="form-row">
														<input type="text" placeholder="Email Address *">
													</p>
												</div>
												<div class="col-md-6">
													<p class="form-row">
														<input type="text" placeholder="Phone *">
													</p>
												</div>											
											</div>
											<div class="order-notes">
												<label>Ghi chú</label>
												<textarea placeholder="Ghi chú về đơn hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng." rows="10" cols="30" id="checkout-mess"></textarea>
											</div>
										</div>								
									</div>
								</div>
                            </div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										   <span>4</span>
										   Phương thức thanh toán
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body no-padding">
										<div class="payment-met">
											<form action="#" id="payment-form">
												<ul class="form-list">
													<li class="control">
														<input type="radio" class="radio" title="Check / Money order" name="payment[method]" id="p_method_checkmo">
														<label for="p_method_checkmo">Thanh toán khi nhận hàng </label>
													</li>
													<li class="control">
														<input type="radio" class="radio" title="Credit Card (saved)" name="payment[method]" id="p_method_ccsave">
														<label for="p_method_ccsave">Thanh toán bằng thẻ </label>
													</li>
												</ul>
											</form>
											<div class="buttons-set">
												<button class="btn btn-default">Tiếp túc</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFive">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										   <span>5</span>
										   Xác nhận
										</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									<div class="panel-body no-padding">
										<div class="order-review" id="checkout-review">    
											<div class="table-responsive" id="checkout-review-table-wrapper">
												<table class="data-table" id="checkout-review-table">
													<thead>
														<tr>
															<th rowspan="1">Tên sản phẩm</th>
															<th colspan="1">Giá</th>
															<th rowspan="1">SL</th>
															<th colspan="1">Thành tiền</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><h3 class="product-name">NHÀ GIẢ KIM (TÁI BẢN 2017)</h3></td>
															<td><span class="cart-price"><span class="check-price">55,200 đ</span></span></td>
															<td>1</td>
															<!-- sub total starts here -->
															<td><span class="cart-price"><span class="check-price">55,200 đ</span></span></td>
														</tr>
														<tr>
															<td><h3 class="product-name">Đắc Nhân Tâm (Khổ Lớn)</h3></td>
															<td><span class="cart-price"><span class="check-price">51,680 đ</span></span></td>
															<td>1</td>
															<!-- sub total starts here -->
															<td><span class="cart-price"><span class="check-price">51,680 đ</span></span></td>
														</tr>
													</tbody>
													<tfoot>
														<tr>
															<td colspan="3">Tạm tính</td>
															<td><span class="check-price">106,880‬</span></td>
														</tr>
														<tr>
															<td colspan="3">Phí vận chuyển</td>
															<td><span class="check-price">20.000đ</span></td>
														</tr>
														<tr>
															<td colspan="3"><strong>Tổng tiền</strong></td>
															<td><strong><span class="check-price">126,880‬</span></strong></td>
														</tr>
													</tfoot>
												</table>
											</div>
											<div id="checkout-review-submit">
												<div class="cart-btn-3" id="review-buttons-container">
													<p class="left">Quên một món đồ?  <a href="#">Chỉnh sửa giỏ hàng của bạn</a></p>
													<button type="submit" title="Đặt hàng" class="btn btn-default"><span>Đặt hàng</span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3">
                        <div class="checkout-widget">
                            <h2 class="widget-title">Vui lòng kiểm tra kỹ</h2>
                            <ul>
								<li><a href="#"><i class="fa fa-minus"></i> Tài khoản đặt hàng</a></li>
								<li><a href="#"><i class="fa fa-minus"></i> Địa chỉ nhận hàng</a></li>
								<li><a href="#"><i class="fa fa-minus"></i> Phương thức thanh toán</a></li>
								<li><a href="#"><i class="fa fa-minus"></i> Sản phẩm</a></li>
								
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Check Out Area End -->
		<!-- Our Team Area Start -->
		<div class="our-team-area">
		    <h2 class="section-title">Sản phẩm liên quan</h2>
		    <div class="container">
		        <div class="row">
		        <div class="team-list indicator-style">
		            <div class="col-md-3">
		                <div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/1.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#">rokan tech</a>
		                        <p>WRITER</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/2.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#">mirinda</a>
		                        <p>AUTHOR</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/3.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#">jone doe</a>
		                        <p>WRITER</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/4.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#">nick kon</a>
		                        <p>WRITER</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/2.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#">mirinda</a>
		                        <p>AUTHOR</p>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-3">
		                <div class="single-team-member">
		                    <a href="#">
		                        <img src="img/about/team/1.jpg" alt="">
		                    </a>
		                    <div class="member-info">
		                        <a href="#">rokan tech</a>
		                        <p>WRITER</p>
		                    </div>
		                </div>
		            </div>
		        </div>
		        </div>
		    </div>
		</div>
		<!-- Our Team Area End -->
		@endsection