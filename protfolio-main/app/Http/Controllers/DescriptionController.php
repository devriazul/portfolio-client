<?php

namespace App\Http\Controllers;

use App\Models\Description;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descriptions = Description::all();
        return view('admin.description.index', compact('descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.description.create');
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
            'description' => 'required|max:300',
        ]);
        $user = Auth::user();
        $description = new Description();
        $description->user_id = $user->id;
        $description->description = $request->description;
        $description->save();
        
        return redirect()->route('description.index')->with('success', 'The Description Created Successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function show(Description $description)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function edit(Description $description)
    {
        return view('admin.description.edit', compact('description'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $request->validate([
            'description' => 'required|max:300',
        ]);
        $user = Auth::user();
        $description = Description::findOrFail($id);
        $description->user_id = $user->id;
        $description->description = $request->description;
        $description->save();
        
        return redirect()->route('description.index')->with('success', 'The Description Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function destroy(Description $description)
    {
        $description->delete();
        return back()->with('success',  'The Description Delated Successfuly!');
    }
}
