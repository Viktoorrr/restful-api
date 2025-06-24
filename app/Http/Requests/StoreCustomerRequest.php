<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Define validation rules for storing a customer.
     */
    public function rules(): array
    {
        return [
            'name'      => ['required'],
            'email'     => ['required', 'email'],
            'group_ids' => ['present', 'array'],
            'group_ids.*' => ['exists:groups,id'],
        ];
    }
}
