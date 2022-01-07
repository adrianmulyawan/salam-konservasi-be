<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'conservation_area_id' => 'integer|exists:conservation_areas,id',
            'title'                => 'string|max:255',
            'slug'                 => 'string|max:255',
            'photo'                => 'image|mimes:png,jpg,webp,jpeg|max:2048',
            'event_content'        => 'string'
        ];
    }
}
