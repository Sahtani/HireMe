<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestOffer extends FormRequest
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
            // 'company_name' => 'required|max:255',
            'title' => 'required|max:255',
            'desc' => 'required',
            'type_contrat' => 'required|in:remote,hybrid,full-time',
            'location' => 'required|max:255',
            'skills' => 'nullable|array', // Les compétences doivent être un tableau
            'skills.*' => 'required|string'
        ];
    }
}
