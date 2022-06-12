<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>Laraish</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=10,user-scalable=no,initial-scale=1.0">

    <link rel="shortcut icon" href="{{ public_url('images/favicon.ico') }}" type="image/vnd.microsoft.icon"/>
    <link rel="apple-touch-icon-precomposed" href="{{ public_url('images/apple-touch-icon-precomposed.png') }}">
    <link rel="stylesheet" href="{{ public_url('css/app.min.css') }}"/>
    <link rel="stylesheet" href="{{ get_stylesheet_uri() }}">

    @yield('head')
    <?php wp_head();?>
</head>
<body>

@if(env('APP_ENV')==='production')
    <script>
        // scripts only should be ran on production server.
    </script>
@endif

<div class="site">

    @include('includes.navbars.navbar-home')

    <main class="site-main">
        @yield('content')
    </main>

    @include('includes.footers.footer-home')
</div>

@yield('footer')
<?php wp_footer();?>
<script src="{{ public_url('js/app.min.js') }}"></script>
<script src="{{ public_url('js/plugins.min.js') }}"></script>
<script src="{{ public_url('js/index.min.js') }}"></script>
</body>
</html>
