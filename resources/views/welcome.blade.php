<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Freshlancers</title>
        <style>
            body{
                width: 100%;
                height: 100%;
                background-color: white;
                background-image: url('/images/ho.jpg');
            }
        </style>
    </head>
    <body>
        <div id="app">
            <navbar-component :brand="{name: 'Freshlancers', link: '/images/flogo2.png'}"></navbar-component>
        </div>
    </body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
