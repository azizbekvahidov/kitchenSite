<?php

namespace App\Http\Requests\MenuCategory;

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
            'branch_id'=>'required|integer|exists:branches,id',
        ];
    }

    public function messages()
    {
        return [
            'name_uz.required' => 'Это поле нужно заполнить',
            'name_ru.required' => 'Это поле нужно заполнить',
            'name_en.required' => 'Это поле нужно заполнить',
            'branch_id.required' => 'Это поле нужно заполнить',
        ];
    }
}
