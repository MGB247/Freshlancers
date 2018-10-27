<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Freshlancers</title>
        <style>
            html, #app{
                height: 100%;
                width: 100%;
            }
            body{
                width: 100%;
                height: 100%;
                background-color: white;
                overflow-x: hidden;
                position: absolute;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <navbar-component :brand="{name: 'Freshlancers', link: '/images/flogo2.png'}"></navbar-component>
            <image-component :image="{src: '/images/ho.jpg', alt: 'Image', height: '100%', width: '100%'}"></image-component>
        </div>
    </body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
