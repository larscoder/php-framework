<?php

namespace App\Http\Controllers;

use App\Http\Response;

class ServicesController
{
    public function index()
    {
        return new Response('services');
    }
}
