<?php

namespace App\Http\Controllers;

use Laraish\Routing\Traits\ViewDebugger;
use Laraish\Routing\Traits\ViewResolver;

abstract class Controller
{
    use ViewDebugger, ViewResolver;
}
