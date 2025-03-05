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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'type' => ['required'],
            'name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'email'],
            'phone_number' => ['required'],
            'industry' => ['required'],
            'address' => ['required'],
            'description' => ['nullable'],
            'lead_source_id' => ['nullable'],
            'pipeline_stage_id' => ['nullable'],
        ];
    }
}
