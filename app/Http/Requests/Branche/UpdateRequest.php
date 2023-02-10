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
            'name'=>'required|string|max:255',
            'address'=>'required|string|max:255',
            'phone'=>'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле нужно заполнить',
            'address.required' => 'Это поле нужно заполнить',
            'phone.required' => 'Это поле нужно заполнить',
        ];
    }
}
