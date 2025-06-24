<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\CustomerCollection;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CustomerCollection(Customer::with('groups')->get());
    }

    /**
     * Display the specified resource.
     */    
    public function show($id)
    {
        return Customer::with('groups')->findOrFail($id);
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create($request->validated());
        
        $customer->groups()->sync($request->input('group_ids', []));

        return new CustomerResource($customer);
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());

        if ($request->has('group_ids')) {
            $customer->groups()->sync($request->input('group_ids', []));
        }
        
        return new CustomerResource($customer);
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response()->noContent();
    }
}
