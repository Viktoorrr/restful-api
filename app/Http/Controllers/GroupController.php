<?php

namespace App\Http\Controllers;

use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Group::with('customers')->get();
    }

    /**
     * Display the specified resource.
     */ 
    public function show($id)
    {
        return Group::with('customers')->findOrFail($id);
    }
}