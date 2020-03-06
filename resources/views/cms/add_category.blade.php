@extends('cms.cms_master')
@section('cms_content')
    <div class="main">

        <div class="container">


            <div class="row">

                <div class="col-md-12">

                    <div class="widget stacked">

                        <div class="widget-header">
                            <i class="icon-ok"></i>
                            <h3>ADD NEW CATEGORY FORM</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <form action="{{url('cms/categories')}}" method="POST" class="form-horizontal col-md-7">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="ctitle" class="col-lg-4">TITLE</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control origin-text" name="ctitle"
                                                   id="ctitle"
                                                   value="{{old('ctitle')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="curl" class="col-lg-4 ">URL</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control target-text" name="curl" id="curl"
                                                   value="{{old('curl')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="carticle" class="col-md-4">Article</label>
                                        <div class="col-md-8">
                                            <textarea name="carticle" id="article" class="form-control">{{old ('carticle')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cimage" class="col-md-4">Category Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="cimage" id="cimage">
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="form-group">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <input type="submit"  class="btn btn-default growl-type" name="submit"
                                                   value="Save Category">&nbsp;&nbsp;
                                            <a href="{{url('cms/categories')}}" type="reset" class="btn btn-default">
                                                Cancel
                                            </a>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>


                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div> <!-- /col-md-12 -->


            </div> <!-- /row -->


        </div> <!-- /container -->

    </div> <!-- /main -->



@endsection