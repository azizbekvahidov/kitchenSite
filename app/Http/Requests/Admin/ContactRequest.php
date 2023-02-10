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
            'site_name_uz' => 'required|string|max:255',
            'site_name_ru' => 'required|string|max:255',
            'site_name_en' => 'required|string|max:255',
            'address_uz' => 'required|string|max:255',
            'address_ru' => 'required|string|max:255',
            'address_en' => 'required|string|max:255',
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
            'site_name_uz.required' => 'Ushbu maydonni to`ldirish kerak',
            'site_name_ru.required' => 'Это поле нужно заполнить',
            'site_name_en.required' => 'This field needs to be filled in',
            'address_uz.required' => 'Ushbu maydonni to`ldirish kerak',
            'address_ru.required' => 'Это поле нужно заполнить',
            'address_en.required' => 'This field needs to be filled in',
            'phone.required' => 'Это поле нужно заполнить',
            'email.required' => 'Это поле нужно заполнить',
            'email.email' => 'Должно быть валидной почтой',
            'map_link.required' => 'Это поле нужно заполнить',
            'facebook.url' => 'Должно быть валидной ссылкой',
            'instagram.url' => 'Должно быть валидной ссылкой',
            'telegram.url' => 'Должно быть валидной ссылкой',
        ];
    }
}
