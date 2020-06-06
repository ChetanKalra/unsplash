<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(!Auth::check() || !Auth::user()->is_email_verified)
            return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:3',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter a category name',
            'name.max' => 'Category < 255 chars'
        ];
    }
}
