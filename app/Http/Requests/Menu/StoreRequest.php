<?php

namespace App\Http\Requests\Menu;

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
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'description_uz' => 'required|string|max:255',
            'description_ru' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            'price' => 'required|numeric',
            'menu_category_id' => 'required|integer|exists:menu_categories,id',
        ];
    }

    public function messages()
    {
        return [
            'name_uz' => 'Это поле нужно заполнить',
            'name_ru' => 'Это поле нужно заполнить',
            'name_en' => 'Это поле нужно заполнить',
            'description_uz' => 'Это поле нужно заполнить',
            'description_ru' => 'Это поле нужно заполнить',
            'description_en' => 'Это поле нужно заполнить',
            'price' => 'Это поле нужно заполнить',
            'menu_category_id' => 'Это поле нужно заполнить',
        ];
    }
}
