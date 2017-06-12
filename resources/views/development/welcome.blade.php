@extends('layout.app')

@section('content')
    <div class="header header-filter"
         style="background: url('http://www.bramlettagency.com/img/~www.bramlettagency.com/pets.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 home-form text-center">
                    <div class="col-md-5">
                        <div class="form-group search-box">
                            <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">group</i>
                        </span>
                                <input type="text" class="form-control" placeholder="With Material Icons">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group search-box">
                            <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">group</i>
                        </span>
                                <input type="text" class="form-control" placeholder="With Material Icons">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <div class="input-group">
                                <button type="submit" class="btn btn-icon btn-fill">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Pets</h2>

                <div class="team">
                    <div class="row">
                        @foreach($categories as $key => $val)
                            <div class="col-md-3">
                                <div class="team-player">
                                    <img src="{{$val['image']}}" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">{{$val['name']}}</h4>
                                    <a>
                                        Show Ads
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
@stop