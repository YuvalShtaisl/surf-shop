@extends('cms.cms_master')
@section('cms_content')
    <div class="main">

        <div class="container">


            <div class="row">

                <div class="col-md-12">

                    <div class="widget stacked">

                        <div class="widget-header">
                            <i class="icon-ok"></i>
                            <h3>ADD LINK TO MENU</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">


                            <form action="{{url('cms/menu/' . $item['id'])}}" method="POST"
                                  class="form-horizontal col-md-7">
                                @csrf
                                {{method_field('PUT')}}
                                <input type="hidden" name="item_id" value="{{$item['id']}}">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="link" class="col-lg-4">Link</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control origin-text" name="link" id="link"
                                                   value="{{$item['link']}}">
                                            <span class="text-danger">{{$errors->first('link')}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="url" class="col-lg-4">URL</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control target-text" name="url" id="url"
                                                   value="{{$item['url']}}">
                                            <span class="text-danger">{{$errors->first('url')}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mtitle" class="col-lg-4">TITLE</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="mtitle"
                                                   id="mtitle"
                                                   value="{{$item['mtitle']}}">
                                            <span class="text-danger">{{$errors->first('mtitle')}}</span>
                                        </div>
                                    </div>

                                    <br/>

                                    <div class="form-group">
                                        <div class="col-lg-4"></div>

                                        <div class="col-lg-8">
                                            <input type="submit" class="btn btn-info" name="submit"
                                                   value="Update Menu">&nbsp;&nbsp;
                                            <a href="{{url('cms/menu')}}" type="reset" class="btn btn-info">
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