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
            'slug' => 'required|max:255',
            'location' => 'required|max:255',
            'description' => 'required',
            'is_open' => 'required|boolean',
            'map' => 'required|image|mimes:png,jpg,jpeg,webp',
            'is_homestay' => 'required|boolean',
            'is_resto' => 'required|boolean'
        ];
    }
}
