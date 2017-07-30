<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        return view('website.services.index');
    }

    public function show()
    {
        return view('website.services.show');
    }
}
