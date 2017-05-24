@extends('voyager::master')

@section('page_title','All cars')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-news"></i> Add Categories
        <a href="{{ route('addcarform') }}" class="btn btn-success">
            <i class="voyager-plus"></i> Add New
        </a>
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
                                <th>Name</th>
                                <th class="actions">Booking ID</th>
                                <th class="actions">Pick Up Location</th>
                                <th class="actions">Drop off Location</th>
                                <th class="actions">First Name</th>
                                <th class="actions">Last Name</th>
                                <th class="actions">Payment Method</th>
                                <th class="actions">PickUp Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($booking_list as $booking)
                                <tr>

                                    <td>
                                        {{$booking['id']}}
                                    </td>
                                    <td>
                                        {{$booking['pickup_dest']}}
                                    </td>
                                    <td>
                                        {{$booking['dropoff_dest']}}
                                    </td>
                                    <td>
                                        {{$booking['first_name']}}
                                    </td>
                                    <td>
                                        {{$booking['last_name']}}
                                    </td>
                                    <td>
                                        {{$booking['email_address']}}
                                    </td>
                                    <td>
                                        {{$booking['payment_method']}}
                                    </td>
                                    <td>
                                        {{$booking['pickup_datetime']}}
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