@extends('voyager::master')

@section('page_title','Adds')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-news"></i> Ads

    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                            <tr>

                                <th class="actions">Add id</th>
                                <th class="actions">Name</th>
                                <th class="actions">KCP number</th>
                                <th class="actions">descripton</th>
                                <th class="actions">Email</th>
                                <th class="actions">Category Name</th>

                                <th class="actions">Is active</th>
                                <th class="actions">Is Verified</th>
                                <td>
                                    Action
                                </td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($ads as $ad)
                                <tr>

                                    <td>
                                        {{$ad['id']}}
                                    </td>
                                    <td>
                                        {{$ad['full_name']}}
                                    </td>
                                    <td>
                                        {{$ad['kcp_number']}}
                                    </td>
                                    <td>
                                        {{$ad['description']}}
                                    </td>
                                    <td>
                                        {{$ad['email']}}
                                    </td>
                                    <td>
                                        {{$ad['category']['name']}}
                                    </td>

                                    <td>

                                      {{$ad['is_active']}}

                                    </td>
                                    <td>

                                        {{$ad['is_verified']}}

                                    </td>
                                    <td>
                                       <a href="{{route('editadd',['id'=>$ad['id']])}}">Edit</a>
                                    </td>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')

@stop