<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matched;

class MatchedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matcheds = Matched::all();
        return $matcheds;
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
        $matcheds = new Matched;
        $matcheds->user_id1 = $request->user_id1;
        $matcheds->user_id2 = $request->user_id2;

        $matcheds->save();
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
        $matcheds = Matched::findOrFail($id);
        $matcheds->user_id1 = $request->user_id1;
        $matcheds->user_id2 = $request->user_id2;

        $matcheds->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Matched::destroy($id);
        return "Delete Successfully";
    }
}
