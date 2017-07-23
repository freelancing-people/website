<?php

namespace App\Http\Controllers\Admin;

use App\Models\Interview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.interviews.index', ['interviews' => Interview::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.interviews.create');
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
            'name'       => 'required',
            'founded_in' => 'required',
            'based_in'   => 'required',
            'founders'   => 'required|numeric',
            'employees'  => 'required|numeric',
            'body'       => 'required',
            'avatar'     => 'required|image',
        ]);

        $path = request()->avatar->store('avatars');

        $interview = Interview::create([
            'name'       => request('name'),
            'founded_in' => request('founded_in'),
            'based_in'   => request('based_in'),
            'founders'   => request('founders'),
            'employees'  => request('employees'),
            'body'       => request('body'),
            'avatar'     => $path,
            'published'  => request('published') ? true : false,
        ]);

        return redirect('/admin/interviews');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Interview $interview
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function edit(Interview $interview)
    {
        return view('admin.interviews.edit', compact('interview'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Models\Interview $interview
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function update(Interview $interview)
    {
        $this->validate(request(), [
            'name'       => 'required',
            'founded_in' => 'required',
            'based_in'   => 'required',
            'founders'   => 'required|numeric',
            'employees'  => 'required|numeric',
            'body'       => 'required',
        ]);

        $interview->update([
            'name'       => request('name'),
            'founded_in' => request('founded_in'),
            'based_in'   => request('based_in'),
            'founders'   => request('founders'),
            'employees'  => request('employees'),
            'body'       => request('body'),
            'published'  => request('published') ?? false,
        ]);

        return redirect('/admin/interviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
