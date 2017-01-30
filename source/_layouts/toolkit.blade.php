<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="img/favicon.ico" rel="icon" type="image/x-icon" />

  {{--<title>Guidebook</title>--}}
  <title>{{ $pageTitle }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link rel="stylesheet" href="/css/main.css">
  {{--<link rel="stylesheet" href="/css/supplemental.css">--}}

<!--jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!--Bootstrap-->
  {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
  <script src="/js/bootstrap.min.js"></script>

  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'INVALID', 'auto');
      ga('send', 'pageview');

  </script>

  <style>
    /* note: this is a hack for ios iframe for bootstrap themes shopify page */
    /* this chunk of css is not part of the toolkit :) */

    body {
        padding-top: 100px;
    }

    .sidebar-nav {
      position: fixed;
      /*margin-top: 20px;*/
      /*margin-bottom: 20px;*/
      /*margin-right: 10px;*/
      background-color: #fff;
        z-index: 1;
    }

  </style>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://cecentral.com"></a>
        </div>

        <ul class="nav navbar-nav">
            <li><a href="/">Guidebook<span class="sr-only">(current)</span></a></li>
        </ul>
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
    <div class="row">

    <div class="container-fluid col-sm-2 col-md-2 col-lg-2">
        <nav class="sidebar-nav">
            <div class="collapse navbar-collapse" id="sidebar-collapse">
                <ul class="nav nav-pills nav-stacked">
                    <li class="dropdown nav-header">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="btn disabled pull-left" disabled>Preface</a></li>
                            <li><a href="/">Index</a></li>
                            <li><a href="/activities" class="btn pull-left">Activities</a></li>
                            <li><a href="/members" class="btn pull-left">Members</a></li>
                            <li><a href="/clients" class="btn pull-left">Clients</a></li>
                            <li><a href="/reports" class="btn pull-left">Reports</a></li>
                            <li><a href="/finance" class="btn pull-left">Finance</a></li>
                            <li><a href="#" class="btn disabled pull-left" disabled>Ideas</a></li>
                            <li><a href="/tools" class="btn pull-left">Tools</a></li>
                            <li role="separator" id="divider" class="divider"></li>
                            <li><a href="http://cecentral.atlassian.net">Jira</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-pills nav-stacked" id="sidebar"></ul>
                {{--<hr class="visible-xs m-t">--}}
            </div>
        </nav>
    </div>

          <div class="col-xs-12 col-sm-8 col-sm-offset-1 col-md-8 col-lg-8">

            <div class="row">

              @yield('body')

            </div>

          </div><!--content-->

    </div><!--row-->
</div><!--container-->

    <script>
        $(document).ready(function () {
            $("img").addClass("img-responsive");

            var $array = [];
            //        $.each($('h2'), function() {
            $('h2').each(function (index, element) {
                var $element = $(element);
                var $text = $element.text();
                var $wrap = $element.wrap('<a></a>');
                var $parent = $element.parent().attr("name", $text);
                $("#sidebar").append('<li><a></a></li>');
                $array.push($text);
                });
            console.log($array);
            console.log($array[3]);

            $.each($('#sidebar'), function (index, sidebar) {
                $('li', sidebar).each(function (index, element) {
                var $element = $(element);
                var $link = $element.find('a');
                $link.attr("href", "#" + $array[index]);
                $link.text($array[index]);
                console.log("array: " + $array[index]);
                console.log("index: " + index);
                });
            });
        });

    </script>

</body>
</html>

