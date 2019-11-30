@extends('layouts.customer')
        @section('content')

		<!-- Map Area Start -->
		<div class="map-area">
			<div id="googleMap" style="width:100%;height:445px;"></div>
		</div>
		<!-- Map Area End -->	
		<!-- Address Information Area Start -->
		<div class="address-info-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4 hidden-sm">
						<div class="address-single">
							<div class="all-adress-info">
								<div class="icon">
									<span><i class="fa fa-user-plus"></i></span>
								</div>
								<div class="info">
									<h3>Số Điện Thoại</h3>
									<p>+(84)-82690-3960</p>
									<p>+(84)-52297-0498</p>
									{{-- <p>+(05)-15689-5698-44</p> --}}
								</div>
							</div>
						</div>						
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="address-single">
							<div class="all-adress-info">
								<div class="icon">
									<span><i class="fa fa-map-marker"></i></span>
								</div>
								<div class="info">
									<h3>Địa chỉ</h3>
									<p>Ký túc xá B, Đại học Cần Thơ</p>
									<p>Xuân Khánh, Cần Thơ</p>
								</div>
							</div>
						</div>						
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="address-single no-margin">
							<div class="all-adress-info">
								<div class="icon">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="info">
									<h3>E-MAIL</h3>
									<p>minhnghia2311@gmail.com</p>
									<p>www.whilien52.com</p>
								</div>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- Address Information Area End -->
		<!-- Contact Form Area Start -->
		<div class="contact-form-area">
			<div class="container">
				<div class="about-title">
					<h3>GỬI TIN NHẮN CHO CHÚNG TÔI</h3>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="#" method="POST">
							<div class="row">
								<div class="col-md-5">
									<div class="contact-form-left">
										<input type="text" placeholder="Họ tên" name="name" id="name" />
										<input type="email" placeholder="Email" name="email" id="email" />
										<input type="text" placeholder="Phone" name="phone" id="phone" />
									</div>								
								</div>
								<div class="col-md-7">
									<div class="contact-form-right">
										<div class="input-message">
											<textarea name="message" id="message" placeholder="Nội dung"></textarea>
											<input class="btn btn-default" type="submit" value="Gửi" name="submit" id="submit">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact Form Area End -->
@endsection
@section('custom_js')
    <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 16,
				scrollwheel: false,
				center: new google.maps.LatLng(10.0298463, 105.7638958,19)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-icon.png',
				map: map
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>	
@endsection
	