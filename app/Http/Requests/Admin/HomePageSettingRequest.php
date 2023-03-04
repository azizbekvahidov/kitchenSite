<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class HomePageSettingRequest extends FormRequest
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
            'title_uz' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_uz' => 'required|string|max:255',
            'description_ru' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            'work_time_from' => 'required|date_format:"H:i:s"',
            'work_time_to' => 'required|date_format:"H:i:s"',
        ];
    }
}
