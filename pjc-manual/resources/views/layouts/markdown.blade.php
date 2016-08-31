<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
    <div class = "container">
        <div class="flex-center position-ref">

            @yield('markdown')

        </div>
</div>

    <script type="text/javascript" src="https://cecentral.atlassian.net/s/1136c0e400521f6211e2d32621089b59-T/tn9djs/100011/c/1000.0.9/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=en-US&collectorId=b27e03cf"></script>

</body>
</html>
