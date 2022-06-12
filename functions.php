<?php

use Illuminate\Http\Request;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Foundation\Http\Events\RequestHandled;

if (defined('ARTISAN_BINARY')) {
    return;
}


define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is maintenance / demo mode via the "down" command we
| will require this file so that any prerendered template can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists(__DIR__ . '/../storage/framework/maintenance.php')) {
    require __DIR__ . '/../storage/framework/maintenance.php';
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__ . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$kernel->handle(Request::capture());

$app['events']->listen(RequestHandled::class, function (RequestHandled $event) use ($kernel) {
    $event->response->send();

    $kernel->terminate($event->request, $event->response);
});

function wp_laraish_menu()
{
    register_nav_menus(
        array(
            'primary-menu' => 'Primary Menu',
            'sidebar-menu' => 'Sidebar Menu',
            'footer-menu' => 'Footer Menu',
        )
    );
}
add_action('init', 'wp_laraish_menu');
