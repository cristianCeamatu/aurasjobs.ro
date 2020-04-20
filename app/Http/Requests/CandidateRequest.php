<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|max:60',
            'phone' => 'required|max:30',
            'email' => 'required|unique:candidates|max:60',
            'message' => 'nullable|max:30000',
            'department' => 'required',
            'cv' => 'required|max:30000|mimes:pdf,doc,docx,jpeg,png,jpg',
            'identificationDocument' => 'nullable|max:30000|mimes:pdf,doc,docx,jpeg,png,jpg',
        ];
    }
}
