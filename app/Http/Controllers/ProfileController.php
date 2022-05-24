<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request, User $user)
    {
        $request->validate([
            'newPassword' => 'required|min:8',
            'oldPassword' => 'required',
        ]);
        if(!$request->newPassword || ($request->newPassword != $request->confirmPassword))
        {
            return back()->with('error', 'Both Password Should Be Same!');
        }
        // Check Old Password
        $mathchedPassword = Hash::check($request->oldPassword, auth()->user()->password);
        if(!$mathchedPassword){
            return back()->with('error', 'Old Password Not Matched!');
        }
        // Convert New Password into Hash Password
        $hashPassword = Hash::make($request->newPassword);
        // Save Password
        $user = User::findOrFail(auth()->id());
        $user->password = $hashPassword;
        $user->save();
        // return $request;
        return back()->with('success', 'The password changed successfuly!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
