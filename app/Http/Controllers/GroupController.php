<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Resources\GroupResource;
use App\Http\Resources\GroupCollection;

class GroupController extends Controller
{
    /**
     * Return a list of groups with their customers.
     */
    public function index()
    {
        return new GroupCollection(Group::with('customers')->get());
    }

    /**
     * Return a single group by ID with its customers.
     */  
    public function show($id)
    {
        return new GroupResource(Group::with('customers')->findOrFail($id));
    }
}