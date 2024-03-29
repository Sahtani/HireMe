<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            
                'title'=>'required|string|min:3',
                'company'=>'required|string|min:3',
                'start_date'=>'required|date', 
                'end_date'=>'required|date|after:start_date',
                'desc'=>'required|string|min:3',
                // 'cv_id' => 'required|exists:cvs,id',
      
        ];
    }
}
