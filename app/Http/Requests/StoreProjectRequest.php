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
            'description' => 'nullable',
            'technology_id' => 'required|exists:technologies,id',
            'tags' => 'nullable|exists:tags,id'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'name.unique:projects' => 'Name has to be unique',
            'name.min' => 'Name has to be at least 3 characters long',
            'technology_id.required' => 'Technology is required'
        ];
    }
}