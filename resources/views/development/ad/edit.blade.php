@extends('layout.app')

@section('page_header')
    {!! Html::style('theme-main/choosen/chosen.css') !!}
    <h1 class="page-title">
        <i class="fa fa-cab"></i> Edit Ad
        {{--<img height="100px" width="100px" src="{{getUploadsPath()}}"/>--}}
    </h1>

@stop

@section('content')
    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">

                    <div class="panel-body">
                        {!! Form::open(['url' =>route('postrefferaledit',['id'=>$ad['id']]),'method'=>'post','files'=>true]) !!}
                        <div class="form-group">
                            <label>Name</label>
                            <input required type="text" class="form-control" name="full_name" value="{{$ad['full_name']}}"/>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input required type="text" class="form-control" name="age" value="{{$ad['age']}}"/>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input required type="text" class="form-control" name="phone_no"
                                   value="{{$ad['phone_no']}}"/>
                        </div>
                        <div class="form-group">
                            <label>kcp_number</label>
                            <input required type="text" class="form-control" name="kcp_number"
                                   value="{{$ad['kcp_number']}}"/>
                        </div>
                        <div class="form-group">
                            <label>is_active</label>
                            <select  name="is_active" class="form-control">
                                <option value="">Status</option>
                                <option <?php echo ($ad['is_active'] == '1') ? 'selected' : '' ?> value="1">Active</option>
                                <option <?php echo ($ad['is_active'] == '0') ? 'selected' : '' ?> value="0">In-Active</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>is_active</label>
                            <select  name="is_verified" class="form-control">
                                <option value="">Verified Status</option>
                                <option <?php echo ($ad['is_verified'] == '1') ? 'selected' : '' ?> value="1">Active</option>
                                <option <?php echo ($ad['is_verified'] == '0') ? 'selected' : '' ?> value="0">In-Active</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label>is_vaccinated</label>
                            <select  name="is_vaccinated" class="form-control">
                                <option value="">Vaccination Status</option>
                                <option <?php echo ($ad['is_vaccinated'] == '1') ? 'selected' : '' ?> value="1">Vacinated</option>
                                <option <?php echo ($ad['is_vaccinated'] == '0') ? 'selected' : '' ?> value="0">Not Vaccinated</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Provinces</label>
                            <select  name="province_id" class="form-control">
                                <option value="">Provinces</option>
                                @foreach($provinces as $province)
                                    <option <?php echo ($ad['province_id'] ==$province['id'] ) ? 'selected' : '' ?> value="{{$province['id']}}">{{$province['name']}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Cities</label>
                            <select  name="city_id" class="form-control">
                                <option value="">Cities</option>
                                @foreach($cities as $city)
                                    <option <?php echo ($ad['city_id'] ==$city['id'] ) ? 'selected' : '' ?> value="{{$city['id']}}">{{$city['name']}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input required type="text" class="form-control" name="Price" value="{{$ad['price']}}"/>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description">
                                {{$ad['description']}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>phone_no</label>
                            <input required type="text" class="form-control" name="price" value="{{$ad['phone_no']}}"/>
                        </div>
                        <div class="form-group">

                            <button class="btn btn-success" type="submit" value="save">Save</button>
                        </div>

                        {!! Form::close() !!}
                        @foreach($ad['image'] as $pic)
                            <div class="col-md-4">
                                <img height="200" width="200" src="{{getUploadsPath($pic['image_url'])}}">
                                <span><a href="{{route('deleteimage',['id'=>$pic['id']])}}">Delete</a> </span>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('javascript')

@stop