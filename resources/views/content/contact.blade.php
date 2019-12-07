@extends('master')
@section('main_content')
<div class="page-head content-top-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <ol class="breadcrumb">
                    <li><a href="{{url('')}}">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-head -->
<div class="page-wrapper">
    <section class="section no-padding-bottom" id="contact-map">
        <div class="container">
            <div class="row">
                <div class="map-wrapper col-sm-12">
                    <div id="map" data-lat="40.9803480" data-long="28.7270580" data-title="Liliom Lab" data-subtitle="Istanbul, Turkey"></div>
                </div><!-- /.map-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="section" id="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="no-margin-top">Why not say <span class="autotype">Hello</span><span class="typed-cursor">?</span></h3>
                    <p class="description">
                        Speak to our team if you have any questions, need advice or if you're curious to hear more about what we have to offer. Give us a call or send us an email.
                    </p>

                    <div>
                        <p><strong>Phone:</strong> +90 555 888 111</p>
                        <p><strong>Email:</strong> info@domain.com</p>
                        <p><strong>Address:</strong> Avcılar NO:9 DAİRE :2, Istanbul, Turkey</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <form action="#!" method="POST" class="inputs-border">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-default">Send Message</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
</div><!-- /.page-wrapper -->
@endsection