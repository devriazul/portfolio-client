<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
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
            'phone' => 'required',
            'division' => 'required',
            'country' => 'required',
        ]);
        // return $request;
        $user = Auth::user();
        $contact = new Contact();
        $contact->user_id = $user->id;
        $contact->phone = $request->phone;
        $contact->division = $request->division;
        $contact->country = $request->country;
        $contact->save();
        return redirect()->route('contact.index')->with('success', 'The Contact Created Successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'phone' => 'required',
            'division' => 'required',
            'country' => 'required',
        ]);
        // return $request;
        $user = Auth::user();
        $contact = Contact::findOrFail($id);
        $contact->user_id = $user->id;
        $contact->phone = $request->phone;
        $contact->division = $request->division;
        $contact->country = $request->country;
        $contact->save();
        return redirect()->route('contact.index')->with('success', 'The Contact Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back();
    }
}
