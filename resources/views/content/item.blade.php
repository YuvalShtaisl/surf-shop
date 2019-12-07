@extends('master')
@section('main_content')
    <div class="page-head content-top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <ol class="breadcrumb">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li><a href="{{url('shop')}}">Products</a></li>
                        <li class="active">{{$product->ptitle}}</li>
                    </ol>
                </div>

                <div class="col-md-4 col-sm-5 header-nav text-right">
                    <a rel="previous" href="#!"><i class="lil-angle-left"></i> Previous</a>
                    <a rel="next" href="#!">Next <i class="lil-angle-right"></i></a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-head -->
    <section class="section single-product-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="product-images">
                        <div class="product-thumbnail">
                            <a href="{{url('shop/'. $product->purl. '/'. $product->purl)}}" class="fancybox"
                               rel="gallery">
                                <img src="{{asset('images/' . $product->pimage)}}" class="img-responsive">
                            </a>
                        </div>
                        <div class="product-images-carousel">
                            <div class="item">
                                <a href="build/img/products/1.jpg" class="fancybox" rel="gallery">
                                    <img src="build/img/products/1.jpg" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div><!-- /.product-images -->
                </div>

                <div class="col-sm-6 col-sm-offset-1">
                    <div class="product-details">
                        <div class="rating">
                            <div class="star-rating">
                                <span style="width:90%"></span>
                            </div>
                            <span class="rating-text">3 Reviews</span>
                            <span class="pull-right">SKU: <span>29039</span></span>
                        </div>

                        <div class="product-title">
                            <h3 class="product-name">{{$product->ptitle}}</h3>
                            <p class="product-available">Available</p>
                            <hr>
                        </div>

                        <div class="description">
                            <p>{!! $product->particle !!}</p>
                        </div>

                        <p class="price">
                            <ins>
                                <span class="amount">{{'$'.$product->price}}</span>
                            </ins>
                        </p>


                            <div class="form-group inputs-border">
                                <div class="quantity">
                                    <input type="button" value="+" class="plus">
                                    <input type="number" step="1" max="5" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <input type="button" value="-" class="minus">
                                </div>

                                <button type="button" data-id="{{$product->id}}" class="btn btn-default add-to-cart"><i
                                            class="lil-add_shopping_cart"></i>
                                    Add to cart
                                </button>
                            </div>


                        <div class="product-share">
                            <span>Share on</span>
                            <ul class="social">
                                <li><a href="#!"><i class="lil-facebook"></i></a></li>
                                <li><a href="#!"><i class="lil-twitter"></i></a></li>
                                <li><a href="#!"><i class="lil-google-plus"></i></a></li>
                                <li><a href="#!"><i class="lil-linkedin"></i></a></li>
                                <li><a href="#!"><i class="lil-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- /.product-details -->
                </div>

                <div class="col-sm-12">
                    <div class="tabs-wrapper">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#tab-description" aria-controls="tab-description"
                                   data-toggle="tab">Description</a>
                            </li>
                            <li>
                                <a href="#tab-information" aria-controls="tab-information" data-toggle="tab">Additional
                                    Information</a>
                            </li>
                            <li>
                                <a href="#tab-reviews" aria-controls="tab-reviews" data-toggle="tab">Reviews (3)</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-description">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the standard dummy text.Lorem Ipsum
                                    is simply dummy text of the printing and typesetting industry.</p>

                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry.</p>
                            </div>
                            <div class="tab-pane" id="tab-information">
                                <table class="table shop_attributes">
                                    <tbody>
                                    <tr>
                                        <th>Color</th>
                                        <td>
                                            <p>Red, Black, Yellow</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Materials</th>
                                        <td>
                                            <p>Wood</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions</th>
                                        <td>
                                            <p>H:1.5″ x W: 2.75″ x D: 3.0″</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="tab-reviews">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <ol class="reviews">
                                            <li class="review">
                                                <div class="media">
                                                    <div class="media-left media-middle">
                                                        <a href="#!">
                                                            <img class="media-object avatar"
                                                                 src="build/img/users/1.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="rating pull-right">
                                                            <div class="star-rating">
                                                                <span style="width:90%"></span>
                                                            </div>
                                                        </div>
                                                        <h4 class="media-heading">Hussam 3bd</h4>
                                                        <time datetime="2016-06-07T11:44:50+00:00">June 7, 2016</time>
                                                        <div class="description">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the standard
                                                            dummy text.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol><!-- /.reviews -->
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-md-offset-1 review-form-wrapper">
                                        <form action="#!" method="post" class="review-form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name*" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email*" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="rating">Rating</label>
                                                <div class="rating-stars" data-rating="4"></div>
                                                <input type="hidden" name="rating" value="4" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Your Review*" rows="5"
                                                          required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-default">Leave Rating</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /.tabs-wrapper -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.products -->
    <!-- Related Products -->
    <section class="section related-products second-style no-padding-top">
        <div class="container">
            <div class="section-title text-center">
                <h3><i class="line"></i>Related Products<i class="line"></i></h3>
            </div>
            <div id="related-products">
                <div class="product" data-product-id="1">
                    <div class="inner-product">
                        <span class="onsale">Sale!</span>
                        <div class="product-thumbnail">
                            <img src="build/img/products/2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="product-details text-center">
                            <div class="product-btns">
								<span data-toggle="tooltip" data-placement="top" title="Add To Cart">
									<a href="#!" data-id="{{$product->id}}" class="li-icon add-to-cart"><i
                                                class="lil-shopping_cart"></i></a>
								</span>
                                <span data-toggle="tooltip" data-placement="top" title="Add to Favorites">
									<a href="#!" class="li-icon"><i class="lil-favorite"></i></a>
								</span>
                                <span data-toggle="tooltip" data-placement="top" title="View">
									<a href="product.html" class="li-icon view-details"><i class="lil-search"></i></a>
								</span>
                            </div>
                        </div>
                    </div>
                    <h3 class="product-title"><a href="#!"></a></h3>
                    <div class="star-rating">
                        <span style="width:90%"></span>
                    </div>
                    <p class="product-price">
                        <ins>
                            <span class="amount">$66.50</span>
                        </ins>
                        <del>
                            <span class="amount">$150.00</span>
                        </del>
                    </p>
                </div><!-- /.product -->
            </div>
        </div><!-- /.container -->
    </section><!-- /.related-products -->

@endsection