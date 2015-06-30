<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />
        <title>@yield('title', config('app.name') )</title>
        <meta name="description" content="@yield('meta_description', 'Laravel - Materialize')">
        <meta name="author" content="@yield('author', 'Daniel Blomdahl')">
        @yield('meta')

        <!-- Icons-->
        <!-- Place favicon.ico in the root public/img/favicons/ -->
        <link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/img/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/img/favicons/manifest.json">
        <link rel="shortcut icon" href="/img/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#239070">
        <meta name="msapplication-TileImage" content="/img/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,100,100italic,300' rel='stylesheet' type='text/css'>
        @yield('before-styles')
        {!! HTML::style(elixir('css/all.css')) !!}
        @yield('after-styles')


        {!! HTML::script("js/vendor/modernizr-2.8.3.min.js") !!}
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @include('includes.nav')
        @include('includes.partials.messages')

        @yield('content')

        @include('includes.footer')

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

        @yield('before-scripts')
            {!! HTML::script(elixir('js/all.js')) !!}
        @yield('after-scripts')

        @include('includes.partials.GoogleAnalytics')
    </body>
</html>
