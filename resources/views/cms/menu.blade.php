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
                                        <a href="{{url('cms/menu/create')}}" class="btn btn-primary">
                                            <li class="icon-plus-sign"></li>Add New Menu Link</a>
                                        <button type="button" class="btn btn-info">Info</button>
                                    </span>
                                </div>

                                <div class="table-responsive">
                                    @if($menu)
                                        <table class="table table-bordered table-striped table-highlightd">
                                            <thead>
                                            <tr>
                                                <th>Menu Link</th>
                                                <th>Updated At</th>
                                                <th>Operation</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($menu as $item)
                                                <tr>

                                                    <td>{{$item['link']}}</td>
                                                    <td>{{$item['updated_at']}}</td>
                                                    <td>
                                                        <a href="{{url('cms/menu/' . $item['id'] . '/edit')}}"
                                                           class="btn btn-info">
                                                            Edit</a>&nbsp;
                                                        &nbsp;
                                                        &nbsp;&nbsp;
                                                        <a href="{{url('cms/menu/' . $item['id'])}}"
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
