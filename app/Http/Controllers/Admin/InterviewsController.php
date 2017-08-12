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
            'name'                  => 'required|max:240',
            'introduction'          => 'required|max:240',
            'founded_in'            => 'required',
            'based_in'              => 'required',
            'founders'              => 'required|numeric',
            'employees'             => 'required|numeric',
            'shareable_description' => 'required',
            'shareable_image'       => 'required|image',
            'website'               => 'required|url',
            'body'                  => 'required',
            'avatar'                => 'required|image',
        ]);

        $avatarPath = request()->avatar->store('avatars');
        $shareableImagePath = request()->shareable_image->store('shareable_images');

        Interview::create([
            'name'                  => request('name'),
            'introduction'          => request('introduction'),
            'founded_in'            => request('founded_in'),
            'based_in'              => request('based_in'),
            'founders'              => request('founders'),
            'employees'             => request('employees'),
            'body'                  => request('body'),
            'avatar'                => $avatarPath,
            'shareable_description' => request('shareable_description'),
            'shareable_image'       => $shareableImagePath,
            'website'               => request('website'),
            'published'             => request('published') ? true : false,
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
            'name'                  => 'required|max:240',
            'introduction'          => 'required|max:240',
            'founded_in'            => 'required',
            'based_in'              => 'required',
            'founders'              => 'required|numeric',
            'employees'             => 'required|numeric',
            'shareable_description' => 'required',
            'website'               => 'required|url',
            'body'                  => 'required',
        ]);

        if (request()->hasFile('avatar')) {
            $interview->avatar = request()->avatar->store('avatars');
            $interview->save();
        }

        if (request()->hasFile('avatar')) {
            $interview->shareable_image = request()->shareable_image->store('shareable_images');
            $interview->save();
        }

        $interview->update([
            'name'                  => request('name'),
            'introduction'          => request('introduction'),
            'founded_in'            => request('founded_in'),
            'based_in'              => request('based_in'),
            'founders'              => request('founders'),
            'employees'             => request('employees'),
            'website'               => request('website'),
            'shareable_description' => request('shareable_description'),
            'body'                  => request('body'),
            'published'             => request('published') ?? false,
        ]);

        return redirect('/admin/interviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Interview $interview
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function destroy(Interview $interview)
    {
        $interview->delete();

        return redirect('/admin/interviews');
    }
}
