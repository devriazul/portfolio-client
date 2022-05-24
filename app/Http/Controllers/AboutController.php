<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(About $about)
    {
        return view('admin.about.create', compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'age' => 'required',
            'qualification' => 'required',
            'post' => 'required',
            'language1' => 'required',
            'language2' => 'required',
            // 'phone' => 'required',
        ]);
        
        $user = Auth::user();
        $profile_picture = $request->profile_picture;

        $path1 = $profile_picture? Storage::url($request->file('profile_picture')->store('public/images/'. $user->id)): '';
        // return $path1;

        $about = new About();
        $about->language1 = $request->language1;
        $about->language2 = $request->language2;
        $about->language3 = $request->language3;
        $about->language4 = $request->language4;
        $about->user_id = $user->id;
        $about->age = $request->age;
        $about->qualification = $request->qualification;
        $about->post = $request->post;
        $about->profile_picture = $path1;
        $about->save();
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'age' => 'required',
            'qualification' => 'required',
            'post' => 'required',
            'language1' => 'required',
            'language2' => 'required',
        ]);
        
        $user = Auth::user();
        $profile_picture = $request->profile_picture;

        $path1 = $profile_picture? Storage::url($request->file('profile_picture')->store('public/images/'. $user->id)): '';
        // return $path1;

        $about = About::findOrFail($id);
        $about->language1 = $request->language1;
        $about->language2 = $request->language2;
        $about->language3 = $request->language3;
        $about->language4 = $request->language4;
        $about->user_id = $user->id;
        $about->age = $request->age;
        $about->qualification = $request->qualification;
        $about->post = $request->post;
        $about->profile_picture = $path1;
        $about->save();
        return redirect()->route('about.index')->with('success', 'The Post Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('success', 'The Row Delated Successfuly!');
    }
}
