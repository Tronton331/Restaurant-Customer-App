<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'name' => 'required|string',
            'slug' => 'required|string|unique:menu|regex:/^[a-z0-9-]+$/',
            'preview' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|string|in:makanan,minuman',
            'price' => 'required|integer',
            'image' => 'required|string',
        ];
    }
}
