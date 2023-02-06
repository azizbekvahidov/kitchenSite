<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'site_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'map_link' => 'required|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'telegram' => 'nullable|url|max:255',
        ];
    }

    public function messages()
    {
        return [
            'site_name.required' => 'Это поле нужно заполнить',
            'address.required' => 'Это поле нужно заполнить',
            'phone.required' => 'Это поле нужно заполнить',
            'email.required' => 'Это поле нужно заполнить',
            'map_link.required' => 'Это поле нужно заполнить',
        ];
    }
}
