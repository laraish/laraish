<?php

namespace App\Http\Controllers\Generic;

use App\Http\Controllers\Controller;
use Laraish\WpSupport\Model\Post;

class Page extends Controller
{
    /**
     * Page constructor.
     */
    public function __construct()
    {
        if ( ! empty($GLOBALS['post'])) {
            setup_postdata($GLOBALS['post']);
        }
    }

    public function index()
    {
        $data = [
            'post' => new Post(),
        ];

        return $this->view('generic.page', $data);
    }
}