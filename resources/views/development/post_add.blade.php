@extends('layout.app')
@section('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
        .ui-autocomplete {
            z-index: 99999;
        }
    </style>
@stop
@section('content')
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Pets</h2>
                <div class="col-md-2">
                    <h3>
                        Filter places
                    </h3>
                </div>
                <div class="col-md-10">

                    <div class="form-group">
                        @foreach($categories as $category)
                            <label class="radio-inline">
                                <input id="category" type="radio" name="category"
                                       value="{{$category->id}}">{{$category->name}}
                            </label>
                        @endforeach
                    </div>
                    {{ Form::open(['url' => 'foo/bar', 'method' => 'POST','name'=>'postad','id'=>'postad'])}}
                    <input type="hidden" name="step" value="1"/>
                      <div class="form-group">
                          <input id="subcatsid" name="category_id" type="hidden">
                        <label for="subcats">Category </label>
                        <input id="subcats"/>

                    </div>

                    <div class="form-group">
                        <label>Age </label>
                        <input required type="text" name="age"/>
                    </div>
                    <div class="form-group">
                        <label>Pedigree:</label>
                        <label class="radio-inline">
                            <input required type="radio" name="is_pedigree" value="1"> yes
                        </label>
                        <label class="radio-inline">
                            <input required type="radio" name="is_pedigree" value="0"> No
                        </label>
                    </div>
                    <div class="form-group">
                        <label>KCP Number </label>
                        <input required name="kcp_number" type="text"/>
                    </div>
                    <div class="form-group">
                        <label>Vaccinated</label>
                        <select required name="is_vaccinated">
                            <option value="0">Yes</option>
                            <option value="1">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea required  name="description" > </textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit Step 1" />
                    </div>
                    {!! Form::close() !!}
                    {{ Form::open(['url' => 'foo/bar', 'method' => 'POST','name'=>'postad','id'=>'postad1'])}}

                    <input type="hidden" name="step" value="2"/>
                    <div class="form-group">
                        <labeL>Owner Name</labeL>
                        <input type="text" name="full_name"/>
                    </div>
                    <div class="form-group">
                        <labeL>Email</labeL>
                        <input type="text" name="email"/>
                    </div>
                    <div class="form-group">
                        <labeL>Phone no</labeL>
                        <input required type="text" name="phone_no"/>
                    </div>
                    <div class="form-group">
                        <labeL>Province</labeL>
                        {{--<input type="text" name="province_id"/>--}}

                        <select required name="province_id">
                            @foreach($provinces as $pro)
                            <option value="{{$pro['id']}}">{{$pro['name']}}</option>
                                    @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <labeL>Cities</labeL>
                        <select required name="city_id">
                            @foreach($cities as $city)
                                <option value="{{$city['id']}}">{{$city['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit Step 2" />
                    </div>
                    {!! Form::close() !!}

                    {{ Form::open(['url' => 'foo/bar', 'method' => 'POST','name'=>'postad2','id'=>'upload_form','files' => true])}}

                    <input type="hidden" name="step" value="3"/>
                    <div class="form-group">
                        <label for="exampleInputFile">Picture 1</label>
                        <input required name="adimages1" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Picture 2</label>
                        <input required name="adimages2" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    </div>
                    <div class="form-group">
                        <label  for="exampleInputFile">Picture 2</label>
                        <input required name="adimages3" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Picture 2</label>
                        <input required name="adimages4" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Confirm" />
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop
@section('headjs')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@stop
@section('js')
    <script>
        $(document).ready(function () {
            $("#subcats").autocomplete({
                source: function (request, response) {
                    $.ajax({
                        type: "GET",
                        url: "{{route('getChildCats')}}",
                        dataType: "json",
                        data: {
                            term: $('input:radio[name="category"]:checked').val()
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            alert('Error: ' + xhr.responseText);
                        },
                        success: function (data) {
                            console.log(data);
                            response($.map(data, function (item) {
                                return {
                                    id: item.id,
                                    label: item.name,
                                    value: item.slug
                                }
                            }));
                        }

                    });

                },
                select: function (event, ui) {
                    $('#subcatsid').val(ui.item.id);
                    console.log(ui.item, 'sel');
                }
            });
        });
    </script>
    <script>
        // this is the id of the form
        $("#postad").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.


            var url = "{{route('postAd')}}"; // the script where you handle the form input.

            $.ajax({
                type: "POST",
                url: url,
                data: $("#postad").serialize(), // serializes the form's elements.
                success: function(data)
                {

                }
            });


        });
    </script>
    <script>
        // this is the id of the form
        $("#postad1").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.


            var url = "{{route('postAd')}}"; // the script where you handle the form input.

            $.ajax({
                type: "POST",
                url: url,
                data: $("#postad1").serialize(), // serializes the form's elements.
                success: function(data)
                {

                }
            });


        });
    </script>
    <script>
        $("#upload_form").submit(function(e){
            e.preventDefault();
            $.ajax({
                url:'{{route('postAd')}}',
                data:new FormData($("#upload_form")[0]),

                async:false,
                type:'POST',
                processData: false,
                contentType: false,
                success:function(response){
                    console.log(response);
                },
            });
        });
    </script>

@stop
