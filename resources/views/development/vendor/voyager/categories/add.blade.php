@extends('voyager::master')
@section('page_header')
    {!! Html::style('theme-main/choosen/chosen.css') !!}
    <h1 class="page-title">
        <i class="fa fa-cab"></i> Add Category
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        {!! Form::open(['url' => route('postaddCategory'),'method'=>'post','files'=>true]) !!}
                        <div class="form-group">
                            <label>Category Name</label>
                            <input required type="text" class="form-control" name="name"/>
                        </div>
                        <div class="form-group">
                            <label>Category Image</label>
                            <input type="file" class="form-control" name="image"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add"/>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('javascript')

@stop