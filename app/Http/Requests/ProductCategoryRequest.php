<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required,unique:categories',
            'parent_id' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Trường không được để trống',
            'parent_id.required' => 'Trường không được để trống',

        ];
    }
}
