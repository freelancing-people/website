<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterviewsController extends Controller
{
    public function index()
    {
        return view('website.interviews.index');
    }

    public function show($id)
    {
        return view('website.interviews.show');
    }
}
