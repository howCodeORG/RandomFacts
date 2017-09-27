<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            h1 {
              text-align: center;
              font-size: 32px;
              font-family: Serif;
              font-style: italic;
              margin-top: 1em;
              font-weight: normal;
            }
        </style>
    </head>
    <body>
        <h1>{{ $fact }}</h1>
    </body>
</html>
