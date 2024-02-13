<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => 'required', // Image file validation, max size: 2MB
         
            'industry' => 'required|string|min:4|max:255',
            'phone' => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
            'description' => 'required|string|min:10',
        ];
    }
}
