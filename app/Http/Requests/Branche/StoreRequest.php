<?php

namespace App\Http\Requests\Branche;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name_uz'=>'required|string|max:255',
            'name_ru'=>'required|string|max:255',
            'name_en'=>'required|string|max:255',
            'address_uz'=>'required|string|max:255',
            'address_ru'=>'required|string|max:255',
            'address_en'=>'required|string|max:255',
            'phone'=>'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name_uz.required' => 'Это поле нужно заполнить',
            'name_ru.required' => 'Это поле нужно заполнить',
            'name_en.required' => 'Это поле нужно заполнить',
            'address_uz.required' => 'Это поле нужно заполнить',
            'address_ru.required' => 'Это поле нужно заполнить',
            'address_en.required' => 'Это поле нужно заполнить',
            'phone.required' => 'Это поле нужно заполнить',
        ];
    }
}
