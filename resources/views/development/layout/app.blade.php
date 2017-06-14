<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>@yield('title')</title>
    <base href="/">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!--Css for theme-->
    <!-- CSS Files -->
    {!! Html::script('development/js/jquery.min.js') !!}
    {!! Html::style('development/css/bootstrap.min.css') !!}
    {!! Html::style('development/css/material-kit.css') !!}

    @yield('headjs')
    @yield('css')


</head>
<body class="landing-page">
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a routerLink="/" class="navbar-brand" routerLinkActive="active">
                <img src="../assets/img/logo-main.png"/>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a routerLink="/" routerLinkActive="active">
                        <i class="fa fa-home"></i> Home
                    </a>
                </li>
                <li>
                    <a routerLink="pets" routerLinkActive="active">
                        <i class="fa fa-paw"></i> Pets
                    </a>
                </li>
                <li>
                    <a>&nbsp;</a>
                </li>
                <li>
                    <a href="{{route('postadd')}}" class="btn btn-warning" routerLinkActive="active">
                        Post free ad
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">
    @yield('content')
</div>
<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="http://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a routerLink="about" routerLinkActive="active">About this</a>
                </li>
                <li>
                    <a routerLink="/" routerLinkActive="active">
                        Home
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
        </div>
    </div>
</footer>
<!--   Core JS Files   -->

{!! Html::script('development/js/bootstrap.min.js') !!}
{!! Html::script('development/js/material.min.js') !!}


<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
{!! Html::script('development/js/nouislider.min.js') !!}

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
{!! Html::script('development/js/bootstrap-datepicker.js') !!}

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
{!! Html::script('development/js/material-kit.js') !!}

@yield('js')
</body>
</html>
