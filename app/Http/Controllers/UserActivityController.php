<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_Activities;

class UserActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_activities = User_Activities::all();
        return $user_activities;
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
        $user_activities = new User_Activities;
        $user_activities->activity_type = $request->activity_type;
        $user_activities->description = $request->description;

        $user_activities->save();
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
        $user_activities = User_Activities::findOrFail($id);
        $user_activities->activity_type = $request->activity_type;
        $user_activities->description = $request->description;

        $user_activities->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User_Activities::destroy($id);
        return "Delete Succesfully";
    }
}
