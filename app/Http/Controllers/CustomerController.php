<?php

namespace App\Http\Controllers;

use App\Models\Customer;
//use App\Http\Requests\StoreCustomerRequest;
//use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Customer::with('groups')->get();
    }

    /**
     * Display the specified resource.
     */    
    public function show($id)
    {
        return Customer::with('groups')->findOrFail($id);
    }
}
