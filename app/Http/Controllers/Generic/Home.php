<?php

namespace App\Http\Controllers\Generic;

use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'version' => app()->version(),
        ];

        return $this->view('generic.home', $data);
    }
}