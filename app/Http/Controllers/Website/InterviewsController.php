<?php

namespace App\Http\Controllers\Website;

use App\Models\Interview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterviewsController extends Controller
{
    public function index()
    {
        return view('website.interviews.index', [
            'interviews' => Interview::published()->latest()->get()
        ]);
    }

    public function show(Interview $interview)
    {
        abort_unless($interview->isPublished(), 404);

        return view('website.interviews.show', compact('interview'));
    }
}
