<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Block;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blocks = Block::all();
        return $blocks;
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
        $blocks = new Block;
        $blocks->blocked_user_id = $request->blocked_user_id;

        $blocks->save();
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
        $blocks = Block::findOrFail($id);
        $blocks->blocked_user_id = $request->blocked_user_id;

        $blocks->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Block::destroy($id);
        return "Delete Successfully";
    }
}
