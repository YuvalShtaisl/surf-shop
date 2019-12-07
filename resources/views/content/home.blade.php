@extends('master')

@section('main_content')
    <div class="swiper-slider">
        <!-- Slider main container -->
        <div class="swiper-container fullscreen">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper text-center">
                <!-- Slides -->
                <div class="swiper-slide" style="background-image: url({{asset('img/home/index1.jpeg')}});">
                    <div class="valign-wrapper fullscreen">
                        <div class="valign col-xs-offset-3" data-swiper-parallax="-100">
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page ipsum' will uncover many web sites still in their infancy. Various version</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url({{asset('img/home/index2.jpg')}});">
                    <div class="valign-wrapper fullscreen">
                        <div class="valign col-xs-offset-8" data-swiper-parallax="-100">
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page ipsum will uncover many web sites still in their infancy. Various version</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url({{asset('img/home/index3.jpeg')}});">
                    <div class="valign-wrapper fullscreen">
                        <div class="valign col-xs-offset-5">
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking ipsum' will uncover many web sites still in their infancy.
                                Various version</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div><!-- /.swiper-slider -->

    <section class="section collections no-padding-bottom" id="home-collections">
        <div class="container">
            <div class="row">
                <h1>quan:{{\Cart::getTotalQuantity()}}</h1>

            @if($categories)
                    @foreach($categories as $category)
                        <div class="col-sm-6 collection">
                            <a href="{{url('shop/' .$category['curl'])}}">
                                <img src="{{asset('img/' . $category['cimage'])}}" class="img-responsive"
                                     alt="">
                            </a>
                        </div><!-- /.collection -->
                    @endforeach
                @endif
            </div>
        </div><!-- /.container -->
    </section><!-- /.collections -->

    <section class="section promotions no-padding-bottom small-padding-top" id="promotions">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="promotion media">
                        <div class="media-left media-middle">
                            <i class="lil-local_atm"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Money Back</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="promotion media">
                        <div class="media-left media-middle">
                            <i class="lil-public"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">In Worldwide</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="promotion media">
                        <div class="media-left media-middle">
                            <i class="lil-local_shipping"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Free Shipping</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.promotions -->

    <section class="section products second-style" id="home-products">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 section-title text-center">
                    <h3><i class="line"></i>New Products<i class="line"></i></h3>
                    <p>Our New Products</p>
                </div>
                <div class="col-sm-12">
                    <div class="masonry row">
                        @if($products)
                            @foreach($products as $product)
                                <div class="product col-md-3 col-sm-6 col-xs-12" data-product-id="{{$product['id']}}">
                                    <div class="inner-product">
                                        <div class="product-thumbnail">
                                            <img src="{{asset('img/' . $product['pimage'])}}" class="img-responsive"
                                                 alt="">
                                        </div>
                                        <div class="product-details text-center">
                                            <div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="" class="li-icon add-to-cart"
                                               data-id="{{$product['id']}}"><i
                                                        class="lil-shopping_cart"></i></a>
										</span>
                                                <span data-toggle="tooltip" data-placement="top"
                                                      title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="lil-favorite"></i></a>
										</span>
                                                <span data-toggle="tooltip" data-placement="top" title="View">
											<a href="{{url('shop/'. $product->curl. '/'. $product->purl)}}"
                                               class="li-icon view-details"><i
                                                        class="lil-search"></i></a>
										</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="product-title"><a href="{{url('shop/' . $product->curl .'/'
                                .$product->purl)}}">{!! $product->ptitle !!}</a></h3>
                                    <p class="product-price">
                                        <ins>
                                            <span class="amount">{{'$'. $product['price']}}</span>
                                        </ins>
                                    </p>
                                </div><!-- /.product -->
                            @endforeach
                        @endisset
                    </div><!-- /.masonry -->
                </div>
                <div class="col-sm-12 text-center">
                    <a href="#!" class="btn btn-default">Show More</a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.products -->

    <section class="section brands no-padding-top" id="brands">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="logos">
                        <div class="item">
                            <a href="#!"><img src="img/brands/5.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#!"><img src="img/brands/6.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#!"><img src="img/brands/4.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#!"><img src="img/brands/7.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#!"><img src="img/brands/8.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#!"><img src="img/brands/9.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#!"><img src="img/brands/1.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#!"><img src="img/brands/2.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#!"><img src="img/brands/3.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /#brands -->
@endsection
