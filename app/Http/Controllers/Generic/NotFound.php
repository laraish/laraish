<?php

namespace App\Http\Controllers\Generic;

use App\Http\Controllers\Controller;

class NotFound extends Controller
{
    public function index()
    {
        return $this->view('errors.404');
    }
}