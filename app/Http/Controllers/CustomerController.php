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
     * Return a list of customers with their groups.
     */
    public function index()
    {
        return new CustomerCollection(Customer::with('groups')->get());
    }

    /**
     * Return a single customer by ID with its groups.
     */  
    public function show($id)
    {
        return new CustomerResource(Customer::with('groups')->findOrFail($id));
    }

    /**
     * Create a new customer with its groups.
     */
    public function store(StoreCustomerRequest $request)
    {
        $customer = Customer::create($request->validated());
        
        $customer->groups()->sync($request->input('group_ids', []));

        return new CustomerResource($customer);
    }

    /**
     * Update an existing customer.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());

        if ($request->has('group_ids')) {
            $customer->groups()->sync($request->input('group_ids', []));
        }
        
        return new CustomerResource($customer);
    }

    /**
     * Delete a customer.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response()->noContent();
    }
}
