<!DOCTYPE HTML>


<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/style.min.css" />
    </head>

    <body>
        @include("partials.navigation")

        @yield("content")

        @include("partials.footer")
    </body>


</html>