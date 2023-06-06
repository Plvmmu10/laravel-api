<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|unique:projects|min:3',
            'image' => 'nullable',
            'description' => 'nullable'
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'title.unique:projects' => 'Title has to be unique',
            'title.min' => 'Title has to be at least 3 characters long'
        ];
    }
}