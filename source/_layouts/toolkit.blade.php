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
      width: 1px;
      min-width: 100%;
      *width: 100%;
    }
  </style>

</head>

<body>
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-2 col-md-2 sidebar">
        <nav class="sidebar-nav">
          <div class="sidebar-header">
            <button class="nav-toggler nav-toggler-sm sidebar-toggler" type="button" data-toggle="collapse" data-target="#nav-toggleable-sm">
              <span class="sr-only">Toggle nav</span>
            </button>
            <a class="sidebar-brand img-responsive" href="../index.html">
              <span class="icon icon-leaf sidebar-brand-icon"></span>
            </a>
          </div>

          <div class="collapse nav-toggleable-sm" id="nav-toggleable-sm">
             <ul class="nav nav-pills nav-stacked">
                 <li class="dropdown nav-header">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a href="#" class="btn disabled pull-left" disabled>Preface</a></li>
                     <li><a href="/">Table of Contents</a></li>
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
            <ul class="nav nav-pills nav-stacked" id="sidebar">
              {{--<li class="nav-header">More</li>--}}
              {{--<li >--}}
                {{--<a href="../docs/index.html">--}}
                  {{--Toolkit docs--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="http://getbootstrap.com" target="blank">--}}
                  {{--Bootstrap docs--}}
                {{--</a>--}}
              {{--</li>--}}
            </ul>
            <hr class="visible-xs m-t">
          </div>
        </nav>
      </div>

      <div class="col-sm-8 col-md-8 content">

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

