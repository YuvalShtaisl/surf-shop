@extends('cms.cms_master')
@section('cms_content')
    <div class="main">

        <div class="container">


            <div class="row">

                <div class="col-md-12">

                    <div class="widget stacked">

                        <div class="widget-header">
                            <i class="icon-ok"></i>
                            <h3>ADD NEW PRODUCT</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <form action="{{url('cms/products')}}" method="POST" class="form-horizontal col-md-7">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label for="categorie-id">Menu Item</label>
                                        <select name="categorie-id" id="categorie-id" class="form-control">
                                            <option value="">Choose Product</option>
                                            @foreach($categories as $item)
                                                <option value="{{$item['id']}}" @if(old('categorie-id') == $item['id'])
                                                selected="selected" @endif>
                                                    {{$item['ctitle']}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ptitle" class="col-lg-4">TITLE</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control origin-text" name="ptitle"
                                                   id="ptitle"
                                                   value="{{old('ptitle')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="purl" class="col-lg-4 ">URL</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control target-text" name="purl" id="purl"
                                                   value="{{old('purl')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="particle" class="col-md-4">Article</label>
                                        <div class="col-md-8">
                                            <textarea name="particle" id="article" class="form-control">{{old ('particle')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="col-lg-4">Price</label>

                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" name="price"
                                                   id="price"
                                                   value="{{old('price')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pimage" class="col-md-4">Product Image</label>
                                        <div class="col-md-8">
                                            <input type="file" name="pimage" id="pimage">
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="form-group">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <input type="submit"  class="btn btn-default growl-type" name="submit"
                                                   value="Save Product">&nbsp;&nbsp;
                                            <a href="{{url('cms/products')}}" type="reset" class="btn btn-default">
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