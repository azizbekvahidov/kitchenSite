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
            'site_name' => 'required|string|max:100',
            'address' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'map_link' => 'required|string|max:100',
            'facebook' => 'nullable|string|max:100',
            'instagram' => 'nullable|string|max:100',
            'telegram' => 'nullable|string|max:100',
        ];
    }

    public function messages()
    {
        return [
            'site_name.required' => 'это поле нужно заполнить',
            'address.required' => 'это поле нужно заполнить',
            'phone.required' => 'это поле нужно заполнить',
            'email.required' => 'это поле нужно заполнить',
            'map_link.required' => 'это поле нужно заполнить',
        ];
    }
}
