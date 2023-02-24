<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_Profile;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_profiles = User_Profile::all();
        return $user_profiles;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_profiles = new User_Profile;
        $user_profiles->username = $request->username;
        $user_profiles->bio = $request->bio;
        $user_profiles->height = $request->height;
        $user_profiles->weight = $request->weight;
        $user_profiles->education = $request->education;
        $user_profiles->profession = $request->profession;

        $user_profiles->save();
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user_profiles = User_Profile::findOrFail($id);
        $user_profiles->username = $request->username;
        $user_profiles->bio = $request->bio;
        $user_profiles->height = $request->height;
        $user_profiles->weight = $request->weight;
        $user_profiles->education = $request->education;
        $user_profiles->profession = $request->profession;

        
            $user_profiles->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User_Profile::destroy($id);
        return "Delete Successfully";
    }
}
