<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Credential;

class CredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $credentials = Credential::all();
        return $credentials;
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
        $credentials = new Credential;
        $credentials->email = $request->email;
        $credentials->password = $request->password;

        $credentials->save();
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
        $credentials = Credential::findOrFail($id);
        $credentials->email = $request->email;
        $credentials->password = $request->password;

        $credentials->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Credential::destroy($id);
        return "Delete Successfully";
    }
}
