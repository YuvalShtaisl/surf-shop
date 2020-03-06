
@extends('master')
@section('main_content')

    <div class="page-head content-top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <ol class="breadcrumb">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li class="active">404</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-head -->

    <div class="page-wrapper">
        <section class="section" id="page-404">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 text-center">
                        <h1>404</h1>
                        <h3>Sorry, the page you were looking for doesn’t exist.</h3>
                        <p>Let's get back on track..</p>
                        <div class="button-group">
                            <a href="{{url('')}}" class="btn btn-primary">Home</a>
                            <a href="{{url('shop')}}" class="btn btn-default">Shop</a>
                        </div>
                        <h2 class="or">OR</h2>
                        <form action="#!" method="GET" class="inputs-border">
                            <input type="text" class="form-control" placeholder="What's on your mind?">
                        </form>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    </div><!-- /.page-wrapper -->

@endsection
