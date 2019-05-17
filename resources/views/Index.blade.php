<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet" type="text/css"> -->
        <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ mix('dist/css/main.css') }}">

    </head>
    <body>
        <div id="app" class="tw-h-full">
            <layout></layout>
        </div>
        <script src="{{ mix('dist/js/app.js') }}"></script>
    </body>
</html>
