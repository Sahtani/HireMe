<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'image' => 'required|max:2048', // Image file validation, max size: 2MB
            // 'title' => 'required|string|min:4|max:255',
            // 'post' => 'required|string|min:4|max:255',
            'industry' => 'required|string|min:4|max:255',
            // 'address' => 'required|string|min:4|max:255',
            'phone' => 'required|string|max:255',
            // 'about' => 'required|string|min:10',
            'slogan' => 'required|string|max:255',
            'description' => 'required|string|min:10',
            // mimes:jpeg,png,jpg,gif|
            // 'title'=>['required','min:8'],
            // // 'slug'=>['required',Rule::unique('posts')->ignore($this->post)],
            // 'content'=>['required'],

        ];
    }
}
