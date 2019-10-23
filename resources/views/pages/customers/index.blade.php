@extends('layouts.customer')
@section('content')
@include('layouts.customer.slider')
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
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/1.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">East of eden</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/5.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The historian</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/2.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">People of the book</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/6.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">Cold mountain</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/3.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The secret letter</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/7.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The historian</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/4.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">Lone some dove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/8.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The secret garden</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/1.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">East of eden</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/5.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The historian</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/2.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">People of the book</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/6.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">Cold mountain</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="sale">
                                <div class="featured-product-list indicator-style">
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/2.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">People of the book</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/6.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">Cold mountain</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/3.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The secret letter</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/7.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The historian</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/4.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">Lone some dove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/8.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The secret garden</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/1.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">East of eden</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/5.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The historian</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/1.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">East of eden</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/5.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The historian</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-p-banner">
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/4.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">East of eden</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single-banner">
                                                <div class="product-wrapper">
                                                    <a href="#" class="single-banner-image-wrapper">
                                                        <img alt="" src="{{asset('img/featured/8.jpg')}}">
                                                        <div class="price"><span>$</span>160</div>
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
                                                <div class="banner-bottom text-center">
                                                    <a href="#">The historian</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>             
                </div>
            </div>
            <!-- Featured Product Area End -->
@endsection

