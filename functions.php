<?php

use Illuminate\Http\Request;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Foundation\Http\Events\RequestHandled;

// CLI環境（Artisan実行時）では実行しない
if (PHP_SAPI === 'cli') {
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

if (file_exists(__DIR__.'/storage/framework/maintenance.php')) {
    require __DIR__.'/storage/framework/maintenance.php';
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

// Laravel 11/12: handleRequestメソッドを使用
// template_includeフィルター内でKernel->handle()を実行し、RequestHandledイベントでレスポンス送信
$app->handleRequest(Request::capture());

// RequestHandledイベントでレスポンス送信とterminate処理
$app['events']->listen(RequestHandled::class, function (RequestHandled $event) use ($app) {
    $event->response->send();

    $kernel = $app->make(Kernel::class);
    $kernel->terminate($event->request, $event->response);
});
