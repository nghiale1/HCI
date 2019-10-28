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
									<h3>PHONE</h3>
									<p>+(02)-12345-6789-55</p>
									<p>+(05)-15689-5698-44</p>
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
									<h3>ADDRESS</h3>
									<p>Mhilara Street 205,</p>
									<p>Roitan city, USA.</p>
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
									<p>info123@gmail.com</p>
									<p>www.companyweb.com</p>
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
					<h3>LEAVE A MESSAGE</h3>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="#" method="POST">
							<div class="row">
								<div class="col-md-5">
									<div class="contact-form-left">
										<input type="text" placeholder="Your Name" name="name" id="name" />
										<input type="email" placeholder="Your Email" name="email" id="email" />
										<input type="text" placeholder="Your phone" name="phone" id="phone" />
									</div>								
								</div>
								<div class="col-md-7">
									<div class="contact-form-right">
										<div class="input-message">
											<textarea name="message" id="message" placeholder="Your Message"></textarea>
											<input class="btn btn-default" type="submit" value="SEND" name="submit" id="submit">
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
	