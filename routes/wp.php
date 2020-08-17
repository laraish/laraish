<?php

use App\Http\Controllers\Wp\Home;
use App\Http\Controllers\Wp\Page;
use App\Http\Controllers\Wp\Post;
use Laraish\Support\Facades\WpRoute;

WpRoute::home([Home::class, 'index']);
WpRoute::page([Page::class, 'index']);
WpRoute::post('post', [Post::class, 'index']);
WpRoute::autoDiscovery();
