@extends('cms.cms_master')
@section('cms_content')
    <div class="main">

        <div class="container">


            <div class="row">

                <div class="col-md-12">

                    <div class="widget stacked">

                        <div class="widget-header">
                            <i class="icon-ok"></i>
                            <h3>ADD New Content Form</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <form action="{{url('cms/content')}}" method="POST" class="form-horizontal col-md-8">
                                @csrf
                                <fieldset>

                                    <div class="form-group">
                                        <label for="menu-id">Menu Item</label>
                                        <select name="menu_id" id="menu-id" class="form-control">
                                            <option value="">Select Menu Item</option>
                                            @foreach($menu as $item)
                                                <option value="{{$item['id']}}" @if(old('menu_id') == $item['id'])
                                                selected="selected" @endif>
                                                    {{$item['link']}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-4">TITLE</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="title"
                                                   id="title"
                                                   value="{{old('title')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="article" class="col-md-4">Article</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="article" id="article">{{old('article')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="submit" class="btn btn-info" name="submit"
                                                   value="Save Content">&nbsp;&nbsp;
                                            <a href="{{url('cms/content')}}" type="reset" class="btn btn-info">
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
