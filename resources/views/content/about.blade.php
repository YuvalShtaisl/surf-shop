@extends('master')
@section('main_content')
    <div class="page-head content-top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <ol class="breadcrumb">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-head -->
    <div class="page-wrapper">
        <section class="section" id="page-about">
            <div class="container">
                <div class="row">
                    <div class="block clearfix">
                        <div class="col-sm-4">
                            <h2 class="title">About us</h2>
                            <p class="subtitle description">
                                We are a surfing company which was established in 1986, since we deal in the personal
                                design of surfboards for surfers around the world, our expertise is surfing trips in the
                                world, since 1986 we do not stop traveling
                            </p>
                            <p class="subtitle description">
                                The surfboards and trips around the world gave us the option of knowing what is good for
                                you as a beginner to a professional surfer, we will prepare you for the right spot

                            </p>
                        </div>
                        <div class="col-sm-8">
                            <div class="image">
                                <img src="img/about.jpg" class="img-responsive">
                            </div>
                        </div>
                    </div><!-- /.block -->

                    <div class="block clearfix">
                        <div class="col-sm-8">
                            <div class="image">
                                <img src="img/open.jpeg" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="title">Open Hours</h2>
                            <p class="subtitle description">
                                Opening hours: from Thursday to Thursday
                                From 8:00 am to 7:00 pm
                                A marble day from 8:00 am to 21:00 pm
                            </p>
                            <p class="subtitle description">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div><!-- /.block -->
                </div><!-- /.row -->

                <div class="block clearfix">
                    <div class="col-sm-12 section-title text-center">
                        <h3><i class="line"></i>Meet our Team<i class="line"></i></h3>
                    </div>

                    <div id="our-team">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="author">
                                    <img src="img/users/8.jpg">
                                    <h3>Hussam</h3>
                                    <p>Web Developer</p>
                                    <ul class="social">
                                        <li><a href="https://twitter.com/Hussam3bd" target="_blank"><i
                                                        class="lil-twitter"></i></a></li>
                                        <li><a href="https://instagram.com/Hussam3bd" target="_blank"><i
                                                        class="lil-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="author">
                                    <img src="img/users/7.jpg">
                                    <h3>Toyler</h3>
                                    <p>Product Designer</p>
                                    <ul class="social">
                                        <li><a href="#!" target="_blank"><i class="lil-twitter"></i></a></li>
                                        <li><a href="#!" target="_blank"><i class="lil-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="author">
                                    <img src="img/users/5.jpg">
                                    <h3>Kevin</h3>
                                    <p>Creative Director</p>
                                    <ul class="social">
                                        <li><a href="#!" target="_blank"><i class="lil-twitter"></i></a></li>
                                        <li><a href="#!" target="_blank"><i class="lil-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="author">
                                    <img src="img/users/6.jpg">
                                    <h3>Alex</h3>
                                    <p>Web Designer</p>
                                    <ul class="social">
                                        <li><a href="#!" target="_blank"><i class="lil-twitter"></i></a></li>
                                        <li><a href="#!" target="_blank"><i class="lil-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- /#our-team -->
                </div><!-- /.block -->
            </div><!-- /.container -->
        </section><!-- #page-about -->
    </div><!-- /.page-wrapper -->
@endsection
