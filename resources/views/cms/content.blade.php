@extends('cms.cms_master')
@section('cms_content')


        <div class="row">

            <div class="col-md-6 col-xs-12">

                <div class="widget stacked ">

                    <div class="widget-header">
                        <i class="icon-pencil"></i>
                        <h3>Site Content</h3>
                    </div> <!-- /.widget-header -->


                    <div class="widget-content">

                        <section id="tables">
                            <div class="page-header">
                                    <span>
                                        <a href="{{url('cms/content/create')}}" class="btn btn-primary">
                                            <li class="icon-plus-sign"></li>
                                            Add New Content
                                        </a>
                                    </span>
                            </div>

                            <div class="table-responsive">
                                @if($contents)
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Updated At</th>
                                            <th>Operation</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contents as $item)
                                            <tr>
                                                <td>{{$item['title']}}</td>
                                                <td>{{$item['updated_at']}}</td>
                                                <td>
                                                    <a href="{{url('cms/content/' . $item['id'] . '/edit')}}"
                                                       class="btn btn-info">
                                                        Edit</a>&nbsp;
                                                    &nbsp;
                                                    &nbsp;&nbsp;
                                                    <a href="{{url('cms/content/' . $item['id'])}}"
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



@endsection
