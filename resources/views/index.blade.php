<!DOCTYPE HTML>


<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="/css/style.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito|Oswald&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>

    <body>
        @include("partials.navigation")

        @yield("content")

        @include("partials.footer")

        <script src="/js/jquery.min.js"></script>

        <script type="text/javascript" src="/js/moment.min.js"></script>
        <script type="text/javascript" src="/js/daterangepicker.min.js"></script>
       <!-- <script type="text/javascript" src="/js/lightslider.js"></script>-->
        <script type="text/javascript" src="/js/cb-fsss.min.js"></script>
        <script src="/js/style.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/daterangepicker.min.css" />
       <!--<link rel="stylesheet" type="text/css" href="/css/lightslider.css" />-->


    </body>


</html>