@extends('master')

@section('main_content')

    {{--<div style="min-height: 500px; min-height: 623px; padding-top: 174px; font-size: 12px;"></div>--}}


    <div class="page-head content-top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Page Default</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-head -->

    <div class="page-wrapper">
        <section class="section" id="page-default">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @foreach($contents as $content)

                        <p>{!! $content->article !!}</p>

                        @endforeach
                    </div><!-- /.block -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- #page-default -->
    </div><!-- /.page-wrapper -->

@endsection
