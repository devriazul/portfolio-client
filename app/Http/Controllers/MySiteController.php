<?php

namespace App\Http\Controllers;

use App\Models\MySite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MySiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = MySite::all();
        return view('admin.my-sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.my-sites.create');
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
            'link' => 'required',
            'image1' => 'required',
        ]);
        $user = Auth::user();
        $image1 = $request->image1;
        $path_1 = $image1? Storage::url($request->file('image1')->store('public/images/links/'. $user->id)) : '';

        $site = new MySite();
        $site->user_id = $user->id;
        $site->link = $request->link;
        $site->image1 = $path_1;
        $site->save();
        return redirect()->route('my-site.index')->with('success', 'The New Site Row Created Successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MySite  $mySite
     * @return \Illuminate\Http\Response
     */
    public function show(MySite $mySite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MySite  $mySite
     * @return \Illuminate\Http\Response
     */
    public function edit(MySite $mySite)
    {
        return view('admin.my-sites.edit', compact('mySite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MySite  $mySite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'link' => 'required',
            'image1' => 'required',
        ]);
        $user = Auth::user();
        $image1 = $request->image1;
        $path_1 = $image1? Storage::url($request->file('image1')->store('public/images/links/'. $user->id)) : '';

        $site = MySite::findOrFail($id);
        $site->user_id = $user->id;
        $site->link = $request->link;
        $site->image1 = $path_1;
        $site->save();
        return redirect()->route('my-site.index')->with('success', 'The New Site Row Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MySite  $mySite
     * @return \Illuminate\Http\Response
     */
    public function destroy(MySite $mySite)
    {
        $mySite->delete();
        return back()->with('success', 'A Row Delated Successfuly!');
    }
}
