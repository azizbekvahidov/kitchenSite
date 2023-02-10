<?php

namespace App\Http\Requests\Branche;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
    public function messages()
    {
        return [
            'name_uz.required' => 'Ushbu maydonni to`ldirish kerak',
            'name_ru.required' => 'Это поле нужно заполнить',
            'name_en.required' => 'This field needs to be filled in',
            'address_uz.required' => 'Ushbu maydonni to`ldirish kerak',
            'address_ru.required' => 'Это поле нужно заполнить',
            'address_en.required' => 'This field needs to be filled in',
            'phone.required' => 'Это поле нужно заполнить',
        ];
    }
}
