@extends('master')
@section('main_content')
    <div class="page-head content-top-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <ol class="breadcrumb">
                        <li><a href="{{url('')}}">Home</a></li>
                        <li class="active">LOG-IN</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-head -->

    <div class="page-wrapper">
        <section class="section" id="page-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-center">
                        <div class="box">
                            <h2>Login</h2><br>
                            <form action="" method="POST" class="login-form inputs-border inputs-bg"
                                  novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <div class="required">
                                        <input value="{{old('email')}}" type="email" class="form-control" name="email"
                                               id="email"
                                               placeholder="Email">
                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="required">
                                        <input type="password" class="form-control" name="password" id="password"
                                               placeholder="Password">
                                    </div>
                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="rememberme">
                                    <label for="rememberme" class="checkbox">Remember me</label>
                                    <a href="#!" class="effect pull-right">Forgot your password?</a>
                                </div>
                                <div class="form-group text-right">
                                    <input type="submit" class="btn btn-default" name="submit"
                                            id="submit" value="send">
                                    </input>
                                </div>
                                @if( $errors->any())
                                    @foreach($errors->all() as $error)
                                        @if($error == 'wrong email and password')
                                            <span class="text-danger">{{$error}}</span>
                                        @endif
                                    @endforeach
                                @endif
                            </form>
                        </div><!-- /.box -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- #page-login -->
    </div><!-- /.page-wrapper -->

@endsection