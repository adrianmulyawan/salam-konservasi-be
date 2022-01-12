<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAspirationRequest extends FormRequest
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
            'name' => 'required|string|max:255', 
            'email' => 'required|email', 
            'phone_number' => 'required|string', 
            'form_title' => 'required', 
            'form_content' => 'required'
        ];
    }
}
