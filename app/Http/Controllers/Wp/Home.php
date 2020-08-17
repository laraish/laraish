<?php

namespace App\Http\Controllers\Wp;

use App\Http\Controllers\Controller;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'version' => app()->version(),
        ];

        return $this->view('wp.home', $data);
    }
}
