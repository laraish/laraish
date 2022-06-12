<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>Laraish</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=10,user-scalable=no,initial-scale=1.0">

    <link rel="shortcut icon" href="{{ public_url('images/favicon.ico') }}" type="image/vnd.microsoft.icon"/>
    <link rel="apple-touch-icon-precomposed" href="{{ public_url('images/apple-touch-icon-precomposed.png') }}">
    <link rel="stylesheet" href="{{ public_url('css/app.css') }}"/>
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
    <header class="site-header">

    </header>

    <main class="site-main">
        @yield('content')
    </main>

    <footer class="site-footer">

    </footer>
</div>

@yield('footer')
<?php wp_footer();?>

</body>
</html>
