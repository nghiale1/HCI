@extends('layouts.customer')
@section('content')
@include('layouts.customer.slider')
<style>
#avatar_product{
    max-width: 270px;
    
    height: 280px;
    margin: auto;
    display: block;
}
#title_book{
    /* height: 55px; */
    height: 110px;
	vertical-align: bottom;
    padding: 0;
}
#flash_sale_watch{
    text-align: center; 
    color: red;
}
.section-padding {
    padding: 20px 0;
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
.banner-bottom.text-center {
    height: 110px;
	vertical-align: bottom;
}
.rating-icon {
    vertical-align: bottom;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 5px;
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
<script>
        // Thiết lập thời gian đích mà ta sẽ đếm
        var countDownDate = new Date("Jan 5, 2020 15:37:25").getTime();
       
        // cập nhập thời gian sau mỗi 1 giây
        var x = setInterval(function() {
       
          // Lấy thời gian hiện tại
          var now = new Date().getTime();
       
          // Lấy số thời gian chênh lệch
          var distance = countDownDate - now;
       
          // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
       
          // HIển thị chuỗi thời gian trong thẻ p
          document.getElementById("flash_sale_watch").innerHTML = days + " Ngày " + hours + " Giờ "
          + minutes + " Phút " + seconds + " Giây ";
       
          // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("flash_sale_watch").innerHTML = "Thời gian đếm ngược đã kết thúc";
          }
        }, 1000);
      </script>
    		<!-- Featured Product Area Start -->
            <div class="featured-product-area section-padding">
                    <h2 class="section-title">Flash Sale</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-menu">
                                    <p id="flash_sale_watch"></p>
                                </div>         
                            </div>
                        </div>   
                        <div class="row">
                            <div class="product-list tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="arrival">
                                    <div class="featured-product-list indicator-style">
                                        @foreach ($book as $item)
                                        <div class="single-p-banner">
                                           
                                              <div class="col-md-3">
                                                <div class="single-banner">
                                                    <div class="product-wrapper" >
                                                        <a href="{{route('customer/single',$item->book_id)}}" class="single-banner-image-wrapper">
    
                                                            <img id=avatar_product alt="" src="{{asset($item->image_path)}}" >
                                                            <div class="price" style="background: url('{{asset('img/sale40.png')}}') no-repeat;">
																<span class="p-sale-label discount-l-fs" style="padding-left: 7px;">50%</span>
															</div>
                                                            
                                                            {{-- <div class="price" style="text-decoration: line-through;">{{number_format($item->book_price)}}<span> đ</span></div>
                                                            <div class="price" style="padding-top:6%">{{number_format($item->sale_price)}}<span> đ</span></div> --}}
                                                            {{-- <div class="rating-icon">
                                                                <i class="fa fa-star icolor"></i>
                                                                <i class="fa fa-star icolor"></i>
                                                                <i class="fa fa-star icolor"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div> --}}
                                                        </a>
                                                        <div class="product-description">
                                                            <div class="functional-buttons">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                                <a href="#" title="Add to Wishlist">
                                                                    <i class="fa fa-heart-o"></i>
                                                                </a>
                                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                    <i class="fa fa-compress"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="banner-bottom text-center" id='title_book'>
                                                        {{-- <a href="#">{{$item->book_title}}</a> --}}
                                                        <div class="banner-bottom text-center">
                                                                <div class="banner-bottom-title">
                                                                    <div class="title_book">{{$item->book_title}}</div>
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
                                            
                                            
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>             
                    </div>
                </div>
                <!-- Featured Product Area End -->
                <!-- Featured Product Area Start -->
		<div class="featured-product-area section-padding">
                <h2 class="section-title">Sản phẩm nổi bật</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-menu">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="first-item active">
                                        <a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab">Sản phẩm mới</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#sale" aria-controls="sale" role="tab" data-toggle="tab">BEST SELLERS</a>
                                    </li>
                                </ul>
                            </div>         
                        </div>
                    </div>   
                    <div class="row">
                        <div class="product-list tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="arrival">
                                <div class="featured-product-list indicator-style">
                                    @foreach ($book as $item)
                                    <div class="single-p-banner">
                                       
                                          <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper" >
                                                    <a href="#" class="single-banner-image-wrapper">

                                                        <img id=avatar_product alt="" src="{{asset($item->image_path)}}" >
                                                        <div class="price" style="background: url('{{asset('img/sale40.png')}}') no-repeat;">
                                                            <span class="p-sale-label discount-l-fs" style="padding-left: 7px;">50%</span>
                                                        </div>
                                                        {{-- <div class="price" style="text-decoration: line-through;">{{number_format($item->book_price)}}<span> đ</span></div>
                                                        <div class="price" style="padding-top:6%">{{number_format($item->sale_price)}}<span> đ</span></div> --}}
                                                        {{-- <div class="rating-icon">
                                                            <i class="fa fa-star icolor"></i>
                                                            <i class="fa fa-star icolor"></i>
                                                            <i class="fa fa-star icolor"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div> --}}
                                                    </a>
                                                    <div class="product-description">
                                                        <div class="functional-buttons">
                                                            <a href="#" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="fa fa-heart-o"></i>
                                                            </a>
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="fa fa-compress"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="banner-bottom text-center" id='title_book'>
                                                    {{-- <a href="#">{{$item->book_title}}</a> --}}
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
                                        
                                        
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>             
                </div>
            </div>
            <!-- Featured Product Area End -->
            
@endsection

