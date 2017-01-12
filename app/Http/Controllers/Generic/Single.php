<?php

namespace App\Http\Controllers\Generic;

use App\Http\Controllers\Controller;
use App\Models\Post;

class Single extends Controller
{
    /**
     * Single constructor.
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

        return $this->view('generic.single', $data);
    }
}