@extends('cms.cms_master')
@section('cms_content')

    <div class="main">

        <div class="container">


            <div class="row">

                <div class="col-md-12">

                    <div class="widget stacked ">

                        <div class="widget-header">
                            <i class="icon-pencil"></i>
                            <h3>Site Menu Link</h3>
                        </div> <!-- /.widget-header -->


                        <div class="widget-content">

                            <section id="tables">
                                <div class="page-header">
                                    <span>
                                        <a href="{{url('cms/products/create')}}" class="btn btn-primary">
                                            <li class="icon-plus-sign"></li>Add New Product</a>
                                    </span>
                                </div>

                                <div class="table-responsive">
                                    @if($products)
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th>Product Image</th>
                                                <th>Product</th>
                                                <th>Updated At</th>
                                                <th>Operation</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $item)
                                                <tr>
                                                    <td><img width="50" src="{{asset('img/' .$item['pimage'])
                                                    }}"></td>
                                                    <td>{{$item['ptitle']}}</td>
                                                    <td>{{$item['updated_at']}}</td>
                                                    <td>
                                                        <a href="{{url('cms/products/' . $item['id'] . '/edit')}}"
                                                           class="btn btn-info">
                                                            Edit</a>&nbsp;
                                                        &nbsp;
                                                        &nbsp;&nbsp;
                                                        <a href="{{url('cms/products/' . $item['id'])}}"
                                                           class="btn btn-info"> Delete</a>

                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                </div> <!-- /.table-responsive -->

                            </section>


                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div> <!-- /span12 -->

            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /main -->

@endsection
