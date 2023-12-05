<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Laraish\Routing\Traits\ViewDebugger;
use Laraish\Routing\Traits\ViewResolver;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, ViewDebugger, ViewResolver;
}
