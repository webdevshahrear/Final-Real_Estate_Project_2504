<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBuildingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Set to true if you are handling authorization in a controller or policy
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name'          => ['required', 'string', 'max:255'],
            'address'       => ['required', 'string', 'max:500'],
            'city'          => ['nullable', 'string', 'max:100'],
            'total_floors'  => ['required'],
            'building_type' => ['nullable', 'string'],
            'amenities'     => ['nullable', 'string'],
            'status'        => ['required'],

            // Image Validation
            'images'        => ['nullable', 'array'],
            'images.*'      => ['image', 'mimes:jpeg,png,webp', 'max:2048'], // Max 5MB per file
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'images.*.mimes' => 'Each architectural image must be a file of type: jpeg, png, or webp.',
            'images.*.image' => 'The uploaded files must be valid images.',
            'total_floors.required' => 'The number of storeys is required for registration.',
        ];
    }
}
