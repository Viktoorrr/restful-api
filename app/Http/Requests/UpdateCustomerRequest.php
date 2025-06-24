<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation rules for updating a customer.
     */
    public function rules(): array
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'group_ids' => ['present', 'nullable', 'array'],
                'group_ids.*' => ['exists:groups,id'],
            ];
        } else {
            return [
                'name' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
                'group_ids' => ['nullable','array'],
                'group_ids.*' => ['exists:groups,id'],
            ];
        }
    }
}
