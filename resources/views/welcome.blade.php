<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <title>Freshlancers</title>
        <style>
            html{
                scroll-behavior: smooth;
            }
            html, #app, .m-content{
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
            .contains{
                width: 100%;
                height: auto;
                margin-bottom: 30px;
            }
            .m-content{
                position: relative;
                top: 110px; /* 110 is the current Navbar Height */
            }
            .contains::before { /* Fix for correct scroll to content for anchors */
                content: "";
                display: block;
                height: 200px; /* fixed header height*/
                margin: -200px 0 0; /* negative fixed header height */
}
        </style>
    </head>
    <body>
        <div id="app">
            <navbar-component :brand="{name: 'Freshlancers', link: '/images/flogo2.png'}"></navbar-component>
            <div class="m-content">
            <image-component :image="{src: '/images/ho.jpg', alt: 'Image', height: '100%', width: '100%'}"></image-component>
            <about-component heading="About Us"></about-component>
            <work-force-component heading="Workforce"></work-force-component>
            </div>
        </div>
    </body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
