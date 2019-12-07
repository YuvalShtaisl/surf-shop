@extends('master')
@section('main_content')

    <div class="page-head content-top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <ol class="breadcrumb">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li class="active">Products</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-head -->

    <section class="section products-grid second-style">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="shop-sidebar shop-sidebar-left">
                        <div class="widgets">
                            <div class="widget widget-search">
                                <h3 class="widget-title">What's on your mind<span class="typed-cursor">?</span></h3>
                                <form action="#!" method="GET" class="inputs-border inputs-bg">
                                    <input type="text" class="form-control" placeholder="Search Products..">
                                </form>
                            </div><!-- /.widget-search -->

                            <div class="widget widget-price-filter">
                                <h3 class="widget-title">Filter By Price</h3>
                                <div class="price-slider-wrapper">
                                    <div id="filter-slider" class="filter-slider" data-min="10" data-max="1000"
                                         data-values="150,700"></div>
                                </div>
                                <form action="">
                                    <div id="amount-slider">
                                        <strong>Price: </strong><span>$150 — $700</span>
                                    </div>
                                    <input type="hidden" id="price" value="150,700">
                                    <button type="button" class="btn btn-default">Filter</button>
                                </form>
                            </div><!-- /.widget-price-filter -->

                            <div class="widget widget-categories">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    <li>
                                        <a href="#!">Chairs</a>
                                    </li>

                                </ul>
                            </div><!-- /.widget-categories -->

                            <div class="widget widget-top-seller">
                                <h3 class="widget-title">Top Seller</h3>
                                <ul>
                                    <li class="clearfix">
                                        <div class="media">
                                            <div class="media-left pull-left">
                                                <a href="#">
                                                    <img class="media-object img-responsive"
                                                         src="build/img/products/20.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="product.html">Men Cap</a></h4>
                                                <div class="rating">
                                                    <div class="star-rating">
                                                        <span style="width:90%"></span>
                                                    </div>
                                                </div>
                                                <p class="price">
                                                    <del>
                                                        <span class="amount">$200.00</span>
                                                    </del>
                                                    <ins>
                                                        <span class="amount">$450.00</span>
                                                    </ins>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /.widget-top-seller -->

                            <div class="widget widget-instagram">
                                <h3 class="widget-title">Instagram</h3>
                                <ul class="row">
                                    <li class="col-xs-4">
                                        <a href="#!">
                                            <img src="build/img/products/23.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-4">
                                        <a href="#!">
                                            <img src="build/img/products/20.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-4">
                                        <a href="#!">
                                            <img src="build/img/products/18.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-4">
                                        <a href="#!">
                                            <img src="build/img/products/19.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-4">
                                        <a href="#!">
                                            <img src="build/img/products/24.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-4">
                                        <a href="#!">
                                            <img src="build/img/products/12.jpg" class="img-responsive" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- /.widget-instagram -->
                        </div><!-- /.widgets -->
                    </div><!-- /.shop-sidebar -->
                </div>

                <div class="col-md-9">
                    <div class="masonry row">
                        @foreach($products as $product)
                            <div class="product col-md-4 col-sm-6 col-xs-12" data-product-id="1">
                                <div class="inner-product">
                                    <div class="product-thumbnail">
                                        <img src="{{asset('images/' . $product->pimage)}}"
                                             class="img-responsive"
                                             alt="">
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="product-btns">
										<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
											<a href="" data-id="{{$product->id}}" class="li-icon add-to-cart"><i
                                                        class="lil-shopping_cart"></i></a>
										</span>
                                            <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
											<a href="#!" class="li-icon"><i class="lil-favorite"></i></a>
										</span>
                                            <span data-toggle="tooltip" data-placement="top" title="View">
											<a href="{{url('shop/' .$product->curl. '/'. $product->purl)}}"
                                               class="li-icon
											view-details"><i
                                                        class="lil-search"></i></a>
										</span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="product-title"><a href="{{url('shop/' .$product->ptitle)}}">{{$product->ptitle}}</a></h3>
                                <div class="star-rating">
                                    <span style="width:90%"></span>
                                </div>
                                <p class="product-price">
                                    <ins>
                                        <span class="amount">{{'$'.$product->price}}</span>
                                    </ins>
                                </p>
                            </div><!-- /.product -->
                        @endforeach
                    </div><!-- /.masonry -->

                    <div class="clearfix text-center">
                        <a href="#!" class="btn btn-default">Show More</a>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.products-grid -->

@endsection