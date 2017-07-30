<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('website.articles.index');
    }

    public function show()
    {
        return view('website.articles.show');
    }
}
