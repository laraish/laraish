<?php

namespace App\Http\Controllers\Wp\Page;

use App\Http\Controllers\Controller;

class SamplePage extends Controller
{
    /**
     * Page constructor.
     */
    public function __construct()
    {
        if (!empty($GLOBALS['post'])) {
            setup_postdata($GLOBALS['post']);
        }
    }

    public function index()
    {
        $data=[
            'mydata'=>'wow|||||wwww!!!'
        ];
        return $this->resolveView('wp.page',$data);
    }
}
