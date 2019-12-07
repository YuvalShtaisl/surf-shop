<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9 ie-lt10 no-js" lang="en-US"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en-US"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head  >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @if(!empty($title)) {{$title}} @endif </title>

    <!-- Load Fonts -->
    <link rel="stylesheet" type="text/css" media="all"
          href="http://fonts.googleapis.com/css?family=Inconsolata:300,400,500,700|Unica+One:300,400,500,700">
    <!-- All theme style -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css"/>
    <script> var BASE_URL = "{{url('')}}/" </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>

<div class="nav-container navbar-fixed-top nav-sticky">
    <nav class="sub-navbar">
        <ul class="pull-right list-inline">
            @if(! Session::has('user_id'))
                <li><a href="{{url('user/signin')}}">sign in</a></li>
                <li><a href="{{url('user/signup')}}">sign up</a></li>
            @else
                <li><a href="{{url('user/profile')}}">{{Session::get('user_name')}}</a></li>
            @if(Session::has('is_admin'))
                    <li><a href="{{url('cms/dashboard')}}">Admin Panel</a></li>
                @endif
                <li><a href="{{url('user/logout')}}">log out</a></li>

            @endif
            <li><a href="wishlist.html">My Wishlist</a></li>
        </ul>
        <div class="clearfix"></div>
    </nav><!-- /.sub-navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('')}}">
                    <img src="" alt="Yuval Theme">
                </a>
            </div>
            <ul class="navbar-nav navbar-icons">
                <li class="shopping-cart">
                    <a href="" class="li-icon" data-toggle="dropdown" aria-haspopup="false"
                       aria-expanded="false"><i class="lil-shopping_cart"></i>
                            <span class="badge">{{Cart::getTotalQuantity()}}</span>
                    </a>

                    <ul class="dropdown-menu">
                        <div class="dropdown-wrap" slim-scroll="√">
                            @foreach(Cart::getContent() as $cartItem)
                                <li>
                                    <a href=""><img src="" class="img-responsive product-img" alt=""></a>
                                    <div class="product-details"><p class="product-title clearfix"><a
                                                    href="">{{$cartItem->title}}</a></p>
                                        @if( !Cart::isEmpty() )
                                            <p class="product-price clearfix"><ins><span
                                                            class="amount">{{$cartItem->price}}</span></ins></p>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </div>
                        <li class="dropdown-footer">
                            <a href="{{url('shop/cart')}}">View Cart</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#!" class="li-icon" id="trigger-overlay"><i class="lil-search"></i></a></li>
            </ul>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">

                    <li><a href="{{url('')}}">safe zone</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>
                    <li>
                        <a href="#!" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">Pages <i
                                    class="caret"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="page.html">Page Default</a></li>
                            <li><a href="login-register.html">Login / Register</a></li>
                            <li><a href="404.html">Not Found (404)</a></li>
                            <li><a href="faqs.html">FAQ'S</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container -->
    </nav>
</div>
@yield('main_content')
<footer class="footer">
    <div class="container">
        <div class="widgets">
            <div class="row">
                <div class="col-sm-3 widget widget-about">
                    <h3 class="widget-title">surf shop</h3>
                    <p>We are a surfing company which was established in 1986, since we deal in the personal design of
                        surfboards for surfers around the world, our expertise is surfing trips in the world, since 1986
                        we do not stop traveling

                        The surfboards and trips around the world gave us the option of knowing what is good for you as
                        a beginner to a professional surfer, we will prepare you for the right spot</p>
                </div><!-- ./widget -->
                <div class="col-sm-3 widget widget-links">
                    <h3 class="widget-title">My Account</h3>
                    <div class="row">
                        <ul class="col-xs-6">
                            <li><a href="#!" class="effect">My Account</a></li>
                            <li><a href="#!" class="effect">My Order</a></li>
                            <li><a href="#!" class="effect">My Wishlist</a></li>
                            <li><a href="#!" class="effect">My Profile</a></li>
                            <li><a href="#!" class="effect">My Address</a></li>
                            <li><a href="#!" class="effect">My Products</a></li>
                        </ul>
                        <ul class="col-xs-6">
                            <li><a href="{{url('about')}}" class="effect">About Us</a></li>
                            <li><a href="{{url('contact')}}" class="effect">Contact</a></li>
                            <li><a href="#!" class="effect">Payment</a></li>
                            <li><a href="#!" class="effect">Blog</a></li>
                            <li><a href="#!" class="effect">FAQ's</a></li>
                            <li><a href="#!" class="effect">Order</a></li>
                        </ul>
                    </div>
                </div><!-- ./widget -->
                <div class="col-sm-3 widget widget-instagram">
                    <h3 class="widget-title">Instagram</h3>
                    <ul class="row">
                        <li class="col-xs-4">
                            <a href="#!">
                                <img src="img/products/23.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a href="#!">
                                <img src="img/products/20.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a href="#!">
                                <img src="img/products/18.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a href="#!">
                                <img src="img/products/19.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a href="#!">
                                <img src="img/products/24.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a href="#!">
                                <img src="img/products/12.jpg" class="img-responsive" alt="">
                            </a>
                        </li>
                    </ul>
                </div><!-- /.widget -->
                <div class="col-sm-3 widget widget-newsletter">
                    <h3 class="widget-title">Join our Newsletter</h3>
                    <form action="#!" method="POST" class="inputs-border clearfix">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" class="form-control"
                                   autocomplete="off">
                            <button type="submit" class="btn btn-primary"><i class="lil-long-arrow-right"></i></button>
                        </div>
                    </form>
                    <ul class="social">
                        <li><a href="#!" target="_blank"><i class="lil-facebook"></i></a></li>
                        <li><a href="#!" target="_blank"><i class="lil-twitter"></i></a></li>
                        <li><a href="#!" target="_blank"><i class="lil-instagram"></i></a></li>
                        <li><a href="#!" target="_blank"><i class="lil-dribbble"></i></a></li>
                    </ul>
                </div><!-- ./widget -->
            </div><!-- /.row -->
        </div><!-- /.widgets -->
    </div><!-- /.container -->
    <div class="copy-right text-center">
        <p class="effect">MADE WITH <i class="lil-heart" style="color: red"></i></p>
    </div>
</footer><!-- /.footer -->

<!-- open/close -->
<div class="overlay overlay-simplegenie">
    <i class="overlay-close lil-close"></i>
    <div class="container">
        <div class="row text-center pos-r">
            <div class="col-md-7 col-xs-11 col-center col-height-center search-form">
                <form action="#!" method="POST" class="inputs-bg" id="searchform">
                    <strong>Type a sentence or word you want to search for, And press Enter.</strong>
                    <input type="text" name="q" class="form-control" placeholder="Search..">
                </form>
            </div>
        </div>
    </div>
</div><!-- /.overlay -->

<!-- Go to top -->
<a href="#top" class="go-to-top">
    <i class="lil-angle-double-down"></i>
</a>

<!-- All Theme Scripts -->
<script type="text/javascript" src="{{asset('js/all.js')}}"></script>
<script type="text/javascript" src="{{asset('js/my-functions.js')}}"></script>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
</body>
</html>
