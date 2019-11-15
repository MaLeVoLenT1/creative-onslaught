<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="{{$header['viewPort']}}">
        <meta name="description" content="{{$header['description']}}">
        <meta name="keywords" content="{{$header['keywords']}}">
        <meta name="author" content="{{$header['author']}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gow-Mac DB</title>
        <link rel="icon" type="image/png" href="{{ asset($header['icon']) }}">

        <link href="{{url( '/css/app.css' )}}" rel="stylesheet">
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};</script>
    </head>
    <body>

    <div id="app">
        <div class="wrapper">

            <public-pages @catch-user="updateUser"/>

        </div>
    </div>

    @include('footer')
    <script src="{{ url('/js/pages/home.js') }}"></script>
    <script src="{{ url('/js/vendor.js') }}"></script>
    <script src="{{ url('/js/scripts.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script>
    </body>

</html>