<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guidebook | {{  $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ elixir('js/app.js') }}" type="text/javascript"></script>

    <!--TODO add styles to separate file and mix with elixir as normal css-->

    <style>

        .navbar-brand {
            width: 220px;
            background:
            url(../img/logo-alt.svg)
            center center / 200px 200px
            #094370
            no-repeat
        }

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

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://cecentral.com"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/readme">Guidebook<span class="sr-only">(current)</span></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="disabled"><a href="/readme">Login</a></li>
                    <li>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search" disabled>
                            </div>
                            <button type="submit" class="btn btn-default" disabled>Submit</button>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/readme">Read Me</a></li>
                            <li><a href="/summary">Summary</a></li>
                            <li><a href="/activity">Activities</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://cecentral.atlassian.net">Jira</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>



    <div class = "container">

        <div class="flex-center position-ref">

            <div class="col-lg">@yield('markdown')</div>

        </div>
    </div>

    <script type="text/javascript" src="https://cecentral.atlassian.net/s/1136c0e400521f6211e2d32621089b59-T/tn9djs/100011/c/1000.0.9/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=b27e03cf"></script>

</body>
</html>
