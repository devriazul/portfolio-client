<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::all();
        return view('admin.educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.educations.create');
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
            'exam_title' => 'required',
            'major' => 'required',
            'institute' => 'required',
            'result' => 'required',
            'passing_year' => 'required',
            'duration' => 'required',
        ]);
        $user = Auth::user();
        $education = new Education();
        $education->user_id = $user->id;
        $education->exam_title = $request->exam_title;
        $education->major = $request->major;
        $education->institute = $request->institute;
        $education->result = $request->result;
        $education->passing_year = $request->passing_year;
        $education->duration = $request->duration;
        $education->save();
        return redirect()->route('education.index')->with('success', 'The New Education Row Created Successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        return view('admin.educations.show', compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('admin.educations.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'exam_title' => 'required',
            'major' => 'required',
            'institute' => 'required',
            'result' => 'required',
            'passing_year' => 'required',
            'duration' => 'required',
        ]);
        $user = Auth::user();
        $education = Education::findOrFail($id);
        $education->exam_title = $request->exam_title;
        $education->user_id = $user->id;
        $education->major = $request->major;
        $education->institute = $request->institute;
        $education->result = $request->result;
        $education->passing_year = $request->passing_year;
        $education->duration = $request->duration;
        $education->save();
        return redirect()->route('education.index')->with('success', 'The Education Row Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return back();
    }
}
