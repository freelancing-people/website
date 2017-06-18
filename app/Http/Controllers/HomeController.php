<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        if(session()->has('user_type')) {
            return view('home_' . session('user_type'));
        }

        return view('home_select_user_type');
    }

    public function developer()
    {
        session(['user_type' => 'developer']);

        return redirect('/');
    }

    public function designer()
    {
        session(['user_type' => 'designer']);

        return redirect('/');
    }
}
