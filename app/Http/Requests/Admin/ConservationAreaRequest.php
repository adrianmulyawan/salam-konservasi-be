<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ConservationAreaRequest extends FormRequest
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
            'name' => 'required|max:255',
            'slug' => 'max:255',
            'location' => 'required|max:255',
            'description' => 'required',
            'area' => 'required|max:255',
            'is_open' => 'required',
            'map' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
            'is_homestay' => 'required',
            'is_resto' => 'required'
        ];
    }
}
