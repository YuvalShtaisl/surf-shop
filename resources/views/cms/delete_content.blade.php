@extends('cms.cms_master')
@section('cms_content')

    <div class="row">
        <div class="col-md-12 text-center">
            <div class="widget text-center">
                <div class="widget-header">
                    <i class="icon-star"></i>
                    <h3>Delete Content Link</h3>
                </div>

                <div class="widget-content">
                    <form action="{{url('cms/content/' . $item_id)}}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <h3 class="">Are You Sure To Delete ?</h3>
                        <input type="submit" name="submit" value="Delete" class="btn btn-danger" >&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-info" href="{{url('cms/menu')}}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
