<?php
/**
 * Created by PhpStorm.
 * User: charlescombs
 * Date: 8/31/16
 * Time: 2:13 PM
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>--}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="{{ elixir('css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ elixir('css/style.css') }}"> <!-- Resource style -->
    <script src="{{ elixir('js/modernizr.js') }}"></script> <!-- Modernizr -->

    <title>Laravel | Full-Screen Pushing Navigation | CodyHouse</title>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #495155;
            /*color: #636b6f;*/
            font-family: 'Raleway';
            font-weight: 600;
            height: 200vh;
            font-size: 110%;
            line-height: 125%;
            margin: 0;
        }

        .cd-nav {

            /*background-color: rgba(77, 228, 255, 0.50);*/

        }

        /*main{*/

            /*font-size: 125% !important;*/
            /*line-height: 125% !important;*/

        /*}*/

        .summary {

            /*padding-top: 60px;*/
            color: #ffffff !important;
            font-size: 150% !important;
            line-height: 150% !important;

        }

        .summary > a, h1, h2 {

            color: #ffffff !important;

        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        h1, h3 {

            color: #2b3337;

        }


        code {

            padding-left: 1px;
            padding-right: 1px;
            padding-top: 1px;
            padding-bottom: 1px;
            background-color: rgba(77, 228, 255, 0.50);
            border-radius: 5px;

        }

        blockquote {

            padding-left: 1px;
            padding-right: 1px;
            padding-top: 1px;
            padding-bottom: 1px;
            background-color: rgba(77, 228, 255, 0.50);
            border-radius: 10px;

        }

    </style>

</head>
<body>
<main>
    {{--<div class = "container">--}}
        <div class="flex-center position-ref">

            @yield('markdown')

        </div>
    {{--</div>--}}
</main>

<a href="#cd-nav" class="cd-nav-trigger">Menu
    <span class="cd-nav-icon"></span>

    <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
        <circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
    </svg>
</a>

<div id="cd-nav" class="cd-nav">
    <div class="cd-navigation-wrapper">
        <div class="cd-half-block summary">
            <div class="flex-center position-ref full-height">

                {{--@yield('markdown')--}}
                @include('nav-summary')

            </div>
        </div><!-- .cd-half-block -->

        <div class="cd-half-block summary">
            <div class="flex-center position-ref full-height">

                {{--@yield('markdown')--}}
                @include('nav-read-me')

            </div>
        </div><!-- .cd-half-block -->
    </div> <!-- .cd-navigation-wrapper -->
</div> <!-- .cd-nav -->
<script src="{{ elixir('js/jquery-2.1.1.js') }}"></script>
<script src="{{ elixir('js/main.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>
