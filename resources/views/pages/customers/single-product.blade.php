@extends('layouts.customer')
@section('content')
<style>
#book_image{
    width: 150px;			
	height: 160px;
	/* margin: auto; */
    float: left;
	display: block;
}
ul.product-tabs {
    text-align: left;
}
#avatar_product{
    max-width: 270px;
    
    height: 280px;
    margin: auto;
    display: block;
}
#title_book{
    height: 55px;
}
.data-table {
    width: 100%;
    border: 1px solid #d9dde3;
    box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.1);
    background: transparent;
}
#product-attribute-specs-table{
    border-collapse: collapse;
}
.table-striped > tbody > tr:nth-child(odd) > td, .table-striped > tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}
.product-tabs-content .data-table .label, .product-tabs-content .data-table .data {
    font-size: 1.1em !important;
    color: #2A2A2A;
}
.data-table tr.odd th {
    border-right: 1px solid #d9dde3;
    color: #777;
    padding: 10px;
}
.data-table tbody th{
    border: none;
}
.label {
    display: table-cell;
    font-size: 100%!important;
    line-height: 1.6;
}
tr.even th {
    color: #777;
}
td.data.last {
    padding-left: 25px;
}
th.label {
    font-weight: normal;
}
</style>
        <!-- Single Product Area Start -->
        <div class="single-product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="single-product-image-inner">
                            <!-- Tab panes -->
                            {{-- @foreach($book_avatar as $item) --}}
                            <div class="tab-content">
                                
                                <div role="tabpanel" class="tab-pane active" id="one">
                                    <a class="venobox" href="{{asset($book_avatar->image_path)}}" data-gall="gallery" title="">
                                        <img src="{{asset($book_avatar->image_path)}}" alt="">
                                    </a>
                                </div>
                                {{-- <div role="tabpanel" class="tab-pane" id="two">
                                    <a class="venobox" href="{{asset($item->image_path)}}" data-gall="gallery" title="">
                                        <img src="{{asset($item->image_path)}}" alt="">
                                    </a>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="three">
                                    <a class="venobox" href="{{asset($item->image_path)}}" data-gall="gallery" title="">
                                        <img src="{{asset($item->image_path)}}" alt="">
                                    </a>
                                </div> --}}
                            </div>
                            {{-- @endforeach --}}
                            <!-- Nav tabs -->
                            
                            <ul class="product-tabs" role="tablist">
                                {{-- {{dd($book_image)}} --}}
                                @if($book_image != null)
                                    @foreach($book_image as $item)
                                    <li role="presentation" class="active"><a href="{{asset($item->image_path)}}" aria-controls="one" role="tab" data-toggle="tab"><img src="{{asset($item->image_path)}}" alt="" id="book_image"></a></li>
                                    {{-- <li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab"><img src="{{asset($item->image_path)}}" alt=""></a></li>
                                    <li role="presentation"><a href="#three" aria-controls="three" role="tab" data-toggle="tab"><img src="{{asset($item->image_path)}}" alt=""></a></li> --}}
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        
                    </div> 
                    <!-- Tab right -->
                    <div class="col-md-6 col-sm-5">
                        <div class="single-product-details">
                            <div class="list-pro-rating">
                                <i class="fa fa-star icolor"></i>
                                <i class="fa fa-star icolor"></i>
                                <i class="fa fa-star icolor"></i>
                                <i class="fa fa-star icolor"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        <h2>{{$book_avatar->book_title}}</h2>
                            <div class="availability">
                                <span>Còn hàng</span>
                            </div>
                            <p>Nhà giả kim là một cuốn sách được xuất bản lần đầu ở Brasil năm 1988 và là cuốn sách nổi tiếng nhất của nhà văn Paulo Coelho. Nó được dịch ra 67 ngôn ngữ và bán ra tới 65 triệu bản, trở thành một trong những quyển sách bán chạy nhất mọi thời đại. Đây là một câu chuyện thúc giục độc giả theo đuổi giấc mơ của mình. </p>
                            <div class="single-product-price">
                                <h1 style="    margin-bottom: 5px;">{{number_format($book_avatar->sale_price)}} đ</h1>
                                <br>
                                <h3 style="text-decoration: line-through;">{{number_format($book_avatar->book_price)}} đ</h3>
                                    
                            </div>
                            <div class="product-attributes clearfix">
                                <span class="pull-left" id="quantity-wanted-p">
									<span class="dec qtybutton">-</span>
									<input type="text" value="1" class="cart-plus-minus-box">
									<span class="inc qtybutton">+</span>	
								</span>
                               <span>
      {{-- add to cart                              --}}
                                    <a class="cart-btn btn-default" href="cart.html">
                                        <i class="flaticon-shop"></i>
                                        Thêm vào giỏ hàng
                                    </a>
                               </span>
                            </div>
                            <div class="add-to-wishlist">
                                <a class="wish-btn" href="cart.html">
                                    <i class="fa fa-heart-o"></i>
                                    Thêm vào danh sách yêu thích
                                </a>
                            </div>
                            <div class="single-product-categories">
                               <label>Thể loại:</label>
                                <span>Sách tiếng Việt, sách văn học, top seller</span>
                            </div>
                            <div class="social-share">
                                <label>Share: </label>
                                <ul class="social-share-icon">
                                    <li><a href="#"><i class="flaticon-social"></i></a></li>
                                    <li><a href="#"><i class="flaticon-social-1"></i></a></li>
                                    <li><a href="#"><i class="flaticon-social-2"></i></a></li>
                                </ul> 
                            </div>
                            <div id="product-comments-block-extra">
								<ul class="comments-advices">
									<li>
										<a href="#" class="open-comment-form">Bình luận</a>
									</li>
								</ul>
							</div>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="col-md-9">
                        <div class="p-details-tab-content">
                            <div class="p-details-tab">
                                <ul class="p-details-nav-tab" role="tablist">
                                    <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">Mô tả</a></li>
                                    <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Chi tiết</a></li>
                                    <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Review sách</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            {{-- detail --}}
                            <div class="tab-content review">
                                <div role="tabpanel" class="tab-pane active" id="more-info">
                                    <p>{!!$book_avatar->book_description!!}</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="data">
                                    <table class="table-data-sheet">
                                        <tbody>
                                            <tr class="odd">
                                                
                                                <td>Mã hàng</td>
                                                <td>{{$detail_book->book_id}}</td>
                                                
                                            </tr>
                                            <tr class="even">
                                                <td>Tên Nhà Cung Cấp</td>
                                                <td>{{$detail_book->book_company_name}}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td>Tác giả</td>
                                                <td>{{$detail_book->author_name}}</td>
                                            </tr>
                                            @if($detail_book->tranlator_name!=null)
                                            <tr class="even">
                                                <td>Người Dịch</td>
                                                <td>{{$detail_book->tranlator_name}}</td>
                                            </tr>
                                            @endif
                                            <tr class="odd">
                                                <td>NXB</td>
                                                <td>{{$detail_book->publishing_house_name}}</td>
                                            </tr>
                                            <tr class="even">
                                                <td>Năm XB</td>
                                                <td>{{$detail_book->book_releasedate}}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td>Trọng lượng (gr)</td>
                                                <td>{{$detail_book->book_weight}}</td>
                                            </tr>
                                            <tr class="even">
                                                <td>Kích thước</td>
                                                <td>{{$detail_book->book_size}}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td>Số trang</td>
                                                <td>{{$detail_book->book_pagenumber}}</td>
                                            </tr>
                                            <tr class="even">
                                                <td>Hình thức</td>
                                                <td>{{$detail_book->book_form}}</td>
                                            </tr>
                                        </tbody>
                                   </table>
                                </div>
                                {{-- review --}}
                                <div role="tabpanel" class="tab-pane" id="reviews">
                                    <div id="product-comments-block-tab">
                                            <table class="data-table table-striped" id="product-attribute-specs-table">
                                                <colgroup><col width="25%"><col></colgroup>
                                                    <tbody>
                                                        <tr class="first odd">
                                                            <th class="label">Mã hàng</th>
                                                            <td class="data last">{{$detail_book->book_id}}</td>
                                                        </tr>
                                                                                                                                                                                                                                                                                                            <tr class="even">
                                                            <th class="label">Tên Nhà Cung Cấp</th>
                                                            <td class="data last">
                                                            <a class="xem-chi-tiet" href="huy-hoang">{{$detail_book->book_company_name}}</td>
                                                        </tr>                                                                                                               <tr class="odd">
                                                            <th class="label">Tác giả</th>
                                                            <td class="data last">{{$detail_book->author_name}}</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th class="label">Người Dịch</th>
                                                            <td class="data last">{{$detail_book->tranlator_name}}</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th class="label">NXB</th>
                                                            <td class="data last">{{$detail_book->publishing_house_name}}</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th class="label">Năm XB</th>
                                                            <td class="data last">{{$detail_book->book_releasedate}}</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th class="label">Trọng lượng (gr)</th>
                                                            <td class="data last">{{$detail_book->book_weight}}</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th class="label">Kích thước</th>
                                                            <td class="data last">{{$detail_book->book_size}}</td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th class="label">Số trang</th>
                                                            <td class="data last">{{$detail_book->book_pagenumber}}</td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th class="label">Hình thức</th>
                                                            <td class="data last">{{$detail_book->book_form}}</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>  
            </div>
        </div>
        <!-- Single Product Area End -->
        <!-- Related Product Area Start -->
        <div class="related-product-area">
            <h2 class="section-title">Sản phẩm liên quan</h2>
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
                                                        <div class="price" style="text-decoration: line-through;">{{number_format($item->book_price)}}<span> đ</span></div>
                                                        <div class="price" style="padding-top:6%">{{number_format($item->sale_price)}}<span> đ</span></div>
                                                        <div class="rating-icon">
                                                            <i class="fa fa-star icolor"></i>
                                                            <i class="fa fa-star icolor"></i>
                                                            <i class="fa fa-star icolor"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
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
                                                    <a href="#">{{$item->book_title}}</a>
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
        <!-- Related Product Area End -->
		@endsection