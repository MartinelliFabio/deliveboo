<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateProductRequest extends FormRequest
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
            'name' => 'required|max:100|min:3',
            'price' => 'required|numeric|between:3,100',
            'image' => 'nullable|image|max:255',
            'available' => 'required',
            'ingredient' => 'nullable',
        ];
        
    }
    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio.',
            'name.min' => 'Il nome deve essere lungo almeno :min caratteri.',
            'name.max' => 'Il nome non può superare i :max caratteri.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.between' => 'Il prezzo deve essere compreso tra :min e :max.',
        ];
    }
}
