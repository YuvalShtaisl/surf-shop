@extends('cms.cms_master')
@section('cms_content')
    <div class="main">

        <div class="container">


            <div class="row">

                <div class="col-md-12">

                    <div class="widget stacked">

                        <div class="widget-header">
                            <i class="icon-ok"></i>
                            <h3>Edit Content Form</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <form action="{{url('cms/content/' .$item['id'])}}" method="POST" class="form-horizontal
                            col-md-8">
                                @csrf
                                {{method_field('PUT')}}
                                <fieldset>
                                    <div class="form-group">
                                        <label for="menu-id">Menu Item</label>
                                        <select id="menu-id" name="menu_id" class="form-control">
                                            @foreach($menu as $row)
                                                <option @if($row['id'] == $item['id']) selected="selected" @endif>
                                                    {{$row['link']}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-md-4">TITLE</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="title"
                                                   id="title"
                                                   value="{{('title')}}">
                                            <span class="text-danger">{{$errors->first('title')}}</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="article" class="col-md-4">Article</label>
                                        <div class="col-md-8">
                                            <textarea name="article" id="article"
                                                      class="form-control">{{ $item['article'] }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-8">
                                            <input type="submit" class="btn btn-info" name="submit"
                                                   value="Update Content">&nbsp;&nbsp;
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