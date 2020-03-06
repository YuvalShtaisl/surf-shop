@extends('master')
@section('main_content')

    <div class="page-head content-top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <ol class="breadcrumb">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li class="active">Categories</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-head -->

    <section class="section collections no-padding-bottom" id="home-collections">
        <div class="container">
            <div class="row">
                @if($categories)
                    @foreach($categories as $category)
                        <div class="col-md-3 col-sm-6 col-xs-12 collection">
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

    <section class="section collections no-padding-bottom" id="home-collections">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 collection">
                    <a href="#!">
                        <img src="img/lessonnn.jpg" class="img-responsive" alt="">
                    </a>
                </div><!-- /.collection -->
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6 collection">
                            <a href="#!">
                                <img src="img/new02.jpg" class="img-responsive" alt="">
                            </a>
                        </div><!-- /.collection -->
                        <div class="col-sm-6 collection">
                            <a href="#!">
                                <img src="img/new02.jpg" class="img-responsive" alt="">
                            </a>
                        </div><!-- /.collection -->
                        <div class="col-sm-12 collection">
                            <a href="#!">
                                <img src="img/cati4.jpg" class="img-responsive" alt="">
                            </a>
                        </div><!-- /.collection -->
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.collections -->


@endsection
