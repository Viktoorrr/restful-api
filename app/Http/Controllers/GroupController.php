<?php

namespace App\Http\Controllers;

use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Return a list of groups with their customers.
     */
    public function index()
    {
        return Group::with('customers')->get();
    }

    /**
     * Return a single group by ID with its customers.
     */  
    public function show($id)
    {
        return Group::with('customers')->findOrFail($id);
    }
}